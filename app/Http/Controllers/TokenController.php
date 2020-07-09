<?php
namespace arodhaavms\Http\Controllers;

use arodhaavms\Song;
use arodhaavms\Token;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use View;

//use Illuminate\Support\Facades\Request;

class TokenController extends Controller
{

    //fetch add new View
    public function getNew()
    {
        return view('tokens.new');
    }

    // post New token
    public function postNew(Request $request)
    {

        if ($request->hasFile('token_img')) {
            $token_img = $request->file('token_img');
            $filename = time() . '.' . $token_img->getClientOriginalExtension();
            //Image::make($token_img)->resize(300, 300)->save( public_path('/uploads/token/' . $filename ) );
            $token_img->move(public_path() . '/uploads/token/', $filename);
        } else {

            $filename = 'missing.jpg';
        }

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',

        ]);

        $title = $request['title'];
        $description = $request['description'];
        $url = $request['url'];
        $tags = $request['tags'];

        $token = new Token();

        $token->title = $title;
        $token->description = $description;
        $token->url = $url;

        $token->artist_id = 1;
        $token->token_img = $filename;

        $token->save();

        return redirect()->route('tokens');

    }

    //Show list
    public function getIndex()
    {
        //$tokens = Token::all();
        $token = Token::orderBy('created_at', 'desc')->paginate(12);
        return view('tokens.index', ['tokens' => $token]);
    }

    //Show page
    public function getShow($id)
    {

        $token = Token::where('id', $id)->firstOrFail();
        $songs = Song::where('token_id', $token->id)->get();
        return view('tokens.show')->with(['token' => $token, 'songs' => $songs]);

    }

    // Edit token
    public function getEdit($id)
    {
        $token = Token::find($id);
        return view('tokens.edit', compact('tokens'));
    }

    // Store image
    public function getProfilePicture($filename)
    {
        $filename = Storage::disk('local')->get($filename);
        return new Response($file, 200);

    }

}
