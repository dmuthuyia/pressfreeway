@extends('layouts.nyumbasmg')

@section('kichwa')

Pressfreeway: World

@endsection

@section('sebule')

<?php
include app_path() . '/includes/functions.php';
?>


<!-- ************************section 1 main********************************* -->
<div class="dX" style="padding-top:50px;">

    <div class="dY-4" style="">
        <!-- ************************section 1 main subsection 1********************************* -->
        <div class="dX">
            <div class="dY-4 ">
                <div class="dX">
                    <div class="dY-6">
                        <div class="mediatab3">
                            <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $politics1->article_img) ?>"></img>
                            <h3> <a class="media-links1" href="{{ url('article', [$politics1->url]) }}" id="">{{$politics1->title}}</a></h3>
                            <div class="interactionTab-1">
                                By: <a href="{{ url('writer', [$politics1->user->id]) }}" id="">{{ $politics1->user->FirstName }} {{ $politics1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['politics1Count']}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dY-2">

                <div class="dX">
                    <div class="dY-6">
                        <div class="mediatab3">
                            <div class="dX">
                                <div class="dY-3">
                                    <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $world1->article_img) ?>" class="image-t-left"></img>
                                </div>
                                <div class="dY-3">
                                    <h3> <a class="media-links1" href="{{ url('article', [$world1->url]) }}" id="">{{$world1->title}}</a></h3>

                                    <p>
                                        <?php

$content = html_cut($world1->article_body, 50);

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>

                                    </p>
                                </div>
                                <div class="interactionTab-1">
                                    By: <a href="{{ url('writer', [$world1->user->id]) }}" id="">{{ $world1->user->FirstName }} {{ $world1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['world1Count']}}
                                </div>
                            </div>
                            <div class="dX">
                                <div class="dY-6">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="dX">
                    <div class="dY-6">
                        <div class="mediatab3">
                            <div class="dX">
                                <div class="dY-3">
                                    <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $business1->article_img) ?>" class="image-t-left"></img>
                                </div>
                                <div class="dY-3">
                                    <h3> <a class="media-links1" href="{{ url('article', [$business1->url]) }}" id="">{{$business1->title}}</a></h3>

                                    <p>
                                        <?php

$content = html_cut($business1->article_body, 50);

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>

                                    </p>
                                </div>
                                <div class="interactionTab-1">
                                    By: <a href="{{ url('writer', [$business1->user->id]) }}" id="">{{ $business1->user->FirstName }} {{ $business1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['business1Count']}}
                                </div>
                            </div>
                            <div class="dX">
                                <div class="dY-6">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- ************************section 1 main subsection 2********************************* -->

        <div class="dX">
            <div class="dY-3">
                <div class="mediatab3" style="min-height:220px;">
                    <div class="dY-3">
                        <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $travel1->article_img) ?>" class="image-t-left"></img>
                    </div>
                    <div class="dY-3">
                        <h3> <a class="media-links1" href="{{ url('article', [$travel1->url]) }}" id="">{{$travel1->title}}</a></h3>

                        <p>
                            <?php

$content = html_cut($travel1->article_body, 50);

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>

                        </p>
                    </div>
                    <div class="interactionTab-1">
                        By: <a href="{{ url('writer', [$travel1->user->id]) }}" id="">{{ $travel1->user->FirstName }} {{ $travel1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['travel1Count']}}
                    </div>
                </div>
            </div>
            <div class="dY-3">
                <div class="mediatab3" style="min-height:220px;">
                    <div class="dY-3">
                        <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $sport1->article_img) ?>" class="image-t-left"></img>
                    </div>
                    <div class="dY-3">
                        <h3> <a class="media-links1" href="{{ url('article', [$sport1->url]) }}" id="">{{$sport1->title}}</a></h3>

                        <p>
                            <?php

$content = html_cut($sport1->article_body, 50);

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>

                        </p>
                    </div>
                    <div class="interactionTab-1">
                        By: <a href="{{ url('writer', [$sport1->user->id]) }}" id="">{{ $sport1->user->FirstName }} {{ $sport1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['sport1Count']}}
                    </div>
                </div>
            </div>

        </div>
        <!-- ************************section 1 main subsection 3********************************* -->
        <div class="dX">
            <div class="dY-2">
                <div class="mediatab3">
                    <H3> SITE UNDER MAINTENANCE </H3>
                </div>
            </div>
            <div class="dY-2">
                <div class="mediatab3">
                    <H3> SITE UNDER MAINTENANCE </H3>
                </div>
            </div>
            <div class="dY-2">
                <div class="mediatab3">
                    <H3> SITE UNDER MAINTENANCE </H3>
                </div>
            </div>

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
                            By: <a href="{{ url('writer', [$latestArticle->user->id]) }}" id="">{{ $latestArticle->user->FirstName }} {{ $latestArticle->user->LastName }}</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<!-- ************************section 2 main********************************* -->
<div class="dX" style="">

    <div class="dY-6">
        <div class="mediatab3 mediaHeader2">
            Latest Articles
        </div>
    </div>

</div>


<div class="dX" style="">

    <div class="dY-0_4">
        <div class="mediatab3 tabHeight1 ">
            <div class="tabHeight1-image">
                <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $politics1->article_img) ?>"></img>
            </div>

            <div class="mediatab4">
                <h3> <a class="media-links1" href="{{ url('article', [$politics1->url]) }}" id="">{{$politics1->title}}</a></h3>
                <div class="interactionTab-1">
                    By: <a href="{{ url('writer', [$politics1->user->id]) }}" id="">{{ $politics1->user->FirstName }} {{ $politics1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['politics1Count']}}
                </div>

            </div>
        </div>
    </div>

    <div class="dY-0_4">
        <div class="mediatab3 tabHeight1 ">
            <div class="tabHeight1-image">
                <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $science1->article_img) ?>"></img>
            </div>
            <div class="mediatab4">
                <h3> <a class="media-links1" href="{{ url('article', [$science1->url]) }}" id="">{{$science1->title}}</a></h3>
                <div class="interactionTab-1">
                    By: <a href="{{ url('writer', [$science1->user->id]) }}" id="">{{ $science1->user->FirstName }} {{ $science1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['science1Count']}}
                </div>

            </div>
        </div>
    </div>

    <div class="dY-0_4">
        <div class="mediatab3 tabHeight1 ">
            <div class="tabHeight1-image">
                <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $agriculture1->article_img) ?>"></img>
            </div>
            <div class="mediatab4">
                <h3> <a class="media-links1" href="{{ url('article', [$agriculture1->url]) }}" id="">{{$agriculture1->title}}</a></h3>
                <div class="interactionTab-1">
                    By: <a href="{{ url('writer', [$agriculture1->user->id]) }}" id="">{{ $agriculture1->user->FirstName }} {{ $agriculture1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['agriculture1Count']}}
                </div>

            </div>
        </div>
    </div>


    <div class="dY-0_4">
        <div class="mediatab3 tabHeight1 ">
            <div class="tabHeight1-image">
                <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $weather1->article_img) ?>"></img>
            </div>
            <div class="mediatab4">
                <h3> <a class="media-links1" href="{{ url('article', [$weather1->url]) }}" id="">{{$weather1->title}}</a></h3>
                <div class="interactionTab-1">
                    By: <a href="{{ url('writer', [$weather1->user->id]) }}" id="">{{ $weather1->user->FirstName }} {{ $weather1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['weather1Count']}}
                </div>

            </div>
        </div>
    </div>

</div>

<!-- ************************section 3 main********************************* -->

<div class="dX" style="">

    <div class="dY-0_4">
        <div class="mediatab3">
            <H3> SITE UNDER MAINTENANCE </H3>
        </div>
    </div>

    <div class="dY-0_4">
        <div class="mediatab3">
            <H3> SITE UNDER MAINTENANCE </H3>
        </div>
    </div>

    <div class="dY-0_4">
        <div class="mediatab3">
            <H3> SITE UNDER MAINTENANCE </H3>
        </div>
    </div>


    <div class="dY-0_4">
        <div class="mediatab3">
            <H3> SITE UNDER MAINTENANCE </H3>
        </div>
    </div>

</div>



<!-- ************************section 4 main subsection 3********************************* -->
<div class="dX">
    <div class="dY-4">
        <div class="dX">
            <div class="dY-3">
                <div class="mediatab3 tabHeight1 ">
                    <div class="tabHeight2-image">
                        <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $people1->article_img) ?>"></img>
                    </div>
                    <div class="">
                        <h3> <a class="media-links1" href="{{ url('article', [$people1->url]) }}" id="">{{$people1->title}}</a></h3>
                        <div class="interactionTab-1">
                            By: <a href="{{ url('writer', [$people1->user->id]) }}" id="">{{ $people1->user->FirstName }} {{ $people1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['agriculture1Count']}}
                        </div>

                    </div>
                </div>
            </div>
            <div class="dY-3">
                <div class="mediatab3 tabHeight1 ">
                    <div class="tabHeight2-image">
                        <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $health1->article_img) ?>"></img>
                    </div>
                    <div class="">
                        <h3> <a class="media-links1" href="{{ url('article', [$health1->url]) }}" id="">{{$health1->title}}</a></h3>
                        <div class="interactionTab-1">
                            By: <a href="{{ url('writer', [$health1->user->id]) }}" id="">{{ $health1->user->FirstName }} {{ $health1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['health1Count']}}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="dX">
            <div class="dY-3">
                <div class="mediatab3 tabHeight1 ">
                    <div class="tabHeight2-image">
                        <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $agriculture1->article_img) ?>"></img>
                    </div>
                    <div class="">
                        <h3> <a class="media-links1" href="{{ url('article', [$agriculture1->url]) }}" id="">{{$agriculture1->title}}</a></h3>
                        <div class="interactionTab-1">
                            By: <a href="{{ url('writer', [$agriculture1->user->id]) }}" id="">{{ $agriculture1->user->FirstName }} {{ $agriculture1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['agriculture1Count']}}
                        </div>

                    </div>
                </div>
            </div>
            <div class="dY-3">
                <div class="mediatab3 tabHeight1 ">
                    <div class="tabHeight2-image">
                        <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $entertainment1->article_img) ?>"></img>
                    </div>
                    <div class="">
                        <h3> <a class="media-links1" href="{{ url('article', [$entertainment1->url]) }}" id="">{{$entertainment1->title}}</a></h3>
                        <div class="interactionTab-1">
                            By: <a href="{{ url('writer', [$entertainment1->user->id]) }}" id="">{{ $entertainment1->user->FirstName }} {{ $entertainment1->user->LastName }}</a> | <span style="color: #b48a01;"> Views </span> {{$viewscount['entertainment1Count']}}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ************************Panel********************************* -->
    <div class="dY-2 " style="">
        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3 mediaHeader1">
                    Most Read
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
                            By: <a href="{{ url('writer', [$latestArticle->user->id]) }}" id="">{{ $latestArticle->user->FirstName }} {{ $latestArticle->user->LastName }}</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


</div>

<!-- ************************section 5 main********************************* -->

<div class="dX" style="">

    <div class="dY-0_4">
        <div class="mediatab3">
            <H3> SITE UNDER MAINTENANCE </H3>
        </div>
    </div>

    <div class="dY-0_4">
        <div class="mediatab3">
            <H3> SITE UNDER MAINTENANCE </H3>
        </div>
    </div>

    <div class="dY-0_4">
        <div class="mediatab3">
            <H3> SITE UNDER MAINTENANCE </H3>
        </div>
    </div>


    <div class="dY-0_4">
        <div class="mediatab3">
            <H3> SITE UNDER MAINTENANCE </H3>
        </div>
    </div>

</div>





@endsection
