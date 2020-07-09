
  <nav class="wazo16nav">
  <div class="wazo16">
    <div class="wazo16__patty"></div>
  </div>

  <ul class="nav__list">

    <li class="nav__item">
      <a href="#1" class="nav__link c-blue"><i class="fa fa-lock fa-lg"><font style="font-size: 12px;">Security</font> </i></a>

    </li>

    <li class="nav__item">
      <a href="#2" class="nav__link c-yellow scrolly"><i class="fa fa-building-o fa-lg"><font style="font-size: 12px;">Property</font> </i></a>
    </li>
    <li class="nav__item">
      <a href="#3" class="nav__link c-red"><i class="fa fa-trash-o fa-lg"><font style="font-size: 12px;">Waste</font></i></a>
    </li>
    <li class="nav__item">
      <a href="#4" class="nav__link c-green"><i class="fa fa-car fa-lg"><font style="font-size: 12px;">Moving</font></i></a>
    </li>
  </ul>
</nav>





  <script type="text/javascript">
    var menu = document.querySelector('.nav__list');
var wazo16 = document.querySelector('.wazo16');
var doc = $(document);
var l = $('.scrolly');
var wazo16panel = $('.wazo16panel');
var vh = $(window).height();

var openMenu = function() {
  wazo16.classList.toggle('wazo16--active');
  menu.classList.toggle('nav__list--active');
};

// reveal content of first wazo16panel by default
wazo16panel.eq(0).find('.wazo16panel__content').addClass('wazo16panel__content--active');

var scrollFx = function() {
  var ds = doc.scrollTop();
  var of = vh / 4;
  
  // if the wazo16panel is in the viewport, reveal the content, if not, hide it.
  for (var i = 0; i < wazo16panel.length; i++) {
    if (wazo16panel.eq(i).offset().top < ds+of) {
     wazo16panel
       .eq(i)
       .find('.wazo16panel__content')
       .addClass('wazo16panel__content--active');
    } else {
      wazo16panel
        .eq(i)
        .find('.wazo16panel__content')
        .removeClass('wazo16panel__content--active')
    }
  }
};

var scrolly = function(e) {
  e.preventDefault();
  var target = this.hash;
  var $target = $(target);

  $('html, body').stop().animate({
      'scrollTop': $target.offset().top
  }, 300, 'swing', function () {
      window.location.hash = target;
  });
}

var init = function() {
  wazo16.addEventListener('click', openMenu, false);
  window.addEventListener('scroll', scrollFx, false);
  window.addEventListener('load', scrollFx, false);
  $('a[href^="#"]').on('click',scrolly);
};

doc.on('ready', init);
  </script>

