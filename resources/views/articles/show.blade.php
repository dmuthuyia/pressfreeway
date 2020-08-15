@extends('layouts.nyumbaDeck')

@section('kichwa')

{{$article->title}}

@endsection

@section('sebule')

<?php
include app_path() . '/includes/functions.php';
?>

<div class="dX dxy-border-4" style="padding-bottom:100px;">
    <div class="dY-4 mediatab2">

        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3 mediaHeader1">
                    <span style="font-size: 16px;"> {{$article->title}} </span>
                </div>
            </div>
        </div>

        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3" style="overflow:hidden;">
                    <img class="image-t-left" style="width: 40%;" src="<?php echo asset("uploads/articles/$article->article_img") ?>"></img>

                    <p>
                        {!!$article->article_body!!}


                    </p>
                    <div class="interactionTab-1">
                        By: <a href="{{ url('writer', [$article->user->id]) }}" id="">{{ $article->user->FirstName }} {{ $article->user->LastName }}</a>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="dY-2">
        @if(Auth::id() == $article->user->id)
        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3 mediaHeader1">
                    <span style="font-size: 16px;"> Author Actions </span>
                </div>
            </div>
        </div>
        <div class="dX">
            <div class="dX">
                <div class="dY-6">
                    <a id="statsarticle" title="startsarticle" href="#" class="btn btn-success btn-block" style="width:50%;"> <i class="fas fa-chart-line"></i> Article Stats </a>
                </div>
            </div>
            <div class="dY-6">
                <a id="editarticle" title="editarticle" href="#" class="btn btn-primary btn-block" style="width:50%;" data-toggle=" modal" data-article-id="{{$article->id}}" data-article-title="{{$article->title}}" data-article-body="{{$article->article_body}}" data-article_img="{{$article->article_img}}" data-category1_id="{{$article->category1_id}}" data-subcategory1_id="{{$article->subcategory1_id}}" data-category2_id="{{$article->category2_id}}" data-subcategory2_id="{{$article->subcategory2_id}}" data-tags="{{$article->tags}}"><i class="fas fa-edit"></i> Edit </a>
            </div>
        </div>
        <div class="dX">
            <div class="dY-6">
                <a onclick="return confirm('Are you sure?')" href="{{ url('article/delete', [$article->id]) }}" class="btn btn-danger btn-block" style="width:50%;"><i class="fas fa-trash"></i> Delete </a>
            </div>
        </div>
        @endif
        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3 mediaHeader1">
                    Latest Articles
                </div>
            </div>
        </div>
        <div class="dX">
            <div class="dY-6">
                <div class="mediatab3">
                    @foreach($latestArticles as $latestArticle)
                    <div class="dxy-border-4">
                        <div class="newsHeader1">
                            <a href="{{ url('article', [$latestArticle->url]) }}" id="">{{ $latestArticle->title }}</a>
                        </div>
                        <div class="interactionTab-1">
                            By: <a href="{{ url('writer', [$latestArticle->user->url]) }}" id="">{{ $latestArticle->user->FirstName }} {{ $latestArticle->user->LastName }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal" id="editModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span id="editTitle" class="editTitle" aria-hidden="true"> </span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" style="">
                <form enctype="multipart/form-data" id="post-message" role="form" method="POST" action="{{ route('article.update') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input id="article_id" type="hidden" name="article_id" value="">


                    @include('articles._form')
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="statsModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span id="editTitle" class="editTitle" aria-hidden="true"> {{$article->title}} </span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" style=" background-color:#E3E4FA;">
                <form enctype="multipart/form-data" id="post-message" role="form" method="POST" action="">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <Table class="" style="width:100%; border-radius:10px; background-color:silver; margin-bottom: 10px;">

                        <tr>
                            <td>Date: {{$article->created_at}}</td>
                            <td>Writer: {{$article->user->FirstName}} {{$article->user->LastName}}</td>
                        </tr>
                        <tr>
                            <td>Views: {{$viewsCount}}</td>
                            <td>Likes: </td>
                        </tr>

                    </Table>

                    <div style="width:100%; height:300px; overflow:auto; ">
                        <Table class="dxy-table-1">
                            <tr>
                                <th>Article id</th>
                                <th>Region</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>ip </th>
                                <th>User id</th>
                                <th>Session id</th>
                                <th>MAC_address</th>
                                <th>device</th>
                                <th>Operating system</th>
                                <th>Internet browser</th>
                                <th>ISP</th>
                                <th>Created</th>
                                <th>Last update</th>

                            </tr>
                            @foreach($views as $view)
                            <tr>
                                <td>{{$view->article_id}}</td>
                                <td>{{$view->region}}</td>
                                <td>{{$view->country}}</td>
                                <td>{{$view->city}}</td>
                                <td>{{$view->ip}}</td>
                                <td>{{$view->user_id}}</td>
                                <td>{{$view->session}}</td>
                                <td>{{$view->mac_address}}</td>
                                <td>{{$view->device}}</td>
                                <td>{{$view->operating_system}}</td>
                                <td>{{$view->internet_browser}}</td>
                                <td>{{$view->isp}}</td>
                                <td>{{$view->created_at}}</td>
                                <td>{{$view->updated_at}}</td>


                            </tr>
                            @endforeach
                        </Table>
                    </div>



                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Display edit ...........................................................................

    $(document).on('click', '#editarticle', function() {
        var article_id = $(this).data('article-id');
        var article_title = $(this).data('article-title');
        var article_body = $(this).data('article-body');

        var article_img = $(this).data('article_img');
        var category1_id = $(this).data('category1_id');
        var subcategory1_id = $(this).data('subcategory1_id');
        var category2_id = $(this).data('category2_id');
        var subcategory2_id = $(this).data('subcategory2_id');
        var tags = $(this).data('tags');

        //alert(article_id);
        //$('#artice-id').val(token_id);
        //$('#article-title').val(token_name);
        $('#article_id').val(article_id);
        $('#title').val(article_title);
        $('#bodyField').html(article_body);
        //$('#bodyField').text(article_body);
        //$('#bodyField').val("content");
        //document.getElementById('bodyField').value = article_title;
        //document.getElementById('category1').value = 5;
        $("#category1").val(category1_id).change();
        //$('#category1 option[value=4]').attr('selected', 'selected');

        $('#subcategory1_id').val(subcategory1_id).change();
        $('#category2_id').val(category2_id).change();
        $('#subcategory2_id').val(subcategory2_id).change();
        $('#tags').val(tags);



        $('#editTitle').html(article_title);
        //alert(category1_id);
        $('#editModal').modal('show');



    });

    // Display stats ...........................................................................

    $(document).on('click', '#statsarticle', function() {
        var token_id = $(this).data('article-id');
        var token_name = $(this).data('article-title');
        var token_thisUser = $(this).data('article-articlebody');
        var token_username = $(this).data('article-articlebodyname');
        //$('#artice-id').val(token_id);
        //$('#article-title').val(token_name);
        $('#token-token_id').val(token_id);
        $('#article-articlebody_id').val(token_thisUser);
        $('#article-title').val(token_username);


        $('#statsTitle').html(token_name);

        $('#statsModal').modal('show');

        var tok_id = token_id;

        //ajax

    });

</script>

@endsection
