        	<div class="ddy-menu-1">

        	    <ul>
        	        <li><a href="{{ url('region', ['world']) }}">World</a></li>
        	        <li><a href="{{ url('region', ['kenya']) }}">Local</a></li>
        	        <li><a href="{{ url('category', ['economy']) }}">Economy</a></li>
        	        <li><a href="{{ url('category', ['politics']) }}">Politics</a></li>
        	        <li><a href="{{ url('category', ['covid-19']) }}">COVID-19</a></li>
        	        <li><a href="{{ url('category', ['sports']) }}">Sports</a></li>
        	        <li><a href="{{ url('category', ['entertainment']) }}">Entertainment</a></li>


        	        @if(!Auth::check())
        	        <li style="color: red; background-color:white"><a href="#" style="color: Purple;">Account<i class="fas fa-hand-point-down"></i></a></li>


        	        <li><a href="{{ route('registration form') }}" style="">Sign up</a></li>
        	        <li><a href="{{ route('login') }}" style="">login</a></li>

        	        @else

        	        <li style="color: red; background-color:white; color: white;"><a href="#" style="color: Purple;">{{Auth::user()->FirstName}} <i class=" fas fa-hand-point-down"></i></a> </li>

        	        <li><a href="{{ route('article.new') }}" style="">Write</a></li>
        	        <li><a href="{{ url('writer', [Auth::user()->id]) }}" style="">Profile</a></li>

        	        <li><a href="{{ route('logout') }}" style="">Logout</a></li>


        	        @endif
        	    </ul>

        	</div>
