<?php
namespace pressfreeway\Http\Controllers;

use pressfreeway\Category1;

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

class Category1Controller extends Controller
{


		public function getNew()
		{
			return view('category1.new');
		}


	public function postNew(Request $request)
		{



				if($request->hasFile('category1_img')){
		    		$category1_img = $request->file('category1_img');
		    		$filename = time() . '.' . $category1_img->getClientOriginalExtension();
		    		//Image::make($category1_img)->resize(300, 300)->save( public_path('/uploads/category1/' . $filename ) );
		    		$category1_img->move(public_path().'/uploads/category1/', $filename);
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


			$category1 = new Category1();
			

			$category1->title = $title;
			$category1->body = $body;
			$category1->url = $url;
			$category1->tags = $tags;
			//$category1->user_id = Auth::user()->id;
			$category1->category_id = 1;
			$category1->category1_img = $filename;

			$category1->save();

	
			return redirect()->route('magazine');


		}




	public function getIndex()
		{
			//$whistles = Whistle::all();
			$category1 = Category1::orderBy('created_at', 'desc')->paginate(12);
			return view('category1.index', ['category1' => $category1]);
		}

    public function getShow($id)
    {

    	//$user = User::where('id', $id)->firstOrFail();
        $category1 = Category1::where('id', $id)->firstOrFail();
        //$interested = Category1::where('id', '!=', $id)->get()->random(3);

        return view('category1.show')->with(['category1' => $category1]);

    }
    
     // Show the form for editing the specified resource.
     // @param  int  $id
     // @return \Illuminate\Http\Response
    
    public function getEdit($id)
    {
        $category1= Category1::find($id);
        return view('category1.edit',compact('category1'));
    }
    


		public function getProfilePicture($filename)
		{
			$filename = Storage::disk('local')->get($filename);
			return new Response($file, 200);
			
		}


}