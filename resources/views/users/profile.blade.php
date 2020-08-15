@extends('layouts.nyumbaDeck')

@section('kichwa')

Profile: {{ $user->UserName }}'s profile

@endsection

@section('sebule')

<?php
include app_path() . '/includes/functions.php';
?>

<div class="dX" style="padding-top: 50px;">
    <div class="dY-6">
        <div class="mediatab3 mediaHeader1">
            {{ $user->UserName }} {{ $user->LastName }}
        </div>
    </div>
</div>
<div class="dX" style="">
    <div class="dY-2">
        <div class="mediatab3" style="overflow:hidden;">
            <img class="" style="border-radius: 5px; width: 100%;" src="<?php echo asset("uploads/avatars/$user->mypic") ?>"></img>
        </div>
    </div>
    <div class="dY-2">
        <div class="mediatab3">
            <?php
$gendershow = ($user->is_female == 1) ? 'Female' : 'Male';
?>
            <ul>
                <li>Gender: <span class="answer1"> {{ $gendershow }} </span></li>
                <li>Country: <span class="answer1">{{ $user->Country }}</span></li>
                <li>City: <span class="answer1">{{ $user->City }}</span></li>
            </ul>

            {{ $user->ShortBio }}
        </div>
    </div>
    <div class="dY-2">
        <div class="mediatab3">
            <ul>
                <li>Rating: <span class="answer1"></span></li>
                <li>Writer since: <span class="answer1"> </span></li>
                <li>Number of articles: <span class="answer1"> {{$totalArticles}} </span></li>
                <li>Contact: <a href=""> <span class="answer1">Yes</a></span></li>

            </ul>
        </div>
    </div>
</div>

<div class="dX" style="">
    <div class="dY-3 mediatab2">
        <div class="mediatab3 mediaHeader1">
            <h6 style="font-weight:bold">{{ $user->FirstName }} {{ $user->LastName }} Recent articles </h6>
        </div>
    </div>
    <div class="dY-3 mediatab2">
        <div class="mediatab3 mediaHeader1">
            <h6 style="font-weight:bold">{{ $user->FirstName }} {{ $user->LastName }} Popular articles </h6>
        </div>
    </div>
</div>

<div class="dX" style="">
    <div class="dY-3 mediatab2">
        <div class="mediatab3">
            @foreach($authorArticles as $authorArticle)
            <div class="dX dxy-border-4">

                <div class="dY-4">
                    <h3> <a class="media-links1" href="{{ url('article', [$authorArticle->url]) }}" id="">{{$authorArticle->title}}</a></h3>

                    <p>
                        <?php

$content = html_cut($authorArticle->article_body, 100);

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>

                    </p>
                    <div class="interactionTab-1">
                        By: <a href="{{ url('writer', [$authorArticle->user->id]) }}" id="">{{ $authorArticle->user->FirstName }} {{ $authorArticle->user->LastName }}</a>
                    </div>
                </div>
                <div class="dY-2">
                    <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $authorArticle->article_img) ?>" class="image-t-left"></img>
                </div>



            </div>
            @endforeach
        </div>
    </div>
    <div class="dY-3 mediatab2">
        <div class="mediatab3">
            @foreach($authorArticles as $authorArticle)
            <div class="dX dxy-border-4">

                <div class="dY-4">
                    <h3> <a class="media-links1" href="{{ url('article', [$authorArticle->url]) }}" id="">{{$authorArticle->title}}</a></h3>

                    <p>
                        <?php

$content = html_cut($authorArticle->article_body, 100);

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>

                    </p>
                    <div class="interactionTab-1">
                        By: <a href="{{ url('writer', [$authorArticle->user->id]) }}" id="">{{ $authorArticle->user->FirstName }} {{ $authorArticle->user->LastName }}</a>
                    </div>
                </div>
                <div class="dY-2">
                    <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $authorArticle->article_img) ?>" class="image-t-left"></img>
                </div>



            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection
