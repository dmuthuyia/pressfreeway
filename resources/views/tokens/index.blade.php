@extends('layouts.nyumba')

@section('sebule')

<div class="dXY-container">

@if(!empty($error_code) && $error_code == 6)
   <script>
   $(function() {
      $('#chatModal').modal('show');
   });
   </script>
@endif

<div style="overflow-x: auto; width: 100%;">

            <table class="dxy-table-1">
                <thead>
                    <tr>
                    <td>ID</td>
                    <td>Token type</td>
                    <td>Full Name</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>Host</td>
                    <td>Department</td>
                    <td>Visitor From</td>
                    <td>Visit purpose</td>
                    <td>Visitor Image</td>
                    <td>Date</td>
                    <td>Time In</td>
                    <td>Time Out</td>
                    <td>Assisted</td>
                    <td>Action</td>
                    <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tokens as $token)
                    <tr>
                        <td>{{$token->id}}</td>
                        <td>{{$token->token_type}}</td>
                        <td>{{$token->full_name}}</td>
                        <td>{{$token->Phone}}</td>
                        <td>{{$token->email}}</td>
                        <td>{{$token->user_id}}</td>
                        <td>{{$token->department}}</td>
                        <td>{{$token->from}}</td>
                        <td>{{$token->visit_purpose}}</td>
                        <td></td>
                        <td>{{$token->created_at}}</td>
                        <td>{{$token->created_at}}</td>
                        <td>{{$token->created_at}}</td>
                        <td>
                            {{ Form::checkbox('best_selling', 1, $token->best_selling, ['class' => 'chkbox']) }}
                        </td>
                        <td class="dxy-center">
                            <div class="btn-group">
                                <a id="token-forward" title="Forward Token" href="" class="btn btn-danger" data-toggle="modal" data-token-id="{{$token->id}}" data-token-name="{{$token->full_name}}" data-token-user={{1}} data-token-idnumber="{{$token->identification_number}}" data-token-from="{{$token->from}}"  ><i class="fas fa-directions fa-2x"></i></a>
                                <a id="token-chat" title="message" href="" class="btn btn-primary" data-toggle="modal" data-token-id="{{$token->id}}" data-token-name="{{$token->full_name}}" data-token-user={{1}} data-token-username="dennis Murithi" ><i class="far fa-comment-dots fa-2x"></i></a>
                            </div>
                        </td>
                        <td></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

</div>

    <div style="padding: 10px;">
        <?php echo $tokens->render(); ?>
    </div>








    <div class="modal" id="chatModal" role="dialog">
       <div class="modal-dialog" role="document">
          <div class="modal-content">
             <div class="modal-header">
                <span  id="chatWith" class="chatWith" aria-hidden="true" > </span> <span class="onlineStatus"> - Messages</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body" style="">
             <form enctype="multipart/form-data" id="post-message" role="form" method="POST" action="{{ route('message.ajax_post') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input id="token-token_id" type="hidden" name="token_id" value="">
                <input id="token-user_id" type="hidden" name="user_id" value="">
                <input id="token-name" type="hidden" name="name" value="">
                <div class="dX">
                   <div class="dY-6">
                      <div class="chat">
                         <div class="dX">
                            <div class="dY-6">

                               <div id="chat-messages" class="chat-messages">
                                 <div id="chatbox1"></div>
                                 <div id="chatbox2"></div>
                               </div>
                            </div>
                         </div>
                         <div class="dX">
                            <div class="dY-5">
                               <textarea id="token-remarks" name="remarks" placeholder="Type your message"></textarea>
                            </div>
                            <div class="dY-1">

                                 <div class="btn-group">
                                    <a id="post-message-btn"  title="Save" href="" class="btn btn-danger">save</a>

                                 </div>

                            </div>
                         </div>
                         <div class="dX">
                            <div class="dY-6">
                               <div class="chat-status">Status:<span>idle</span></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             </form>
             <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
             </div>
          </div>
       </div>
    </div>






    <div class="modal" id="forwardModal" role="dialog">
       <div class="modal-dialog" role="document">
          <div class="modal-content">
             <div class="modal-header">
                <span  id="chatWith" class="chatWith" aria-hidden="true" > </span> <span class="onlineStatus"> Forward token to different Host</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body" style="">
                <div class="dX">
                   <div class="dY-6">
                      <div class="chat">
                         <div class="dX">
                            <div class="dY-3">
                               <div id="token-id" class="tab-12"></div>
                            </div>
                            <div class="dY-3">
                              <div id="owner-name" class="tab-12"></div>
                            </div>
                         </div>

                         <div class="dX">
                            <div class="dY-3">
                               <div id="owner-id" class="tab-12"></div>
                            </div>
                            <div class="dY-3">
                              <div id="owner-from" class="tab-12"></div>
                            </div>
                         </div>

                         <div class="dX">
                            <div class="dY-3">
                               <div>Forward To</div>
                            </div>
                            <div class="dY-3">
                              <select id="forwardTo" class="select-breeze">

                              </select>
                            </div>
                         </div>

                         <div class="dX">
                            <div class="dY-3">
                               <textarea placeholder="Remarks"></textarea>
                            </div>
                            <div class="dY-3">
                               <div class="field" style="padding: 10px; width: 400px">
                                  <button type="submit" style="width 70%; background-color: blue; color: #ffffff;">
                                  Forward
                                  </button>
                               </div>
                            </div>
                         </div>

                      </div>
                   </div>
                </div>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
             </div>
          </div>
       </div>
    </div>





</div>











<script type="text/javascript">

// jquery Ui title tooltip........................................................................

$( function() {
    $( document ).tooltip();
});



// chat modal data........................................................................

$(document).on('click', '#token-chat', function(){
  var token_id = $(this).data('token-id');
  var token_name = $(this).data('token-name');
  var token_thisUser = $(this).data('token-user');
  var token_username = $(this).data('token-username');
  //$('#token-id').val(token_id);
  //$('#token-name').val(token_name);
$('#token-token_id').val(token_id);
$('#token-user_id').val(token_thisUser);
$('#token-name').val(token_username);


  $('#chatWith').html(token_name);

  $('#chatModal').modal('show');

  var tok_id = token_id;

      //ajax
      $.get('/ajax-messages?token_id=' + tok_id, function(data) {
         //success data
         //console.log(data);
         $('#chat-messages').empty();
         listMessages(data,token_thisUser);
      });
});



//forward modal data ........................................................................

$(document).on('click', '#token-forward', function(){
  var token_id = $(this).data('token-id');
  var token_name = $(this).data('token-name');
  var token_idnumber = $(this).data('token-idnumber');
  var token_from = $(this).data('token-from');
  //$('#token-id').val(token_id);
  //$('#token-name').val(token_name);
   $('#token-id').html('Token ID: ' + token_id);
   $('#owner-name').html('Visitor Name: ' + token_name);
   $('#owner-id').html('ID Number: ' + token_idnumber);
   $('#owner-from').html('From: ' + token_from);

  $('#forwardModal').modal('show');
      //can define a specific category from staff. Now I will just pick all from the routes.
      var tok_id = token_id;

      //ajax
      $.get('/ajax-staff?token_id=' + tok_id, function(data) {
         //success data
         console.log(data);
         $('#forwardTo').empty();
         $.each(data, function(index, serviceObj) {
            $('#forwardTo').append('<option value="' + serviceObj.id + '">' + serviceObj.FirstName + ' ' + serviceObj.LastName +
                '</option>');
         });
      });


});


// post message trigger ........................................................................

$("#post-message-btn").click(function(event) {
    event.preventDefault();

    $.ajax({
        type: "post",
        url: "{{ url('/message/ajax-post') }}",
        dataType: "json",
        data: $('#post-message').serialize(),
        success: function(data){
              //alert("Data Save: " + data);
              var tok_id = $('#token-token_id').val();
              var token_thisUser = $('#token-user_id').val();

              //alert(tok_id);
               //ajax
               $.get('/ajax-messages?token_id=' + tok_id, function(data) {
                  //success data
                  //console.log(data);
                  $('#chat-messages').empty();
                  listMessages(data,token_thisUser);
               });
        },
        error: function(data){
             alert("Error")
        }
    });

});

// Scroll to  the bottom of chat........................................................................
function scrollToBottomMessage(){

   var scrollMessages    = $('#chat-messages');
   var height = scrollMessages[0].scrollHeight;
   scrollMessages.scrollTop(height);
}

// message list........................................................................
function listMessages(rData,userId){
    var data = rData;
    var token_thisUser = userId;

      $.each(data, function(index, serviceObj) {

         if(token_thisUser==serviceObj.user_id){
            $('#chat-messages').append('<div class="chatdetails1"  value="' + serviceObj.id + '">' + ' You at '+ serviceObj.created_at +
            '</div>');
            $('#chat-messages').append('<div class="chatbox1"  value="' + serviceObj.id + '">' + serviceObj.remarks +
            '</div>');
            $('#token-remarks').val('');
            //$("#chat-messages").animate({scrollTop: $('#chat-messages').prop('scrollHeight')}, 1000);
            //$("#chat-messages").animate({scrollTop: $('#chat-messages')[0].scrollHeight - $('#chat-messages')[0].clientHeight }, 250);
            scrollToBottomMessage();
         } else {
            $('#chat-messages').append('<div class="chatdetails2"  value="' + serviceObj.id + '">' + serviceObj.name + ' at ' + serviceObj.created_at +
            '</div>');
            $('#chat-messages').append('<div class="chatbox2"  value="' + serviceObj.id + '">' + serviceObj.remarks +
            '</div>');
            $('#token-remarks').val('');
         }
         // Another way Call this whenever you need a new chatbox added
         /*var $container = $("#chat-messages");

         if(token_thisUser==serviceObj.user_id){
            $container.append('<div class="chatdetails1 ' + $container.children().length + 1 + '">' + ' You at '+ serviceObj.created_at + '</div>');
            $container.append('<div class="chatbox1 ' + $container.children().length + 1 + '">' + serviceObj.remarks + '</div>');
         } else {
            $container.append('<div class="chatdetails2 ' + $container.children().length + 1 + '">' + serviceObj.name + ' at ' + serviceObj.created_at + '</div>');
            $container.append('<div class="chatbox2 ' + $container.children().length + 1 + '">' + serviceObj.remarks + '</div>');
         }*/
      });
}





// ........................................................................



$('#subcategory').on('change focus hover', function(e) {

    //var cat_id = e.target.value;

    //ajax
    $.get('/ajax-tokens?subcat_id=' + 1, function(data) {
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
    jQuery('.denzintro2').addClass("dhidden").viewportChecker({
        classToAdd: 'dvisible animated zoomInDown', // Class to add to the elements when they are visible
        offset: 100
    });
});
</script>


@stop