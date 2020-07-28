@extends('layouts.nyumbaDeck')

@section('kichwa')

    Kenyan love: Contact us

@endsection

@section('sebule')

    <div class="divfold50">

        <div class="divfold50read" style="padding: 12px;">

            <div class="row">

                <div class="col-md-8">

                 @if(!Auth::check())

                    <form  enctype="multipart/form-data" role="form" method="POST" action="{{ route('contact') }}">

                        <div class="form-group">
                            <label name="email">Your Email for us to get back to you:</label>
                            <input id="email" name="email" class="form-control">
                        </div>


                        <div class="form-group">
                            <label name="name">Your name:</label>
                            <input id="name" name="name" class="form-control">
                        </div>


                        <div class="form-group">
                            <label name="phone">Your Phone number for us to get back to you:</label>
                            <input id="phone" name="phone" class="form-control" placeholder="e.g +254 ... ......">
                        </div>

                        <div class="form-group">
                            <label name="subject">email subject:</label>
                            <input id="subject" name="subject" class="form-control">
                        </div>

                        <div class="form-group">
                            <label name="message">Your message:</label>
                            <textarea id="message" name="message" class="form-control" rows="5"></textarea>
                        </div>

                         <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="submit" value="Send" class="btn btn-success">
                    </form>

                 @else


                    <form  enctype="multipart/form-data" role="form" method="POST" action="{{ route('contact') }}">

                        <div class="form-group">
                            <label name="email">Your Email for us to get back to you:</label>
                            <input id="email" name="email" class="form-control" value="{{Auth::user()->email}}">
                        </div>


                        <div class="form-group">
                            <label name="phone">Your name:</label>
                            <input id="name" name="name" class="form-control" value="{{Auth::user()->FirstName}} {{Auth::user()->LastName}}" >
                        </div>


                        <div class="form-group">
                            <label name="email">Your Phone number for us to get back to you:</label>
                            <input id="phone" name="phone" class="form-control" placeholder="e.g +254 ... ......">
                        </div>

                        <div class="form-group">
                            <label name="subject">email subject:</label>
                            <input id="subject" name="subject" class="form-control">
                        </div>

                        <div class="form-group">
                            <label name="message">Your message:</label>
                            <textarea id="message" name="message" class="form-control" rows="5"></textarea>
                        </div>

                         <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="submit" value="Send" class="btn btn-success">
                    </form>


                 @endif

                </div>



                <div class="col-md-4">
                    <div class="fireplace2singlespro">
                        <h2>Emails:</h2>
                        info@kenyanlove.com
                        <h2>Phone:</h2>
                        +254 726 168409

                    </div>
                </div>



            </div>

        </div>

    </div>



@endsection
