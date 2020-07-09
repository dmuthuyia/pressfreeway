@if(!Auth::check())


<nav class="navbar navbar-expand-lg " role="navigation">
    <div class="container">

        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">

            <ul class="nav navbar-nav flex-row justify-content-between ml-auto" >
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2" style="width: 300px; background-color: #C1F0F6; border: 1px solid gray;">
                       <li class="px-3 py-2">
                       <form action="{{ route('signin') }}" method="post" arole="form" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <input id="emailInput" name="email" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" name="password" placeholder="Password" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                                <div class="form-group text-center">
                                    <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Forgot password</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Reset your password..</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


@else

<nav class="navbar navbar-expand-lg " role="navigation" >
       <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto"  style="text-styling:none;">

                <li class="dropdown"><a href="#" class="dropdown-toggle btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Account:
                        {{Auth::user()->FirstName}} <b class="caret"></b></a>
                    <ul class="dropdown-menu"  style="width: 300px; background-color: #C1F0F6; border: 1px solid gray;">
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
