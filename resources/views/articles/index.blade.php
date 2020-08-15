@extends('layouts.nyumbaDeck')

@section('kichwa')

Pressfreeway: articles

@endsection

@section('sebule')

<?php

include app_path() . '/includes/functions.php';

?>
<div class="dX" style="padding-top:50px;">

    <div class="dY-4" style="">
        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3 mediaHeader1">
                    All articles
                </div>
            </div>
        </div>
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
