<?php
namespace arodhaavms\Http\Controllers;

use arodhaavms\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use View;

//use Illuminate\Support\Facades\Request;

class MessageController extends Controller
{

    //fetch add new View
    public function getNew()
    {
        return view('messages.new');
    }

    // post New message
    public function postNew(Request $request)
    {

        $this->validate($request, [
            'token_id' => 'required',
            'user_id' => 'required',

        ]);

        $token_id = $request['token_id'];
        $user_id = $request['user_id'];
        $name = $request['name'];
        $remarks = $request['remarks'];

        $message = new Message();

        $message->token_id = $token_id;
        $message->user_id = $user_id;
        $message->name = $name;
        $message->remarks = $remarks;
        //$message->created_at = date('Y-m-d H:i:s');
        $datar = date('Y-m-d H:i:s');
        $dateCretd = Carbon::createFromFormat('Y-m-d H:i:s', $datar, 'Africa/Nairobi');
        $dateCretd->setTimezone('GMT');
        //$message->created_at = date('Y-m-d H:i:s', new DateTimeZone('pacific/Nauru'));
        $message->created_at = $dateCretd;
        //$message->created_at = date('Y-m-d H:i:s');
        $message->created_at = Carbon::now();

        $message->save();

        //return redirect('/ajax-messages?token_id=' . $token_id);

        //pass back a variable when redirecting

        //$tokens = Token::orderBy('created_at', 'desc')->paginate(12);
        //return view('tokens.index', ['tokens' => $tokens, 'current_token_id' => $token_id, 'error_code' => 5]);
        // return view('tokens.index');

        //return View::make('result')->with(['info' => $info, 'error_code', 5]);
        return redirect()->route('home');

    }

    // post New message ajax
    public function postNewAjax(Request $request)
    {

        $this->validate($request, [
            'token_id' => 'required',
            'user_id' => 'required',

        ]);

        $token_id = $request['token_id'];
        $user_id = $request['user_id'];
        $name = $request['name'];
        $remarks = $request['remarks'];

        $message = new Message;

        $message->token_id = $token_id;
        $message->user_id = $user_id;
        $message->name = $name;
        $message->remarks = $remarks;
        //$message->created_at = date('Y-m-d H:i:s');
        $datar = date('Y-m-d H:i:s');
        $dateCretd = Carbon::createFromFormat('Y-m-d H:i:s', $datar, 'Africa/Nairobi');
        $dateCretd->setTimezone('GMT');
        //$message->created_at = date('Y-m-d H:i:s', new DateTimeZone('pacific/Nauru'));
        $message->created_at = $dateCretd;
        //$message->created_at = date('Y-m-d H:i:s');
        $message->created_at = Carbon::now();

        $message->save();

        if ($message) {
            return response()->json([
                'status' => 'success',
                'token_id' => $token_id,
                'user_id' => $user_id]);
        } else {
            return response()->json([
                'status' => 'error']);
        }

    }

    //Show list
    public function getIndex()
    {
        //$messages = Message::all();
        $message = Message::orderBy('created_at', 'desc')->paginate(12);
        return view('messages.index', ['messages' => $message]);
    }

    //Show page
    public function getShow($id)
    {

        $message = Message::where('id', $id)->firstOrFail();
        $songs = Song::where('message_id', $message->id)->get();
        return view('messages.show')->with(['message' => $message, 'songs' => $songs]);

    }

    // Edit message
    public function getEdit($id)
    {
        $message = Message::find($id);
        return view('messages.edit', compact('messages'));
    }

    // Store image
    public function getProfilePicture($filename)
    {
        $filename = Storage::disk('local')->get($filename);
        return new Response($file, 200);

    }

}
