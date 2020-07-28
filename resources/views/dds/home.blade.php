@extends('layouts.nyumbaDeck')

@section('kichwa')

    Kenyan love: Home

@endsection

@section('sebule')

    <div class="divfold50">
        <div class="row">
            <div class="divfold52a">
                @foreach ($interested as $myrandom)
                    <div class="col-md-3">
                        <div class="fireplace2singlesindex">
                            <a href="{{ url('singles/profile', [$myrandom->id]) }}"><img src="<?php echo asset("uploads/avatars/$myrandom->mypic") ?>"></img></a>
                            <hr>
                            <br />

                        </div>
                    </div>
                 @endforeach
            </div>
        </div>
    </div>




    <div class="divfold50">
        <div class="row">
            <div class="col-md-8 ">
                <h2> HOW IT WORKS</h2>

                <p> * Someone looking to find love here at Kenyan love is first required to sign up. After signing up you are allowed to browse thousands of other people who are seeking to find love at our singles directory.

                <HR>

                <p> * Once you come across profile of someone you are interested in, read through to see if there are any matches in your interests.

                <HR>

                <p> * While at your interest’s profile click the send can-I button to express interest to date your “interest”. A can-I message will be sent to your interest who in turn after opening the message will be taken to your profile.

                <HR>

                <p> * If your interest doesn’t chose to ignore but instead send you a can I message, Kenyan love will arrange a date for you to meet up.

                <HR>

                <p> * Both the sender and the recipient sender will pay a small fee at varying proportions.  The sender will pay for the first date while Kenyan love will pay for 30% of their bill on their following 3 dates.

                <HR>

                <p> * Kenyan love will regularly follow up to see how the 2 carries out after the fourth date and they will cover 30% of the 2’s wedding budget if they get to that point.

                <div class="fireplace2picpage1">

                    <img src="{{url('/assets/images/app/rose1ex.png')}}" alt="Kenyan love"/>
                </div>
            </div>


            <div class="col-md-4">

                <h2> Quick run on modules on this site:</h2>


                <h3> Browse single</h3>

                In this section one is allowed to go through a list of profiles from which he or she can pick their interest

                <h3> Our blog</h3>

                You will browse through our expert written articles on love matters. You will be advised on do and don’ts in a relationship

                <h3> Buy products </h3>

                We have partnered with a number of partners to ensure that you get/buy certified/approved materials that are ordained to make your life and those of your loved ones a happy. Buy tents, gifts, cards e.t.c

                <h3> Career section</h3>

                Those would want to work with us should visit us to see if there are any departmental advertised openings that are available.

                <h3> Contact section </h3>

                Use  the tools/details provided at this section to let us know how we can help you.
            </div>

        </div>


    </div>



@endsection