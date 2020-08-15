<style type="text/css">



</style>




<div class="wazo17">

  <ul class="wazo17menu">

    <li><a href="">World</a>
      <ul class="wazo17submenu">
        <li><a href="">Africa</a>
          <ul class="wazo17subsubmenu">
            <li><a href="">East Africa</a></li>
            <li><a href="">West Africa</a></li>
            <li><a href="">South Africa </a></li>
            <li><a href="">North Africa</a></li>
          </ul>

        </li>
        <li><a href="">North America</a>
          <ul class="wazo17subsubmenu">
            <li><a href="">USA</a></li>
            <li><a href="">Canada</a></li>
          </ul>
        </li>
        <li><a href="">Europe</a>
        </li>
        <li><a href="">Asia</a>
        </li>
        <li><a href="">South America</a>
        </li>
        <li><a href="">Australia</a>

        </li>
        <li><a href="">Europe</a></li>
      </ul>

    </li>
    <li><a href="{{ route('contact') }}">Business</a></li>
    <li><a href="{{ route('contact') }}">Entertainment</a></li>
    <li><a href="{{ route('contact') }}">Sports</a></li>
    <li><a href="{{ route('contact') }}">Travel</a></li>
    <li><a href="{{ route('contact') }}">Health</a></li>
    <li><a href="{{ route('contact') }}">Science</a></li>
    <li><a href="{{ route('contact') }}">Education</a></li>
    <li><a href="{{ route('contact') }}">Agriculture</a></li>

    @if(!Auth::check())
    <li style="float: right; width: 90px;"><a href="">Account</a>
          <ul class="wazo17submenu" style="width:90px;">

            <li><a href="{{ route('registration form') }}" style="width:90px;">Sign up</a></li>
            <li><a href="{{ route('login') }}" style="width:90px;">login</a></li>
          </ul>
    </li>
    @else
    <li style="float: right; width: 90px;"><a href="">{{Auth::user()->FirstName}}</a>
          <ul class="wazo17submenu" style="width:90px;">

            <li><a href="{{ url('writer', [Auth::user()->id]) }}" style="width:90px;">Profile</a></li>

            <li><a href="{{ route('logout') }}" style="width:90px;">Logout</a></li>
          </ul>
    </li>
    @endif

  </ul>

</div>
