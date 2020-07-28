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

    <div class="dX toolbar1" style="" >
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
    @include('includes.social')

     <!-- ************************Section 1********************************* -->
     @yield('sebule')

    <!-- ************************Footer********************************* -->

    @include('includes.footer')

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
