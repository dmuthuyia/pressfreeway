@extends('layouts.nyumba')

@section('kichwa')

New token

@endsection

@section('sebule')


<div class="divfold50">
    <div class="divfold50read">

        <div class="row">
            <div class="col-md-6">

                <h2 style="text-align: center;">Add new token</h2>

                <form enctype="multipart/form-data" role="form" method="POST" action="{{ url('token/new/post') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div style="padding: 10px; margin-bottom: 10px;">

                        <div class="field">
                            <label for="title">Title</label>

                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">

                            @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="field">
                            <label for="offence">Artist: </label><br>

                            <select class="form-control" name="category" id="category">
                                @foreach($artists as $artist)
                                <option value="{{$artist->id}}">{{$artist->name}}</option>
                                @endforeach
                            </select>

                        </div>



                        <div class="field">
                            <label for="description">Description</label>

                            <textarea id="description" type="text" class="form-control" name="description"
                                value="{{ old('description') }} 'size' => '400x500'"></textarea>

                            @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif
                        </div>



                        <div class="field">
                            <label for="minprice">price</label>

                            <input id="minprice" type="number" class="form-control" name="minprice"
                                value="{{ old('minprice') }}">

                            @if ($errors->has('minprice'))
                            <span class="help-block">
                                <strong>{{ $errors->first('minprice') }}</strong>
                            </span>
                            @endif
                        </div>



                        <div class="field">
                            <label for="token_img">token image</label>

                            <input type="file" name="token_img" value="{{ old('token_img') }}">

                        </div>


                        <hr>

                        <div class="field">
                            <label for="featured">Featured</label><br />
                            {{ Form::checkbox('featured', 1, false, ['class' => 'field']) }}

                        </div>

                        <div class="field">
                            <label for="best_selling">Best selling</label><br />

                            {{ Form::checkbox('best_selling', 1, false, ['class' => 'field']) }}
                        </div>

                        <div class="field">
                            <label for="new_arrival">New arrival</label><br />

                            {{ Form::checkbox('new_arrival', 1, false, ['class' => 'field']) }}
                        </div>

                    </div>


                    <div class="field" style="padding: 10px;">

                        <button type="submit" class="btn btn-primary pull-right">
                            <i class="fa fa-btn fa-user"></i> Save
                        </button>
                    </div>



                </form>
            </div>
            <div class="col-md-6">

            </div>
        </div>


    </div>

</div>


<script type="text/javascript">
$('#category').on('change focus hover', function(e) {
    console.log(e);

    var cat_id = e.target.value;

    //ajax
    $.get('/ajax-subcat?cat_id=' + cat_id, function(data) {
        //success data
        //console.log(data);
        $('#subcategory').empty();
        $.each(data, function(index, subcatObj) {
            $('#subcategory').append('<option value="' + subcatObj.id + '">' + subcatObj.name +
                '</option>');
        });
    });

});

 


$('#subcategory').on('change focus hover', function(e) {
    console.log(e);

    var subcat_id = e.target.value;

    //ajax
    $.get('/ajax-tokens?subcat_id=' + subcat_id, function(data) {
        //success data
        //console.log(data);
        $('#service').empty();
        $.each(data, function(index, serviceObj) {
            $('#service').append('<option value="' + serviceObj.id + '">' + serviceObj.title +
                '</option>');
        });
    });

});


jQuery(document).ready(function() {
    jQuery('.denzintro1').addClass("dhidden").viewportChecker({
        classToAdd: 'dvisible animated bounceInUp', // Class to add to the elements when they are visible
        offset: 100
    });
});
</script>

@endsection
