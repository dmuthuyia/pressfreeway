@extends('layouts.nyumbaDeck')

@section('kichwa')

     Magazine

@endsection

@section('sebule')


<div class="dX dxy-border-4">
		<div class="dY-5 mediatab2">
			<div>
				<span style="font-weight: bold; font-size: 20px;"> {{$article->title}} </span>
			</div>
			<div>
				<img class="image-t-left" style="width: 40%;" src="<?php echo asset("uploads/articles/$article->article_img") ?>"></img>

<?php

$formatted_article_body = htmlspecialchars_decode($article->article_body);
//{!! $my_db_ish['$formatted_article_body'] !!}
//$formatted_article_body = stripslashes($article_body);
echo ($formatted_article_body);
?>
</div>
			</div>

		<div class="dY-1">

		</div>
</div>


@endsection

