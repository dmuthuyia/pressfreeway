@extends('layouts.nyumbaDeck')

@section('kichwa')

    Kenyan love: New Magazine Article

@endsection

@section('sebule')

<div class="divfold50">
<div class="divfold50read">
	<h2 style="text-align: center;">Add new Article</h2>

<form enctype="multipart/form-data" role="form" method="POST" action="{{ url('article/new/post') }}">

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

                <textarea id="bodyField" type="text" class="form-control" name="article_body" ></textarea>

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

                            <select class="select-breeze" name="category1" id="category1">

                                @foreach($category1 as $region)
                                <option value="{{$region->id}}">{{$region->title}}</option>
                                @endforeach

                            </select>

                        </div>
                    </div>

                    <div class="dX ">
                        <div class="dY-6" >
                            <label for="offence">Country: </label><br>

                            <select class="select-breeze" name="subcategory1" id="subcategory1">

                                <option value="1">Select</option>

                            </select>
                        </div>
                    </div>

                    <div class="dX ">
                        <div class="dY-6" >

                        </div>
                    </div>
                </div>

                <div class="dY-3" >

                    <div class="dX ">
                        <div class="dY-6" >
                            <label for="offence">Topic: </label><br>

                            <select class="select-breeze" name="category2" id="category2">

                                @foreach($category2 as $topic)
                                <option value="{{$topic->id}}">{{$topic->title}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="dX ">
                        <div class="dY-6" >
                            <label for="offence">Sub topic: </label><br>

                            <select class="select-breeze" name="subcategory2" id="subcategory2">

                                <option value="1">select</option>

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
$('#category1').on('change focus hover', function(e) {
    //console.log(e);
    //alert("hello");
    var cat_id = e.target.value;

    //ajax
    $.get('/ajax-subcat?cat_id=' + cat_id, function(data) {
        //success data
        //console.log(data);
        //alert(data);
        $('#subcategory1').empty();
        $.each(data, function(index, subcatObj) {
            $('#subcategory1').append('<option value="' + subcatObj.id + '">' + subcatObj.title +
                '</option>');
        });
    });

});




$('#category2').on('change focus hover', function(e) {
    //console.log(e);
    //alert("hello");
    var cat2_id = e.target.value;

    //ajax
    $.get('/ajax-subcat2?cat2_id=' + cat2_id, function(data) {
        //success data
        //console.log(data);

        //alert(data);
        $('#subcategory2').empty();
        $.each(data, function(index, subcatObj) {
            $('#subcategory2').append('<option value="' + subcatObj.id + '">' + subcatObj.title +
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
