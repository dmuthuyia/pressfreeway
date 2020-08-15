<?php

namespace pressfreeway\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Mail;
use pressfreeway\Article;
use pressfreeway\Token;
use pressfreeway\View;

class DdsController extends Controller
{
    public function getHome()
    {

        //$categories = Genrey::all(['id', 'title']);
        //$categories = Genrey::all();
        //$interested = User::all()->get()->random(4);
        // $interested = User::all()->random(4);

        //$tokens = Token::all();
        $tokens = Token::orderBy('created_at', 'desc')->paginate(12);
        return view('tokens.index', ['tokens' => $tokens]);
        return view('tokens.index');

    }

    public function getMonday()
    {

        //$categories = Genrey::all(['id', 'title']);
        //$categories = Genrey::all();
        //$interested = User::all()->get()->random(4);
        // $interested = User::all()->random(4);

        //$tokens = Token::all();
        $latestArticles = Article::orderBy('created_at', 'desc')->take(2)->get();
        $mostReads = View::groupBy('article_id')->distinct('article_id')->take(2)->get();

        //$mostReads = View::select(DB::Raw('article_id, COUNT(*) as count'))->groupBy('article_id');
        //->distinct('pid')->count('pid');
        $politics1 = Article::where('category2_id', '=', 10)->orderBy('created_at', 'desc')->first();
        $health1 = Article::where('category2_id', '=', 6)->orderBy('created_at', 'desc')->first();
        $sport1 = Article::where('category2_id', '=', 4)->orderBy('created_at', 'desc')->first();
        $business1 = Article::where('category2_id', '=', 2)->orderBy('created_at', 'desc')->first();

        $world1 = Article::where('category2_id', '=', 1)->orderBy('created_at', 'desc')->first();
        $entertainment1 = Article::where('category2_id', '=', 3)->orderBy('created_at', 'desc')->first();
        $travel1 = Article::where('category2_id', '=', 5)->orderBy('created_at', 'desc')->first();
        $science1 = Article::where('category2_id', '=', 7)->orderBy('created_at', 'desc')->first();
        $education1 = Article::where('category2_id', '=', 8)->orderBy('created_at', 'desc')->first();
        $agriculture1 = Article::where('category2_id', '=', 9)->orderBy('created_at', 'desc')->first();
        $people1 = Article::where('category2_id', '=', 11)->orderBy('created_at', 'desc')->first();
        $weather1 = Article::where('category2_id', '=', 12)->orderBy('created_at', 'desc')->first();

        return view('articles.monday', ['latestArticles' => $latestArticles, 'mostReads' => $mostReads, 'politics1' => $politics1, 'health1' => $health1, 'sport1' => $sport1, 'business1' => $business1, 'business1' => $business1, 'world1' => $world1, 'entertainment1' => $entertainment1, 'travel1' => $travel1, 'science1' => $science1, 'education1' => $education1, 'agriculture1' => $agriculture1, 'people1' => $people1, 'weather1' => $weather1]);

    }

    public function getTuesday()
    {

        //$categories = Genrey::all(['id', 'title']);
        //$categories = Genrey::all();
        //$interested = User::all()->get()->random(4);
        // $interested = User::all()->random(4);

        //$tokens = Token::all();
        $latestArticles = Article::orderBy('created_at', 'desc')->take(5)->get();
        $mostReads = View::groupBy('article_id')->distinct('article_id')->take(5)->get();

        //$mostReads = View::select(DB::Raw('article_id, COUNT(*) as count'))->groupBy('article_id');
        //->distinct('pid')->count('pid');
        $politics1 = Article::where('category2_id', '=', 10)->orderBy('created_at', 'desc')->first();
        $politics1b = is_null($politics1) ? 0 : $politics1->id;
        $politics1Count = View::where('article_id', '=', $politics1b)->count();

        $health1 = Article::where('category2_id', '=', 6)->orderBy('created_at', 'desc')->first();
        $health1b = is_null($health1) ? 0 : $health1->id;
        $health1Count = View::where('article_id', '=', $health1b)->count();

        $sport1 = Article::where('category2_id', '=', 4)->orderBy('created_at', 'desc')->first();
        $sport1b = is_null($sport1) ? 0 : $sport1->id;
        $sport1Count = View::where('article_id', '=', $sport1b)->count();

        $business1 = Article::where('category2_id', '=', 2)->orderBy('created_at', 'desc')->first();
        $business1b = is_null($business1) ? 0 : $business1->id;
        $business1Count = View::where('article_id', '=', $business1b)->count();

        $world1 = Article::where('category2_id', '=', 1)->orderBy('created_at', 'desc')->first();
        $world1b = is_null($world1) ? 0 : $world1->id;
        $world1Count = View::where('article_id', '=', $world1b)->count();

        $entertainment1 = Article::where('category2_id', '=', 3)->orderBy('created_at', 'desc')->first();
        $entertainment1b = is_null($entertainment1) ? 0 : $entertainment1->id;
        $entertainment1Count = View::where('article_id', '=', $entertainment1b)->count();

        $travel1 = Article::where('category2_id', '=', 5)->orderBy('created_at', 'desc')->first();
        $travel1b = is_null($travel1) ? 0 : $travel1->id;
        $travel1Count = View::where('article_id', '=', $travel1b)->count();

        $science1 = Article::where('category2_id', '=', 7)->orderBy('created_at', 'desc')->first();
        $science1b = is_null($science1) ? 0 : $science1->id;
        $science1Count = View::where('article_id', '=', $science1b)->count();

        $education1 = Article::where('category2_id', '=', 8)->orderBy('created_at', 'desc')->first();
        $education1b = $education1 ? $education1->id : 0;
        $education1Count = View::where('article_id', '=', $education1b)->count();

        $agriculture1 = Article::where('category2_id', '=', 9)->orderBy('created_at', 'desc')->first();
        $agriculture1b = is_null($agriculture1) ? 0 : $agriculture1->id;
        $agriculture1Count = View::where('article_id', '=', $agriculture1b)->count();

        $people1 = Article::where('category2_id', '=', 11)->orderBy('created_at', 'desc')->first();
        $people1b = is_null($people1) ? 0 : $people1->id;
        $people1Count = View::where('article_id', '=', $people1b)->count();

        $weather1 = Article::where('category2_id', '=', 12)->orderBy('created_at', 'desc')->first();
        $weather1b = is_null($weather1) ? 0 : $weather1->id;
        $weather1Count = View::where('article_id', '=', $weather1b)->count();

        $viewscount = array(
            "politics1Count" => $politics1Count,
            "health1Count" => $health1Count,
            "sport1Count" => $sport1Count,
            "business1Count" => $business1Count,
            "world1Count" => $world1Count,
            "entertainment1Count" => $entertainment1Count,
            "travel1Count" => $travel1Count,
            "science1Count" => $science1Count,
            "education1Count" => $education1Count,
            "agriculture1Count" => $agriculture1Count,
            "people1Count" => $people1Count,
            "weather1Count" => $weather1Count,
        );

        return view('articles.tuesday', ['latestArticles' => $latestArticles, 'mostReads' => $mostReads, 'politics1' => $politics1, 'health1' => $health1, 'sport1' => $sport1, 'business1' => $business1, 'business1' => $business1, 'world1' => $world1, 'entertainment1' => $entertainment1, 'travel1' => $travel1, 'science1' => $science1, 'education1' => $education1, 'agriculture1' => $agriculture1, 'people1' => $people1, 'weather1' => $weather1, 'politics1Count' => $politics1Count, 'viewscount' => $viewscount]);

    }

    public function getCategory1($name)
    {
        //dd($name);
        $latestArticles = Article::orderBy('created_at', 'desc')->take(5)->get();
        $regionName = $name;
        if ($regionName == "kenya") {
            $pageHeader = "Kenya";
            $articles = Article::where('subcategory1_id', '=', 1)->orderBy('created_at', 'desc')->take(100)->paginate(5);
            $mainArticles = Article::where('subcategory1_id', '=', 1)->take(4)->orderBy('created_at', 'desc')->get();
            return view('dds.category1', ['articles' => $articles, 'mainArticles' => $mainArticles, 'latestArticles' => $latestArticles, 'pageHeader' => $pageHeader]);
        } else {
            $pageHeader = "world";
            $articles = Article::where('subcategory1_id', '!=', 1)->orderBy('created_at', 'desc')->take(100)->paginate(5);
            $mainArticles = Article::where('subcategory1_id', '!=', 1)->take(4)->orderBy('created_at', 'desc')->get();
            return view('dds.category1', ['articles' => $articles, 'mainArticles' => $mainArticles, 'latestArticles' => $latestArticles, 'pageHeader' => $pageHeader]);
        }
    }

    public function getCategory2($name)
    {
        //dd($name);
        $latestArticles = Article::orderBy('created_at', 'desc')->take(5)->get();
        $regionName = $name;
        if ($regionName == "economy") {
            $pageHeader = "Economy";
            $articles = Article::where('category2_id', '=', 2)->orderBy('created_at', 'desc')->take(100)->paginate(5);
            $mainArticles = Article::where('category2_id', '=', 2)->take(4)->orderBy('created_at', 'desc')->get();
            return view('dds.category2', ['articles' => $articles, 'mainArticles' => $mainArticles, 'latestArticles' => $latestArticles, 'pageHeader' => $pageHeader]);
        } elseif ($regionName == "politics") {
            $pageHeader = "Politics";
            $articles = Article::where('category2_id', '=', 10)->orderBy('created_at', 'desc')->take(100)->paginate(5);
            $mainArticles = Article::where('category2_id', '=', 10)->take(4)->orderBy('created_at', 'desc')->get();
            return view('dds.category2', ['articles' => $articles, 'mainArticles' => $mainArticles, 'latestArticles' => $latestArticles, 'pageHeader' => $pageHeader]);
        } elseif ($regionName == "covid-19") {
            $pageHeader = "COVID-19";
            $articles = Article::where('category2_id', '=', 13)->orderBy('created_at', 'desc')->take(100)->paginate(5);
            $mainArticles = Article::where('category2_id', '=', 13)->take(4)->orderBy('created_at', 'desc')->get();
            return view('dds.category2', ['articles' => $articles, 'mainArticles' => $mainArticles, 'latestArticles' => $latestArticles, 'pageHeader' => $pageHeader]);
        } elseif ($regionName == "sports") {
            $pageHeader = "Sports";
            $articles = Article::where('category2_id', '=', 4)->orderBy('created_at', 'desc')->take(100)->paginate(5);
            $mainArticles = Article::where('category2_id', '=', 4)->take(4)->orderBy('created_at', 'desc')->get();
            return view('dds.category2', ['articles' => $articles, 'mainArticles' => $mainArticles, 'latestArticles' => $latestArticles, 'pageHeader' => $pageHeader]);
        } elseif ($regionName == "entertainment") {
            $pageHeader = "Entertainment";
            $articles = Article::where('category2_id', '=', 3)->orderBy('created_at', 'desc')->take(100)->paginate(5);
            $mainArticles = Article::where('category2_id', '=', 3)->take(4)->orderBy('created_at', 'desc')->get();
            return view('dds.category2', ['articles' => $articles, 'mainArticles' => $mainArticles, 'latestArticles' => $latestArticles, 'pageHeader' => $pageHeader]);
        }
    }

    public function getAboutus()
    {

        return view('dds.aboutUs');

    }

    public function getContact()
    {

        return view('dds.contact');

    }

    public function postContact(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required|min:2',
            'subject' => 'required|min:4',
            'message' => 'required|min:10']);

        $thisdata = array(
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'themessage' => $request->message,

        );

        Mail::send('mails.contact', $thisdata, function ($message) use ($thisdata) {
            $message->from($thisdata['email']);
            $message->to('dennis.m@infohtechict.com');
            $message->subject($thisdata['subject']);

        });

        return redirect()->route('home');

    }

//******************************************************************

//******************************************************************
    //products

//******************************************************************
    //products stamps and seals

    public function getFeatured()
    {

        $featured = Token::where('featured', '=', 1)->paginate(6);

        return view('products.featured')->with(['featured' => $featured]);

    }

    public function getBestselling()
    {

        $bestselling = Token::where('best_selling', '=', 1)->paginate(6);

        return view('products.bestselling')->with(['bestselling' => $bestselling]);

    }

    public function getNewarrivals()
    {

        $newarrivals = Token::where('new_arrivals', '=', 1)->paginate(6);

        return view('products.newarrivals')->with(['newarrivals' => $featured]);

    }

}
