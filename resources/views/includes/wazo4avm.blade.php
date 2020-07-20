<!-- NAVBAR
    ================================================== -->

@if(!Auth::check())

<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
    <div class="container">

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('about us') }}">About Pressfreeway</a></li>



                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b
                            class="caret"></b></a>

                    <div class="dropdown-menu" style="padding: 5px;">
                        </a>


                        <form action="{{ route('signin') }}" method="post" accept-charset="UTF-8">

                            <div class="form-group">
                                <label for="email"> E-mail </label>
                                <input class="form-control" type="text" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <label for="Password"> Password </label>
                                <input id="password" type="password" class="form-control" name="password">
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-info"
                                style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit"
                                name="commit" value="Sign In">
                                <i class="fa fa-btn fa-user"></i> Login
                            </button>

                        </form>


                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

@else

<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
    <div class="container">

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('about us') }}">About Us</a></li>



                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account:
                        {{Auth::user()->FirstName}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('profile') }}">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}"><i class="icon-off"></i>Logout</a></li>
                    </ul>
                </li>



            </ul>





        </div>
    </div>
</nav>

@endif





<!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->
