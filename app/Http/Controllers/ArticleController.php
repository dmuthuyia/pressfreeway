<?php
namespace pressfreeway\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use pressfreeway\Article;
use pressfreeway\Category1;
use pressfreeway\Category2;
use View;

//use Illuminate\Support\Facades\Request;

class ArticleController extends Controller
{

    public function getNew()
    {
        //$category1 = Category1::orderBy('created_at', 'desc')->paginate(12);
        $category1 = Category1::orderBy('title', 'asc')->get();
        $category2 = Category2::orderBy('title', 'asc')->get();
        return view('articles.new', ['category1' => $category1, 'category2' => $category2]);

    }

    public function postNew(Request $request)
    {

        if ($request->hasFile('article_img')) {
            $article_img = $request->file('article_img');

            //$article_img = Input::file('article_img');
            $upload_name = pathinfo($article_img->getClientOriginalName(), PATHINFO_FILENAME);
            $namesbst = substr($upload_name, 0, 5);
            $filename = $namesbst . '-' . time() . '.' . $article_img->getClientOriginalExtension();
            //Image::make($article_img)->resize(300, 300)->save( public_path('/uploads/articles/' . $filename ) );
            //pathinfo(Input::file('upfile')->getClientOriginalName(), PATHINFO_FILENAME);
            //$filename = $article_img->getClientOriginalName();

            //$filename = $upload_name;
            $article_img->move(public_path() . '/uploads/articles/', $filename);
        } else {

            $filename = 'missing.jpg';
        }

        $this->validate($request, [
            'title' => 'required',
            'article_body' => 'required',

        ]);

        $title = $request['title'];
        $article_body = $request['article_body'];
        $article_img = $filename;
        $category1_id = $request['category1'];
        $subcategory1_id = $request['subcategory1'];
        $url = $request['url'];
        $category2_id = $request['category2'];
        $subcategory2_id = $request['subcategory2'];
        $tags = $request['tags'];

        $article = new Article();

        $article->title = $title;
        $article->article_body = $article_body;
        $article->article_img = $article_img;
        $article->category1_id = $category1_id;
        $article->subcategory1_id = $subcategory1_id;
        $article->url = $url;
        $article->category2_id = $category2_id;
        $article->subcategory2_id = $subcategory2_id;
        $article->tags = $tags;
        //$article->user_id = Auth::user()->id;
        $article->user_id = 1;

        $article->save();

        return redirect()->route('articles');

    }

    public function getIndex()
    {
        //$whistles = Whistle::all();
        $articles = Article::orderBy('created_at', 'desc')->paginate(10);
        return view('articles.index', ['articles' => $articles]);
    }

    public function getShow($id)
    {

        //$user = User::where('id', $id)->firstOrFail();
        $article = Article::where('id', $id)->firstOrFail();
        //$interested = Article::where('id', '!=', $id)->get()->random(3);

        return view('articles.show')->with(['article' => $article]);

    }

    // Show the form for editing the specified resource.
    // @param  int  $id
    // @return \Illuminate\Http\Response

    public function getEdit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function getProfilePicture($filename)
    {
        $filename = Storage::disk('local')->get($filename);
        return new Response($file, 200);

    }

}
