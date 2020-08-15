<style type="text/css">



</style>




<div class="wazo30" style="" id="wazo30a">

    <ul class="wazo30menu" style="">
        <li><a style="width: 100%;" href="{{ route('home') }}" id=""><img class="" style="width:16px;" src="../assets/images/app/home.png" alt="LinkedIn" /></a></li>
        <li><a style="width: 100%;" href="" id=""><img class="" style="width:16px;" src="../assets/images/app/search-512.webp" alt="LinkedIn" /></a></li>
        <li><a href="{{ url('region', ['world']) }}">World</a></li>
        <li><a href="{{ url('region', ['kenya']) }}">Local</a></li>
        <li><a href="{{ url('category', ['economy']) }}">Economy</a></li>
        <li><a href="{{ url('category', ['politics']) }}">Politics</a></li>
        <li><a href="{{ url('category', ['covid-19']) }}">COVID-19</a></li>
        <li><a href="{{ url('category', ['sports']) }}">Sports</a></li>
        <li><a href="{{ url('category', ['entertainment']) }}">Entertainment</a></li>


        @if(!Auth::check())
        <li style="border: solid 1px gray; "><a href="">Account</a>
            <ul class="wazo30submenu" style="">

                <li><a href="{{ route('registration form') }}" style="">Sign up</a></li>
                <li><a href="{{ route('login') }}" style="">login</a></li>
            </ul>
        </li>
        @else
        <li style="border: solid 1px gray;"><a href="">{{Auth::user()->FirstName}}</a>
            <ul class="wazo30submenu" style="">
                <li><a href="{{ route('article.new') }}" style="">Write</a></li>
                <li><a href="{{ url('writer', [Auth::user()->id]) }}" style="">Profile</a></li>

                <li><a href="{{ route('logout') }}" style="">Logout</a></li>
            </ul>
        </li>
        @endif

    </ul>

</div>



<div class="wazo30" style="" id="wazo30b">

    <ul class="wazo30menu" style="">
        <li><a style="width: 100%;" href="{{ route('home') }}" id=""><span class="logoText1">Pressfreeway</span></a></li>
        <li><a style="width: 100%;" href="" id="{{ route('home') }}"><img class="" style="width:16px;" src="../assets/images/app/home.png" alt="home" /></a></li>
        <li><a style="width: 100%;" href="" id="#"><img class="" style="width:16px;" src="../assets/images/app/search-512.webp" alt="search" /></a></li>
        <li><a href="{{ url('region', ['world']) }}">World</a></li>
        <li><a href="{{ url('region', ['kenya']) }}">Local</a></li>
        <li><a href="{{ url('category', ['economy']) }}">Economy</a></li>
        <li><a href="{{ url('category', ['politics']) }}">Politics</a></li>
        <li><a href="{{ url('category', ['covid-19']) }}">COVID-19</a></li>
        <li><a href="{{ url('category', ['sports']) }}">Sports</a></li>
        <li><a href="{{ url('category', ['entertainment']) }}">Entertainment</a></li>


        @if(!Auth::check())
        <li style="border: solid 1px gray;font-size: 12px;"><a href="">Account</a>
            <ul class="wazo30submenu" style="width:120px; ">

                <li><a href="{{ route('registration form') }}" style="width:120px;">Sign up</a></li>
                <li><a href="{{ route('login') }}" style="width:120px;">login</a></li>
            </ul>
        </li>
        @else
        <li style="border: solid 1px gray; margin-left: 8px; "><a href="">{{Auth::user()->FirstName}}</a>
            <ul class="wazo30submenu" style="width:120px; ">
                <li><a href="{{ route('article.new') }}" style="">Write</a></li>
                <li><a href="{{ url('writer', [Auth::user()->id]) }}" style="width:120px;">Profile</a></li>

                <li><a href="{{ route('logout') }}" style="width:120px;">Logout</a></li>
            </ul>
        </li>
        @endif

    </ul>

</div>
