<?php
namespace pressfreeway\Http\Controllers;

use pressfreeway\Subsubcategory2;

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

class Subsubcategory2Controller extends Controller
{


		public function getNew()
		{
			return view('subcategory2.new');
		}


	public function postNew(Request $request)
		{



				if($request->hasFile('subcategory2_img')){
		    		$subcategory2_img = $request->file('subcategory2_img');
		    		$filename = time() . '.' . $subcategory2_img->getClientOriginalExtension();
		    		//Image::make($subcategory2_img)->resize(300, 300)->save( public_path('/uploads/subcategory2/' . $filename ) );
		    		$subcategory2_img->move(public_path().'/uploads/subcategory2/', $filename);
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


			$subcategory2 = new Subsubcategory2();
			

			$subcategory2->title = $title;
			$subcategory2->body = $body;
			$subcategory2->url = $url;
			$subcategory2->tags = $tags;
			//$subcategory2->user_id = Auth::user()->id;
			$subcategory2->category_id = 1;
			$subcategory2->subcategory2_img = $filename;

			$subcategory2->save();

	
			return redirect()->route('magazine');


		}




	public function getIndex()
		{
			//$whistles = Whistle::all();
			$subcategory2 = Subsubcategory2::orderBy('created_at', 'desc')->paginate(12);
			return view('subcategory2.index', ['subcategory2' => $subcategory2]);
		}

    public function getShow($id)
    {

    	//$user = User::where('id', $id)->firstOrFail();
        $subcategory2 = Subsubcategory2::where('id', $id)->firstOrFail();
        //$interested = Subsubcategory2::where('id', '!=', $id)->get()->random(3);

        return view('subcategory2.show')->with(['subcategory2' => $subcategory2]);

    }
    
     // Show the form for editing the specified resource.
     // @param  int  $id
     // @return \Illuminate\Http\Response
    
    public function getEdit($id)
    {
        $subcategory2= Subsubcategory2::find($id);
        return view('subcategory2.edit',compact('subcategory2'));
    }
    


		public function getProfilePicture($filename)
		{
			$filename = Storage::disk('local')->get($filename);
			return new Response($file, 200);
			
		}


}