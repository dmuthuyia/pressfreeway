<!DOCTYPE html>
<html>

<head>
    <title>Pressfreeway</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/bootstrap/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/fontawesome/css/all.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/animate.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/thadmatrix.css') }} ">

    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/media.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/menu.css') }} ">



    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/nivo-slider.css') }} ">




    <script src="{{ URL::to('assets/js/jquery-3.4.1.min.js') }} "></script>
    <script src="{{ URL::to('assets/js/jquery-migrate-3.1.0.js') }} "></script>
    <script src="{{ URL::to('assets/js/jqueryui/jquery-ui.js') }} "></script>

    <script src="{{ URL::to('assets/bootstrap/js/bootstrap.min.js') }} "></script>
    <script src="{{ URL::to('assets/fontawesome/js/all.js') }} "></script>

    <script src="{{ URL::to('assets/js/moment.js') }} "></script>


    <script src="{{ URL::to('assets/js/jssor.slider-22.2.16.min.js') }} "></script>
    <script src="{{ URL::to('assets/js/viewportchecker.js') }} "></script>

    <script src="https://cdn.tiny.cloud/1/gelzsentzld05z3orgdhf9g8g4jylco884kw9bnzcpip8wu3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


</head>


<body>

<div class="dXY-container ">
    <div class="dX">
    @include('includes.wazo17')
    </div>

    <div class="dX" style="min-height: 80px; width:100%; background-color: red; " >
        <div class="dY-3" style="display: flex; align-items: left; justify-content: left; overflow:hidden;">
        <a href="{{ route('home') }}" style=""><img style="width: 80px; padding: 5px; border-radius: 15px;" src="../assets/images/app/press-freeway.png"></img></a> <span style="height:80px; line-height: 80px;font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif; font-size: 30px;">Pressfreeway</span>
            @include('includes.mobimenu_B2')
        </div>
        <div class="dY-1">

        </div>
        <div class="dY-2 dxy-action-btns-tab-1" style=" ">
            <span style="font-size: 12px; color: #fff; padding-right: 5px;">Polls</span>
            <a style="width: 100%;" href="" id="polls"><img class="" style="width:40px;" src="../assets/images/social/polls.png" alt="LinkedIn" /></a>
            <span style="font-size: 12px; color: #fff; padding-right: 5px;">write article</span>
            <a style="width: 100%;" href="{{ route('article.new') }}" id="new article"><img class="" style="width:40px;" src="../assets/images/social/new-article.png" alt="new article" /></a>
            <span style="font-size: 12px; color: #fff; padding-right: 5px;">all articles</span>
            <a style="width: 100%;" href="{{ route('articles') }}" id="new article"><img class="" style="width:40px;" src="../assets/images/social/archive.png" alt="new article" /></a>
        </div>

    </div>
    <!-- ************************Menu********************************* -->


     <!-- ************************Section 1********************************* -->
    <div class="dX mediatab2">
        <div class="dY-4 dxy-border-1" >
            <div class="dX dxy-border-4">
                <div class="dY-4 dxy-border-1" >
                    <H3>Sen. Burr stepping down as Intelligence Committee chair amid investigation of stock sales before outbreak</H3>
                    <img style="width: 100%;" src="assets/images/featured/15-nick-again.jpg"></img>
                    <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-2" >
                    <H3>Sen. Burr stepping down as Intelligence Committee chair amid investigation of stock sales before outbreak</H3>
                    <p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday, escalating the investigation of whether laws were broken when he sold a significant share of his stocks before markets crashed.
                     By Devlin Barrett, Seung Min Kim and Katie Shepherd</p>
                     <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>

            </div>

            <div class="dX dxy-border-4 mediatab1">
                <div class="dY-3 dxy-border-1" >
                    <H3>Sen. Burr stepping down as Intelligence Committee chair amid investigation </H3>
                    <p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday, escalating the investigation of whether laws were broken when he sold a significant share of his stocks before markets crashed.
                     By Devlin Barrett, Seung Min Kim and Katie Shepherd</p>
                     <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-3" >
                    <H3>Sen. Burr stepping down as Intelligence Committee chair amid investigation of stock</H3>
                    <img style="width: 200px;" src="assets/images/featured/1800x1200_coronavirus_1.jpg" class="image-t-left"></img>
                    <p>FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday, escalating the investigation of whether laws were broken when he sold a significant share of his stocks before markets crashed.
                     By Devlin Barrett, Seung Min Kim and Katie Shepherd</p>
                     <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>

            </div>

            <div class="dX dxy-border-4">
                <div class="dY-2 dxy-border-1" >
                    <H3>Sen. Burr stepping down as Intelligence Committee chair amid investigation of stock sales before outbreak</H3>
                    <img src="assets/images/featured/gbv-gender-based-violence-logo.jpg" class="image-width"></img>
                    <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-2 dxy-border-1" >
                    <H3>Sen. Burr stepping down as Intelligence Committee chair amid investigation of stock sales before outbreak</H3>
                    <p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday, escalating the investigation of whether laws were broken when he sold a significant share of his stocks before markets crashed.
                     By Devlin Barrett, Seung Min Kim and Katie Shepherd</p>
                     <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
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
                    @include('includes.social')
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
                    <H3>Most Read</H3>

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
                    <H3>Sen. Burr stepping down as Intelligence Committee chair amid investigation </H3>
                    <img style="width: 300px;" src="assets/images/featured/15-nick-again.jpg" class="image-t-left"></img>
                    <p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday, escalating the investigation of whether laws were broken when he sold a significant share of his stocks before markets crashed.
                    <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
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
                    <img src="assets/images/featured/2epY5LNfoPScFvNcGd7UbH-1200-80.jpg" class="image-yelas"></img>
                    <p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday</p>
                    <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>

                <div class="dY-1" >
                    <img src="assets/images/featured/tech20.jpg" class="image-yelas"></img>
                    <p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday</p>
                    <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-1" >
                    <img src="assets/images/featured/download.jpg" class="image-yelas"></img>
                    <p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday</p>

                    <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
                    </div>
                </div>
                <div class="dY-1" >
                    <img src="assets/images/featured/photo_verybig_204140.jpg" class="image-yelas"></img>
                    <p>The FBI executed a warrant and seized the cellphone of Richard Burr (R-N.C.) late Wednesday</p>
                    <div class="interactionTab-1">
                        By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236
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

    <!-- ************************Footer********************************* -->
    <div class="dX">


    </div>


</div>

</body>

<script>

// document ready
$(document).ready(function() {
    var interval = setInterval(function() {
        var momentNow = moment();
        //var day = momentNow.format('dddd').substring(0,3).toUpperCase();
        var day = momentNow.format('dddd');
        var date1 = momentNow.format('DD MMMM YYYY');
        $('#date-part').html(day + ', ' + date1 );
        $('#time-part').html(momentNow.format('HH:mm:ss'));

    }, 100);


// ........................................................................

    var updateLogs = setInterval(function() {
        //monthly .............................
        $.ajax({
            type : 'GET',
            url : '/ajax-this-month',
            success : function(data){
                //alert(data);
                $('#monthly').html(data.count);
                console.log(data.count);
            },
        });
        // today ...............................

        $.ajax({
            type : 'GET',
            url : '/ajax-this-day',
            success : function(data){
                //alert(data);
                $('#today').html(data.count);
                console.log(data.count);
            },
        });

        // week ...............................

        $.ajax({
            type : 'GET',
            url : '/ajax-this-week',
            success : function(data){
                //alert(data);
                $('#week').html(data.count);
                console.log(data.count);
            },
        });
        // this user today ...............................

        $.ajax({
            type : 'GET',
            url : '/ajax-this-user-today',
            success : function(data){
                //alert(data);
                $('#user-today').html(data.count);
                console.log(data.count);
            },
        });

        // currently ...............................

        $.ajax({
            type : 'GET',
            url : '/ajax-currently-inside',
            success : function(data){
                //alert(data);
                $('#currently').html(data.count);
                console.log(data.count);
            },
        });

    }, 3000);
// ........................................................................


});

// .........................tinyMCE

    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });

</script>


</html>
