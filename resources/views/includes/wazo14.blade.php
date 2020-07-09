        <ul id="wazo14">
            <li class="home"><a href="{{ route('home') }}" title="Home">Home</a></li>
            <li class="search"><a href="{{ route('customs') }}" href="" title="Search">Customized vehicles</a></li>
            <li class="photos"><a href="{{ route('salvages') }}" title="Photos">Salvage vehicles / Damaged </a></li>
            <li class="contact"><a href="{{ route('contact') }}" title="Contact">Contact us</a></li>
            <li class="contact"><a href="{{ route('account') }}" title="Contactz">My account</a></li>
        </ul>



        <!-- The JavaScript -->
    
        <script type="text/javascript">
            $(function() {
                var d=300;
                $('#wazo14 a').each(function(){
                    var $this = $(this);
          var r=Math.floor(Math.random()*41)-20;
                    $this.css({'-moz-transform':'rotate('+r+'deg)','-webkit-transform':'rotate('+r+'deg)','transform':'rotate('+r+'deg)'});
                    $('#content').css({'-moz-transform':'rotate('+r+'deg)','-webkit-transform':'rotate('+r+'deg)','transform':'rotate('+r+'deg)'});
                    $this.stop().animate({
                        'marginTop':'-70px'                       
                    },d+=150);
                });
                $('#wazo14 > li').hover(
          function () {
            var $this = $(this);
            $('a',$this).stop().animate({
              'marginTop':'-40px'
            },200);
          },
          function () {
            var $this = $(this);
            $('a',$this).stop().animate({
              'marginTop':'-70px'
            },200);
          }
        ).click(function(){
          var $this = $(this);
          var name = this.className;
          $('#content').animate({marginTop:-600}, 300,function(){
            var $this = $(this);
            var r=Math.floor(Math.random()*41)-20;
            $this.css({'-moz-transform':'rotate('+r+'deg)','-webkit-transform':'rotate('+r+'deg)','transform':'rotate('+r+'deg)'});
            $('#content div').hide();
            $('#'+name).show(); 
            $this.animate({marginTop:-200}, 300); 
          })     
        });
            });
        </script>