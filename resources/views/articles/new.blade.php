@extends('layouts.nyumbaDeck')

@section('kichwa')

    Kenyan love: New Magazine Article

@endsection

@section('sebule')

<div class="divfold50">
<div class="divfold50read">
	<h2 style="text-align: center;">Add new Article</h2>

<form enctype="multipart/form-data" role="form" method="POST" action="{{ url('magazine/article/post') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

   <div style="padding: 10px; margin-bottom: 10px;">

            <div class="field">
                <label for="title">Title</label>

                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" style="width: 100%;">

                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>


            <div class="field">
                <label for="body">Body</label>

                <textarea id="bodyField" type="text" class="form-control" name="body" ></textarea>

                @if ($errors->has('body'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>

            <div class="field">

                <label>Feature image</label>
                <input type="file" name="article_img">

            </div>


            <div class="dX">
                <div class="dY-3" >

                    <div class="dX ">
                        <div class="dY-6" >

                            <label for="offence">Region: </label><br>

                            <select class="form-control" name="category" id="breeze2">

                                <option value="Africa">Africa</option>

                            </select>

                        </div>
                    </div>

                    <div class="dX ">
                        <div class="dY-6" >
                            <label for="offence">Country: </label><br>

                            <select class="form-control" name="subcategory" id="breeze2">

                                <option value="Kenya">Kenya</option>

                            </select>
                        </div>
                    </div>

                    <div class="dX ">
                        <div class="dY-6" >
                            <label for="url">Url</label>

                            <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}" style="width: 100%;">

                        </div>
                    </div>
                </div>

                <div class="dY-3" >

                    <div class="dX ">
                        <div class="dY-6" >
                            <label for="offence">Topic: </label><br>

                            <select class="form-control" name="category2" id="breeze2">

                                <option value="Sport">Sport</option>

                            </select>
                        </div>
                    </div>

                    <div class="dX ">
                        <div class="dY-6" >
                            <label for="offence">Sub topic: </label><br>

                            <select class="form-control" name="subcategory2" id="breeze2">

                                <option value="Fooball">Fooball</option>

                            </select>
                        </div>
                    </div>

                    <div class="dX ">
                        <div class="dY-6" >
                            <label for="tags">Tags</label>

                            <input id="tags" type="text" class="form-control" name="tags" value="{{ old('tags') }}"  style="width: 100%;">

                        </div>
                    </div>

                    <div class="dX ">
                        <div class="dY-6" style= "display: flex; ">
                            <button type="submit" class="btn btn-primary" style= "align-items: right;">
                                <i class="fa fa-btn fa-user"></i> Post
                            </button>
                        </div>
                    </div>

                </div>

            </div>



      </div>




</form>


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
    $.get('/ajax-softwares?subcat_id=' + subcat_id, function(data) {
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
