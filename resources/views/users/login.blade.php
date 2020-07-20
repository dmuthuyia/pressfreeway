@extends('layouts.nyumbaDeck')

@section('kichwa')

    Carison: Buy rubber stamps, Acrylic stamps and company seals in Kenya

@endsection

@section('sebule')

<div class="dX">
    <div class="dY-2" >
            <div class="login4">
                        <form action="{{ route('signin') }}" method="post" accept-charset="UTF-8">

                            <div class="dX">
                                <div class="dY-3">
                                    E-mail
                                </div>
                                <div class="dY-3">
                                    <input class="form-control" type="text" name="email" id="email">
                                </div>

                            </div>


                            <div class="dX">
                                <div class="dY-3">
                                    Password
                                </div>
                                <div class="dY-3">
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>

                            </div>

                            <div class="dX">
                                <div class="dY-3">
                                    <span> Keep me signed in</span><br>
                                </div>
                                <div class="dY-3">

                                    <input type="checkbox" style="width:30px;" id="keep_signed" name="keep_signed" value="keep_signed">
                                </div>

                            </div>


                            <div class="dX">
                                <div class="dY-3">

                                </div>
                                <div class="dY-3">
                                    <a href="#"> Forgot my password</a>
                                </div>

                            </div>

                            <div class="dX">
                                <div class="dY-3">

                                </div>
                                <div class="dY-3">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <button type="submit" class="btn btn-info" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In">
                                            <i class="fa fa-btn fa-user"></i> Login
                                    </button>
                                </div>

                            </div>



                        </form>
            </div>
    </div>


    </div>

</div>








    <script type="text/javascript">

    $('#hide').click(function()
    {
        $('#content').hide('blind');
        $('#hide').hide();
        $('#show').show();

    });


    $('#show').click(function()
    {
        $('#content').show('blind');
        $('#show').hide();
        $('#hide').show();

    });
    </script>

@endsection
