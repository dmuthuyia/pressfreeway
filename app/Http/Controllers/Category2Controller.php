<?php
namespace arodhaavms\Http\Controllers;

use arodhaavms\Category2;

use Image;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use Illuminate\Mail\Mailer;

use Mail;

//use Illuminate\Support\Facades\Request;

class Category2Controller extends Controller
{


		public function getNew()
		{
			return view('category2.new');
		}


	public function postNew(Request $request)
		{



				if($request->hasFile('category2_img')){
		    		$category2_img = $request->file('category2_img');
		    		$filename = time() . '.' . $category2_img->getClientOriginalExtension();
		    		//Image::make($category2_img)->resize(300, 300)->save( public_path('/uploads/category2/' . $filename ) );
		    		$category2_img->move(public_path().'/uploads/category2/', $filename);
		    	}

		    		else{

		    		$filename = 'missing.jpg';
		    	}


			$this->validate($request, [
            	'title' => 'required',
            	'body' => 'required',

			]);



			$title = $request['title'];
            $body = $request['body'];
            $url = $request['url'];
            $tags = $request['tags'];


			$category2 = new Category2();
			

			$category2->title = $title;
			$category2->body = $body;
			$category2->url = $url;
			$category2->tags = $tags;
			//$category2->user_id = Auth::user()->id;
			$category2->category_id = 1;
			$category2->category2_img = $filename;

			$category2->save();

	
			return redirect()->route('magazine');


		}




	public function getIndex()
		{
			//$whistles = Whistle::all();
			$category2 = Category2::orderBy('created_at', 'desc')->paginate(12);
			return view('category2.index', ['category2' => $category2]);
		}

    public function getShow($id)
    {

    	//$user = User::where('id', $id)->firstOrFail();
        $category2 = Category2::where('id', $id)->firstOrFail();
        //$interested = Category2::where('id', '!=', $id)->get()->random(3);

        return view('category2.show')->with(['category2' => $category2]);

    }
    
     // Show the form for editing the specified resource.
     // @param  int  $id
     // @return \Illuminate\Http\Response
    
    public function getEdit($id)
    {
        $category2= Category2::find($id);
        return view('category2.edit',compact('category2'));
    }
    


		public function getProfilePicture($filename)
		{
			$filename = Storage::disk('local')->get($filename);
			return new Response($file, 200);
			
		}


}