<?php

function html_cut($text, $max_length)
{
    $tags = array();
    $result = "";

    $is_open = false;
    $grab_open = false;
    $is_close = false;
    $in_double_quotes = false;
    $in_single_quotes = false;
    $tag = "";

    $i = 0;
    $stripped = 0;

    $stripped_text = strip_tags($text);

    while ($i < strlen($text) && $stripped < strlen($stripped_text) && $stripped < $max_length) {
        $symbol = $text{$i};
        $result .= $symbol;

        switch ($symbol) {
            case '<':
                $is_open = true;
                $grab_open = true;
                break;

            case '"':
                if ($in_double_quotes) {
                    $in_double_quotes = false;
                } else {
                    $in_double_quotes = true;
                }

                break;

            case "'":
                if ($in_single_quotes) {
                    $in_single_quotes = false;
                } else {
                    $in_single_quotes = true;
                }

                break;

            case '/':
                if ($is_open && !$in_double_quotes && !$in_single_quotes) {
                    $is_close = true;
                    $is_open = false;
                    $grab_open = false;
                }

                break;

            case ' ':
                if ($is_open) {
                    $grab_open = false;
                } else {
                    $stripped++;
                }

                break;

            case '>':
                if ($is_open) {
                    $is_open = false;
                    $grab_open = false;
                    array_push($tags, $tag);
                    $tag = "";
                } else if ($is_close) {
                    $is_close = false;
                    array_pop($tags);
                    $tag = "";
                }

                break;

            default:
                if ($grab_open || $is_close) {
                    $tag .= $symbol;
                }

                if (!$is_open && !$is_close) {
                    $stripped++;
                }

        }

        $i++;
    }

    while ($tags) {
        $result .= "</" . array_pop($tags) . ">";
    }

    return $result;
}

//.............................................................................
/**
 * Limit string without break html tags.
 * Supports UTF8
 *
 * @param string $value
 * @param int $limit Default 100
 */
function str_limit_html($value, $limit)
{

    if (mb_strwidth($value, 'UTF-8') <= $limit) {
        return $value;
    }

    // Strip text with HTML tags, sum html len tags too.
    // Is there another way to do it?
    do {
        $len = mb_strwidth($value, 'UTF-8');
        $len_stripped = mb_strwidth(strip_tags($value), 'UTF-8');
        $len_tags = $len - $len_stripped;

        $value = mb_strimwidth($value, 0, $limit + $len_tags, '', 'UTF-8');
    } while ($len_stripped > $limit);

    // Load as HTML ignoring errors
    $dom = new DOMDocument();
    @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $value, LIBXML_HTML_NODEFDTD);

    // Fix the html errors
    $value = $dom->saveHtml($dom->getElementsByTagName('body')->item(0));

    // Remove body tag
    $value = mb_strimwidth($value, 6, mb_strwidth($value, 'UTF-8') - 13, '', 'UTF-8'); // <body> and </body>
    // Remove empty tags
    return preg_replace('/<(\w+)\b(?:\s+[\w\-.:]+(?:\s*=\s*(?:"[^"]*"|"[^"]*"|[\w\-.:]+))?)*\s*\/?>\s*<\/\1\s*>/', '', $value);
}

//.........................................................................................

function cut_html($html, $limit)
{
    $dom = new DOMDocument();
    $dom->loadHTML(mb_convert_encoding("<div>{$html}</div>", "HTML-ENTITIES", "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    cut_html_recursive($dom->documentElement, $limit);
    return substr($dom->saveHTML($dom->documentElement), 5, -6);
}

function cut_html_recursive($element, $limit)
{
    if ($limit > 0) {
        if ($element->nodeType == 3) {
            $limit -= strlen($element->nodeValue);
            if ($limit < 0) {
                $element->nodeValue = substr($element->nodeValue, 0, strlen($element->nodeValue) + $limit);
            }
        } else {
            for ($i = 0; $i < $element->childNodes->length; $i++) {
                if ($limit > 0) {
                    $limit = cut_html_recursive($element->childNodes->item($i), $limit);
                } else {
                    $element->removeChild($element->childNodes->item($i));
                    $i--;
                }
            }
        }
    }
    return $limit;
}
