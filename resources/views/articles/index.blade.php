@extends('layouts.nyumbaDeck')

@section('kichwa')

    Kenyan love: article

@endsection

@section('sebule')



	@foreach($articles as $article)
	<div class="dX dxy-border-3">
		<div class="dY-5">

				<div class="dX">

					<a href="#" id="" style="font-weight: bold">{{ $article->title }}</a>

				</div>


				<div class="dX mediatab2 ">

					<?php

//$article_body = nl2br(e(substr($article->article_body, 0, 400) . '......'));
$article_body = substr($article->article_body, 0, 400);
$formatted_article_body = htmlspecialchars_decode($article_body);
//{!! $my_db_ish['$formatted_article_body'] !!}
//$formatted_article_body = stripslashes($article_body);
echo ($formatted_article_body);
?>


				</div>
				<div class="dX">

					<a href="{{ url('article', [$article->id]) }}">Read</a>

				</div>

				<div class="dX interactionTab-1">

					By: <a href="#" id="">David Byler</a> | &#x1f44d; 110 | 10 &#x1f44e; | <span style="color: #b48a01;"> Views </span> 236

				</div>



		</div>

		<div class="dY-1">
			<div class="dX">

				<a href="{{ url('article', [$article->id]) }}"><img style="width: 100%;" class="image-t-left" src="<?php echo asset("uploads/articles/$article->article_img") ?>"></img></a>

			</div>
		</div>


	</div>
	@endforeach
	<div class="dX dxy-border-3">
		<div class="dY-5">

		</div>
		<div class="dY-1">
			<?php echo $articles->render(); ?>
		</div>
	</div>


@endsection



