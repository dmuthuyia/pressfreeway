

<script type="text/javascript">
            $(function() {
          if ($.browser.msie && $.browser.version.substr(0,1)<7)
          {
            $('li').has('ul').mouseover(function(){
                $(this).children('ul').css('visibility','visible');
                }).mouseout(function(){
                $(this).children('ul').css('visibility','hidden');
                })
          }
        }); 
            /* Mobile */
        $('#wazo8-wrap').prepend('<div id="wazo8-trigger">menu</div>');       
        $("#wazo8-trigger").on("click", function(){
            $("#wazo8").slideToggle();
        });

        // iPad
        var isiPad = navigator.userAgent.match(/iPad/i) != null;
        if (isiPad) $('#wazo8 ul').addClass('no-transition');
</script>


<ul id="wazo8">
    <li><a href="#">Home</a></li>
    <li>
        <a href="#">Categories</a>
        <ul>
            <li><a href="#">CSS</a></li>
            <li>

                <a href="#">Graphic design</a>
                <ul>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">Graphic design</a></li>
                    <li><a href="#">Development tools</a></li>
                    <li><a href="#">Web design</a></li>
                </ul>
        </li>
            <li><a href="#">Development tools</a></li>
            <li><a href="#">Web design</a></li>
        </ul>
    </li>
    <li><a href="#">Work</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
</ul>
