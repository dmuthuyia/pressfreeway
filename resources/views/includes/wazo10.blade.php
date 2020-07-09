        <style>
            *{
                margin:0;
                padding:0;
                background:#f9f9f9;
            }
            .title{
                width:703px;
                height:144px;
                position:absolute;
                top:0px;
                left:0px;
                background:transparent url(title.png) no-repeat top left;
            }
            a.back{
                background:transparent url(back.png) no-repeat top left;
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }





        </style>



        <div class="wazo10menu">
            <div class="wazo10item">
                <a class="link wazo10icon_mail"></a>
                <div class="wazo10item_content">
                    <h2>Contact us</h2>
                    <p>
                        <a href="mailto:info@tympanus.net">eMail</a>
                        <a href="http://www.twitter.com/codrops/">Twitter</a>
                        <a href="http://www.facebook.com/pages/Codrops/159107397912">Facebook</a>
                    </p>
                </div>
            </div>
            <div class="wazo10item">
                <a class="link wazo10icon_help"></a>
                <div class="wazo10item_content">
                    <h2>Help</h2>
                    <p>
                        <a href="#">FAQ</a>
                        <a href="#">Live Support</a>
                        <a href="#">Tickets</a>
                    </p>
                </div>
            </div>
            <div class="wazo10item">
                <a class="link wazo10icon_find"></a>
                <div class="wazo10item_content">
                    <h2>Search</h2>
                    <p>
                        <input type="text"></input>
                        <a href="">Go</a>
                    </p>
                </div>
            </div>
            <div class="wazo10item">
                <a class="link wazo10icon_photos"></a>
                <div class="wazo10item_content">
                    <h2>Image Gallery</h2>
                    <p>
                        <a href="#">Categories</a>
                        <a href="#">Archives</a>
                        <a href="#">Featured</a>
                    </p>
                </div>
            </div>
            <div class="wazo10item">
                <a class="link wazo10icon_home"></a>
                <div class="wazo10item_content">
                    <h2>Start from here</h2>
                    <p>
                        <a href="http://www.tympanus.net/">Services</a>
                        <a href="http://www.tympanus.net/">Portfolio</a>
                        <a href="http://www.tympanus.net/">Pricing</a>
                    </p>
                </div>
            </div>
        </div>
        <script src="{{ URL::to('assets/js/jquery-3.1.1.min.js') }} "></script>


        <script src="{{ URL::to('assets/js/jquery-css-transform.js') }} "></script>
        <script src="{{ URL::to('assets/js/jquery-animate-css-rotate-scale.js') }} "></script>
        <script>
            $('.wazo10item').hover(
                function(){
                    var $this = $(this);
                    expand($this);
                },
                function(){
                    var $this = $(this);
                    collapse($this);
                }
            );
            function expand($elem){
                var angle = 0;
                var t = setInterval(function () {
                    if(angle == 1440){
                        clearInterval(t);
                        return;
                    }
                    angle += 40;
                    $('.link',$elem).stop().animate({rotate: '+=-40deg'}, 0);
                },10);
                $elem.stop().animate({width:'268px'}, 1000)
                .find('.wazo10item_content').fadeIn(400,function(){
                    $(this).find('p').stop(true,true).fadeIn(600);
                });
            }
            function collapse($elem){
                var angle = 1440;
                var t = setInterval(function () {
                    if(angle == 0){
                        clearInterval(t);
                        return;
                    }
                    angle -= 40;
                    $('.link',$elem).stop().animate({rotate: '+=40deg'}, 0);
                },10);
                $elem.stop().animate({width:'52px'}, 1000)
                .find('.wazo10item_content').stop(true,true).fadeOut().find('p').stop(true,true).fadeOut();
            }
        </script>