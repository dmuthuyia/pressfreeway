@extends('layouts.nyumba')

@section('kichwa')

    Pressfreeway: World

@endsection

@section('sebule')


<?php
include app_path() . '/includes/functions.php';
?>


<div class="dX mediatab2">
        <div class="dY-4 dxy-border-1" >
            <div class="dX dxy-border-4">
                <div class="dY-4 dxy-border-1" >
                    <h3> <a class="media-links1" href="{{ url('article', [$politics1->url]) }}" id="">{{$politics1->title}}</a></h3>
                    <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $politics1->article_img) ?>"></img>
                    <div class="interactionTab-1">
                        By: <a href="{{ url('writer', [$politics1->user->url]) }}" id="">{{ $politics1->user->FirstName }} {{ $politics1->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-2" >
                <h3> <a class="media-links1" href="{{ url('article', [$world1->url]) }}" id="">{{$world1->title}}</a></h3>
                <p>
<?php

$content = html_cut($world1->article_body, 200) . '..';

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>


                    </p>
                     <div class="interactionTab-1">
                     By: <a href="{{ url('writer', [$world1->user->url]) }}" id="">{{ $world1->user->FirstName }} {{ $world1->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>

            </div>

            <div class="dX dxy-border-4 mediatab1">
                <div class="dY-3 dxy-border-1" >
                    <h3> <a class="media-links1" href="{{ url('article', [$business1->url]) }}" id="">{{$business1->title}}</a></h3>
                    <p>
<?php

$content = html_cut($business1->article_body, 200) . '..';

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>


                    </p>
                     <div class="interactionTab-1">
                     By: <a href="{{ url('writer', [$business1->user->url]) }}" id="">{{ $business1->user->FirstName }} {{ $business1->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-3" >
                    <h3> <a class="media-links1" href="{{ url('article', [$health1->url]) }}" id="">{{$health1->title}}</a></h3>
                    <img style="width: 200px;" src="<?php echo asset("uploads/articles/" . $health1->article_img) ?>" class="image-t-left"></img>


<?php

//$article_body = nl2br(e(substr($health1->article_body, 0, 400) . '......'));
//$article_body = substr($health1->article_body, 0, 300);
//$formatted_article_body = htmlspecialchars_decode($health1->article_body);
//$article_body = str_limit($formatted_article_body, $limit = 500, $end = '...');

$content = html_cut($health1->article_body, 100) . '.....';

//$valu = html_entity_decode($health1->article_body);

//$valus = cut_html_recursive($health1->article_body, 100);
$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>






                     <div class="interactionTab-1">
                     By: <a href="{{ url('writer', [$health1->user->url]) }}" id="">{{ $health1->user->FirstName }} {{ $health1->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>

            </div>

            <div class="dX dxy-border-4">
                <div class="dY-2 dxy-border-1" >
                <h3> <a class="media-links1" href="{{ url('article', [$sport1->url]) }}" id="">{{$sport1->title}}</a></h3>
                    <img src="<?php echo asset("uploads/articles/" . $sport1->article_img) ?>" class="image-width"></img>
                    <div class="interactionTab-1">
                        By: <a href="{{ url('writer', [$health1->user->url]) }}" id="">{{ $health1->user->FirstName }} {{ $health1->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-2 dxy-border-1" >
                <h3> <a class="media-links1" href="{{ url('article', [$people1->url]) }}" id="">{{$people1->title}}</a></h3>
                <p>
<?php

$content = html_cut($people1->article_body, 200) . '..';

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>


                    </p>
                     <div class="interactionTab-1">
                     By: <a href="{{ url('writer', [$people1->user->url]) }}" id="">{{ $people1->user->FirstName }} {{ $people1->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-2" >
                    <H3>Sen. Burr stepping down as Intelligence Committee chair amid investigation of stock sales before outbreak</H3>
                    <img style="width: 200px;" src="assets/images/featured/medicines.jpg" class="image-t-left"></img><p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday, escalating the investigation of whether laws were broken when he sold a significant share of his stocks before markets crashed.
                     By Devlin Barrett, Seung Min Kim and Katie Shepherd</p>

                     <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>

                </div>

            </div>

        </div>

        <div class="dY-2 mediatab1" >
            <div class="dX ">
                <div class="dY-6 dxy-border-4" >
                    <H3>Latest Articles</H3>

                    @foreach($latestArticles as $article)

                    <div class="dX">
                        <div class="dY-5">
                            <div class="newsHeader1">
                                <a href="{{ url('article', [$article->url]) }}" id="">{{ $article->title }}</a>
                            </div>
                            <div class="interactionTab-1">
                                By: <a href="{{ url('writer', [$article->user->url]) }}" id="">{{ $article->user->FirstName }} {{ $article->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                            </div>
                        </div>

                        <div class="dY-1">
                            <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $article->article_img) ?>" class="image-t-left"></img>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
            <div class="dX">
                <div class="dY-6 dxy-border-4" >
                    <H3>Most Read</H3>
                    @foreach($mostReads as $article)

                    <div class="dX">
                        <div class="dY-5">
                            <div class="newsHeader1">
                                <a href="{{ url('article', [$article->article->url]) }}" id="">{{ $article->article->title }}</a>
                            </div>
                            <div class="interactionTab-1">
                                By: <a href="{{ url('writer', [$article->article->user->url]) }}" id="">{{ $article->article->user->FirstName }} {{ $article->article->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                            </div>
                        </div>

                        <div class="dY-1">
                            <img style="width: 100%;" src="<?php echo asset("uploads/articles/" . $article->article->article_img) ?>" class="image-t-left"></img>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
            <div class="dX">
                <div class="dY-6 dxy-border-4" >
                    <H3>Most Cited</H3>


                    <div class="dX">
                        <div class="dY-5">
                            <div class="newsHeader1">
                                <a href="#" id="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor</a>
                            </div>
                            <div class="interactionTab-1">
                                By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                            </div>
                        </div>

                        <div class="dY-1">
                            <img style="width: 100%;" src="assets/images/featured/15-nick-again.jpg" class="image-t-left"></img>
                        </div>
                    </div>

                    <div class="dX">
                        <div class="dY-5">
                            <div class="newsHeader1">
                                <a href="#" id="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor</a>
                            </div>
                            <div class="interactionTab-1">
                                By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                            </div>
                        </div>

                        <div class="dY-1">
                            <img style="width: 100%;" src="assets/images/featured/15-nick-again.jpg" class="image-t-left"></img>
                        </div>
                    </div>




                </div>
            </div>
            <div class="dX">
                <div class="dY-6 dxy-border-4" >
                    <H3>Trending on Altmetric</H3>
                </div>
            </div>
            <div class="dX">
                <div class="dY-6 dxy-border-4" >
                    <video width="100%"  controls>
                    {{-- <source src="{{URL::asset("/images/upload/$itemContent->file_name")}}" type="video/mp4"> --}}
                        <source src="{{URL::asset("/uploads/videos/anime.mp4")}}" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>


    </div>
     <!-- ************************Section 2********************************* -->
    <div class="dX">
        <div class="dY-6 " >
            <div class="dxy-section-1">
                <H2> Nearly 3 million Americans filed jobless claims last week </H2>
                <p2> Many of these workers lost their jobs because of closures and a huge <Br> drop in spending and travel during the pandemic. In total, 36.5 million people have filed for <Br>unemployment benefits in the past eight weeks.</p>
            </div>
        </div>

    </div>

    <!-- ************************Section 3********************************* -->
    <div class="dX mediatab2">
        <div class="dY-4 dxy-border-1" >

            <div class="dX dxy-border-4 mediatab1">

                <div class="dY-3 dxy-border-1" >
                <h3> <a class="media-links1" href="{{ url('article', [$travel1->url]) }}" id="">{{$travel1->title}}</a></h3>
                <img style="width: 200px;" src="<?php echo asset("uploads/articles/" . $travel1->article_img) ?>" class="image-t-left"></img>
                    <p>
<?php

$content = html_cut($travel1->article_body, 200) . '..';

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>


                    </p>
                    <div class="interactionTab-1">
                    By: <a href="{{ url('writer', [$travel1->user->url]) }}" id="">{{ $travel1->user->FirstName }} {{ $travel1->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-3" >
                    <H3>Sen. Burr stepping down as Intelligence Committee chair amid investigation of stock</H3>
                    <p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday, escalating the investigation of whether laws were broken when he sold a significant share of his stocks before markets crashed.
                     By Devlin Barrett, Seung Min Kim and Katie Shepherd</p>
                     <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
            </div>

            <div class="dX dxy-border-4">

                <div class="dY-2 dxy-border-1" >
                    <H3>Sen. Burr stepping down as Intelligence Committee chair</H3>
                    <p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday, escalating the investigation of whether laws were broken when he sold a significant share of his stocks before markets crashed.
                    <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-1" >
                <a class="media-links1" href="{{ url('article', [$science1->url]) }}" id=""><img style="width: 200px;" src="<?php echo asset("uploads/articles/" . $science1->article_img) ?>" class="image-t-left"></img></a>

                    <p>
<?php

$content = html_cut($science1->article_body, 200) . '..';

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>


                    </p>
                    <div class="interactionTab-1">
                    By: <a href="{{ url('writer', [$science1->user->url]) }}" id="">{{ $science1->user->FirstName }} {{ $science1->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>

                <div class="dY-1" >
                <a class="media-links1" href="{{ url('article', [$agriculture1->url]) }}" id=""><img src="assets/images/featured/tech20.jpg" class="image-yelas"></img></a>
                    <p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday</p>
                    <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-1" >
                <a class="media-links1" href="{{ url('article', [$agriculture1->url]) }}" id=""><img style="width: 200px;" src="<?php echo asset("uploads/articles/" . $agriculture1->article_img) ?>" class="image-t-left"></img></a>
                <p>
<?php

$content = html_cut($agriculture1->article_body, 200) . '..';

$formatted_article_body = htmlspecialchars_decode($content);
echo ($formatted_article_body);
?>


                    </p>

                    <div class="interactionTab-1">
                    By: <a href="{{ url('writer', [$agriculture1->user->url]) }}" id="">{{ $agriculture1->user->FirstName }} {{ $agriculture1->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-1" >
                <a class="media-links1" href="{{ url('article', [$weather1->url]) }}" id=""><img style="width: 200px;" src="<?php echo asset("uploads/articles/" . $weather1->article_img) ?>" class="image-t-left"></img></a>
                <?php

$content = html_cut($weather1->article_body, 100) . '..';

$formatted_article_body = htmlspecialchars_decode($content);
//echo ($formatted_article_body);
?>
                    <span style="font-size:8px;"> {!! $formatted_article_body !!}</span>
                    <div class="interactionTab-1">
                    By: <a href="{{ url('writer', [$weather1->user->url]) }}" id="">{{ $weather1->user->FirstName }} {{ $weather1->user->LastName }}</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>

                </div>
            </div>


        </div>

        <div class="dY-2" >
            <div class="dX">
                <div class="dY-6 dxy-border-4" >
                    <H3>Latest Articles</H3>



                </div>
            </div>
            <div class="dX">
                <div class="dY-6 dxy-border-4" >
                    <H3>Most Read</H3>
                </div>
            </div>
            <div class="dX">
                <div class="dY-6 dxy-border-4" >
                    <H3>Most Cited</H3>

                </div>
            </div>
            <div class="dX">
                <div class="dY-6 dxy-border-4" >
                    <H3>Trending on Altmetric</H3>
                </div>
            </div>

            <div class="dX">
                <div class="dY-6 dxy-border-4" >
                    <video width="100%"  controls>
                        <source src="{{URL::asset("/uploads/videos/film.mp4")}}" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>

    </div>





@endsection
