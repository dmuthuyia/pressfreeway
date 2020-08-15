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
    <!-- ************************Menu********************************* -->
    <div class="dX toolbar2" style="">
        <div class="dY-6" style="text-align:center;"> <span style="height:60px;font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif; font-size: 40px; color:red; font-weight:bold; display: flex; align-items: center; justify-content: center; overflow:hidden;">Pressfreeway</span></div>

    </div>
    <div class="dX">
        <div id="menuHeader" style="display: flex; align-items: center; justify-content: center;  background-color: #ffffff;">
            @include('includes.wazo30')
            @include('includes.wazo30mobitoolbar')


        </div>
        <div class="mobimenu-wrap-1" id="mobimenu-wrap-1">
            @include('includes.dxy-menu-1')
        </div>


        <div>

            <!-- ************************Content********************************* -->
            <div class="dXY-container ">


            </div>
        </div>


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
            $('#date-part').html(day + ', ' + date1);
            $('#time-part').html(momentNow.format('HH:mm:ss'));

        }, 100);


        // ........................................................................

        var updateLogs = setInterval(function() {
            //monthly .............................
            $.ajax({
                type: 'GET'
                , url: '/ajax-this-month'
                , success: function(data) {
                    //alert(data);
                    $('#monthly').html(data.count);
                    console.log(data.count);
                }
            , });
            // today ...............................

            $.ajax({
                type: 'GET'
                , url: '/ajax-this-day'
                , success: function(data) {
                    //alert(data);
                    $('#today').html(data.count);
                    console.log(data.count);
                }
            , });

            // week ...............................

            $.ajax({
                type: 'GET'
                , url: '/ajax-this-week'
                , success: function(data) {
                    //alert(data);
                    $('#week').html(data.count);
                    console.log(data.count);
                }
            , });
            // this user today ...............................

            $.ajax({
                type: 'GET'
                , url: '/ajax-this-user-today'
                , success: function(data) {
                    //alert(data);
                    $('#user-today').html(data.count);
                    console.log(data.count);
                }
            , });

            // currently ...............................

            $.ajax({
                type: 'GET'
                , url: '/ajax-currently-inside'
                , success: function(data) {
                    //alert(data);
                    $('#currently').html(data.count);
                    console.log(data.count);
                }
            , });

        }, 3000);
        // ........................................................................


    });

    // .........................tinyMCE

    tinymce.init({
        selector: 'textarea'
        , plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak'
        , toolbar_mode: 'floating'
    , });

</script>
<script src="{{ URL::to('assets/js/main.js') }} "></script>

</html>
