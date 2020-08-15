@extends('layouts.nyumbaDeck')

@section('kichwa')

Pressfreeway: {{$pageHeader}}

@endsection

@section('sebule')

<?php
include app_path() . '/includes/functions.php';
?>

<div class="dX" style="padding-top:20px;">

    <div class="dY-4" style="">
        <!-- ************************section 1 main subsection 1********************************* -->
        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3 mediaHeader1">
                    {{$pageHeader}}
                </div>
            </div>
        </div>
        <div class="dX">
            @foreach($mainArticles as $mainArticles)

            <div class="dY-3">
                <div class="mediatab3 tabHeight1 ">
                    <div class="tabHeight2-image">
                        <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $mainArticles->article_img) ?>"></img>
                    </div>
                    <div class="">
                        <h3> <a class="media-links1" href="{{ url('article', [$mainArticles->url]) }}" id="">{{$mainArticles->title}}</a></h3>
                        <div class="interactionTab-1">
                            By: <a href="{{ url('writer', [$mainArticles->user->id]) }}" id="">{{ $mainArticles->user->FirstName }} {{ $mainArticles->user->LastName }}</a>
                        </div>

                    </div>
                </div>
            </div>

            @endforeach

        </div>



    </div>
    <!-- ************************Panel********************************* -->
    <div class="dY-2 " style="">


        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3 mediaHeader1">
                    Latest Articles
                </div>
            </div>
        </div>
        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3">

                    @foreach($latestArticles as $latestArticle)
                    <div class="dxy-border-4">
                        <div class="newsHeader1">
                            <a href="{{ url('article', [$latestArticle->url]) }}" id="">{{ $latestArticle->title }}</a>
                        </div>
                        <div class="interactionTab-1">
                            By: <a href="{{ url('writer', [$latestArticle->user->url]) }}" id="">{{ $latestArticle->user->FirstName }} {{ $latestArticle->user->LastName }}</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<div class="dX" style="padding-top:10px;">

    <div class="dY-4" style="">
        <div class="mediatab3">

            @foreach($articles as $article)
            <div class="dX">
                <div class="dY-2">
                    <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $article->article_img) ?>" class="image-t-left"></img>
                </div>
                <div class="dY-4">
                    <h3> <a class="media-links1" href="{{ url('article', [$article->url]) }}" id="">{{$article->title}}</a></h3>

                    <p>
                        <?php

$content = html_cut($article->article_body, 200);

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>

                    </p>
                    <div class="interactionTab-1">
                        By: <a href="{{ url('writer', [$article->user->id]) }}" id="">{{ $article->user->FirstName }} {{ $article->user->LastName }}</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="">
                <?php echo $articles->render(); ?>
            </div>
        </div>
    </div>
    <div class="dY-2 " style="">


        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3 mediaHeader1">
                    Most viewed
                </div>
            </div>
        </div>
        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3">



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
