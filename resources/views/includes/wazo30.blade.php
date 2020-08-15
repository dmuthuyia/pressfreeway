<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    li {
        float: left;

    }

    li a,
    .wazo33btn {
        text-decoration: none;
        display: inline-block;
        color: black;
        text-align: center;
        padding: 12px 14px;
        text-decoration: none;
    }

    li a:hover,
    .wazo33:hover .wazo33btn {
        color: purple;
        text-decoration: none;
    }

    li.wazo33 {
        display: inline-block;
    }

    .wazo33sub {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .wazo33sub a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .wazo33sub a:hover {
        background-color: #f1f1f1;
    }

    .wazo33:hover .wazo33sub {
        display: block;
    }

</style>
<div class="" style="" id="wazo30a">
    <ul>
        <li>
            <a style="width: 100%;" href="{{ route('home') }}" id=""><img class="" style="width: 16px;" src="../assets/images/app/home.png" alt="LinkedIn" /></a>
        </li>
        <li>
            <a style="width: 100%;" href="" id=""><img class="" style="width: 16px;" src="../assets/images/app/search-512.webp" alt="LinkedIn" /></a>
        </li>
        <li><a href="{{ url('region', ['world']) }}">World</a></li>
        <li><a href="{{ url('region', ['kenya']) }}">Local</a></li>
        <li><a href="{{ url('category', ['economy']) }}">Economy</a></li>
        <li><a href="{{ url('category', ['politics']) }}">Politics</a></li>
        <li><a href="{{ url('category', ['covid-19']) }}">COVID-19</a></li>
        <li><a href="{{ url('category', ['sports']) }}">Sports</a></li>
        <li>
            <a href="{{ url('category', ['entertainment']) }}">Entertainment</a>
        </li>
        @if(!Auth::check())
        <li class="wazo33">
            <a href="javascript:void(0)" class="wazo33btn" style="border: solid 1px gray;">Account</a>
            <div class="wazo33sub">
                <a href="{{ route('registration form') }}" style="">Sign up</a>
                <a href="{{ route('login') }}" style="">login</a>
            </div>
        </li>
        @else
        <li class="wazo33">
            <a href="javascript:void(0)" class="wazo33btn" style="border: solid 1px gray;">{{Auth::user()->FirstName}}</a>
            <div class="wazo33sub">
                <a href="{{ route('article.new') }}" style="">Write</a>
                <a href="{{ url('writer', [Auth::user()->id]) }}" style="">Profile</a>
                <a href="{{ route('logout') }}" style="">Logout</a>
            </div>
        </li>
        @endif

    </ul>


</div>


<!-- Sticky Menu ............................................................... -->

<div class="" style="" id="wazo30b">
    <ul>
        <li><a style="width: 100%;" href="{{ route('home') }}" id=""><span class="logoText1">Pressfreeway</span></a></li>
        <li>
            <a style="width: 100%;" href="{{ route('home') }}" id=""><img class="" style="width: 16px;" src="../assets/images/app/home.png" alt="LinkedIn" /></a>
        </li>
        <li>
            <a style="width: 100%;" href="" id=""><img class="" style="width: 16px;" src="../assets/images/app/search-512.webp" alt="LinkedIn" /></a>
        </li>
        <li><a href="{{ url('region', ['world']) }}">World</a></li>
        <li><a href="{{ url('region', ['kenya']) }}">Local</a></li>
        <li><a href="{{ url('category', ['economy']) }}">Economy</a></li>
        <li><a href="{{ url('category', ['politics']) }}">Politics</a></li>
        <li><a href="{{ url('category', ['covid-19']) }}">COVID-19</a></li>
        <li><a href="{{ url('category', ['sports']) }}">Sports</a></li>
        <li>
            <a href="{{ url('category', ['entertainment']) }}">Entertainment</a>
        </li>
        @if(!Auth::check())
        <li class="wazo33">
            <a href="javascript:void(0)" class="wazo33btn" style="border: solid 1px gray;">Account</a>
            <div class="wazo33sub">
                <a href="{{ route('registration form') }}" style="">Sign up</a>
                <a href="{{ route('login') }}" style="">login</a>
            </div>
        </li>
        @else
        <li class="wazo33">
            <a href="javascript:void(0)" class="wazo33btn" style="border: solid 1px gray;">{{Auth::user()->FirstName}}</a>
            <div class="wazo33sub">
                <a href="{{ route('article.new') }}" style="">Write</a>
                <a href="{{ url('writer', [Auth::user()->id]) }}" style="">Profile</a>
                <a href="{{ route('logout') }}" style="">Logout</a>
            </div>
        </li>
        @endif

    </ul>


</div>
