<?php
namespace pressfreeway\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use pressfreeway\Article;
use pressfreeway\Category1;
use pressfreeway\Category2;
use pressfreeway\View;

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

    public function generateSlug($string)
    {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
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
        //$url = $request['url'];

        $url = $this->generateSlug($title);
        //$url = self::generateSlug($title);
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
        $article->user_id = Auth::user()->id;
        // $article->user_id = 1;

        $article->save();

        return redirect()->route('articles');

    }

    public function getIndex()
    {
        //$whistles = Whistle::all();
        $articles = Article::orderBy('created_at', 'desc')->paginate(10);
        return view('articles.index', ['articles' => $articles]);
    }

    public function getOperatingSystem()
    {

        if (!isset($user_agent) && isset($_SERVER['HTTP_USER_AGENT'])) {
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
        }

        // https://stackoverflow.com/questions/18070154/get-operating-system-info-with-php
        $os_array = [
            'windows nt 10' => 'Windows 10',
            'windows nt 6.3' => 'Windows 8.1',
            'windows nt 6.2' => 'Windows 8',
            'windows nt 6.1|windows nt 7.0' => 'Windows 7',
            'windows nt 6.0' => 'Windows Vista',
            'windows nt 5.2' => 'Windows Server 2003/XP x64',
            'windows nt 5.1' => 'Windows XP',
            'windows xp' => 'Windows XP',
            'windows nt 5.0|windows nt5.1|windows 2000' => 'Windows 2000',
            'windows me' => 'Windows ME',
            'windows nt 4.0|winnt4.0' => 'Windows NT',
            'windows ce' => 'Windows CE',
            'windows 98|win98' => 'Windows 98',
            'windows 95|win95' => 'Windows 95',
            'win16' => 'Windows 3.11',
            'mac os x 10.1[^0-9]' => 'Mac OS X Puma',
            'macintosh|mac os x' => 'Mac OS X',
            'mac_powerpc' => 'Mac OS 9',
            'linux' => 'Linux',
            'ubuntu' => 'Linux - Ubuntu',
            'iphone' => 'iPhone',
            'ipod' => 'iPod',
            'ipad' => 'iPad',
            'android' => 'Android',
            'blackberry' => 'BlackBerry',
            'webos' => 'Mobile',

            '(media center pc).([0-9]{1,2}\.[0-9]{1,2})' => 'Windows Media Center',
            '(win)([0-9]{1,2}\.[0-9x]{1,2})' => 'Windows',
            '(win)([0-9]{2})' => 'Windows',
            '(windows)([0-9x]{2})' => 'Windows',

            // Doesn't seem like these are necessary...not totally sure though..
            //'(winnt)([0-9]{1,2}\.[0-9]{1,2}){0,1}'=>'Windows NT',
            //'(windows nt)(([0-9]{1,2}\.[0-9]{1,2}){0,1})'=>'Windows NT', // fix by bg

            'Win 9x 4.90' => 'Windows ME',
            '(windows)([0-9]{1,2}\.[0-9]{1,2})' => 'Windows',
            'win32' => 'Windows',
            '(java)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,2})' => 'Java',
            '(Solaris)([0-9]{1,2}\.[0-9x]{1,2}){0,1}' => 'Solaris',
            'dos x86' => 'DOS',
            'Mac OS X' => 'Mac OS X',
            'Mac_PowerPC' => 'Macintosh PowerPC',
            '(mac|Macintosh)' => 'Mac OS',
            '(sunos)([0-9]{1,2}\.[0-9]{1,2}){0,1}' => 'SunOS',
            '(beos)([0-9]{1,2}\.[0-9]{1,2}){0,1}' => 'BeOS',
            '(risc os)([0-9]{1,2}\.[0-9]{1,2})' => 'RISC OS',
            'unix' => 'Unix',
            'os/2' => 'OS/2',
            'freebsd' => 'FreeBSD',
            'openbsd' => 'OpenBSD',
            'netbsd' => 'NetBSD',
            'irix' => 'IRIX',
            'plan9' => 'Plan9',
            'osf' => 'OSF',
            'aix' => 'AIX',
            'GNU Hurd' => 'GNU Hurd',
            '(fedora)' => 'Linux - Fedora',
            '(kubuntu)' => 'Linux - Kubuntu',
            '(ubuntu)' => 'Linux - Ubuntu',
            '(debian)' => 'Linux - Debian',
            '(CentOS)' => 'Linux - CentOS',
            '(Mandriva).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)' => 'Linux - Mandriva',
            '(SUSE).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)' => 'Linux - SUSE',
            '(Dropline)' => 'Linux - Slackware (Dropline GNOME)',
            '(ASPLinux)' => 'Linux - ASPLinux',
            '(Red Hat)' => 'Linux - Red Hat',
            // Loads of Linux machines will be detected as unix.
            // Actually, all of the linux machines I've checked have the 'X11' in the User Agent.
            //'X11'=>'Unix',
            '(linux)' => 'Linux',
            '(amigaos)([0-9]{1,2}\.[0-9]{1,2})' => 'AmigaOS',
            'amiga-aweb' => 'AmigaOS',
            'amiga' => 'Amiga',
            'AvantGo' => 'PalmOS',
            //'(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1}-([0-9]{1,2}) i([0-9]{1})86){1}'=>'Linux',
            //'(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1} i([0-9]{1}86)){1}'=>'Linux',
            //'(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1})'=>'Linux',
            '[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3})' => 'Linux',
            '(webtv)/([0-9]{1,2}\.[0-9]{1,2})' => 'WebTV',
            'Dreamcast' => 'Dreamcast OS',
            'GetRight' => 'Windows',
            'go!zilla' => 'Windows',
            'gozilla' => 'Windows',
            'gulliver' => 'Windows',
            'ia archiver' => 'Windows',
            'NetPositive' => 'Windows',
            'mass downloader' => 'Windows',
            'microsoft' => 'Windows',
            'offline explorer' => 'Windows',
            'teleport' => 'Windows',
            'web downloader' => 'Windows',
            'webcapture' => 'Windows',
            'webcollage' => 'Windows',
            'webcopier' => 'Windows',
            'webstripper' => 'Windows',
            'webzip' => 'Windows',
            'wget' => 'Windows',
            'Java' => 'Unknown',
            'flashget' => 'Windows',

            // delete next line if the script show not the right OS
            //'(PHP)/([0-9]{1,2}.[0-9]{1,2})'=>'PHP',
            'MS FrontPage' => 'Windows',
            '(msproxy)/([0-9]{1,2}.[0-9]{1,2})' => 'Windows',
            '(msie)([0-9]{1,2}.[0-9]{1,2})' => 'Windows',
            'libwww-perl' => 'Unix',
            'UP.Browser' => 'Windows CE',
            'NetAnts' => 'Windows',
        ];

        // https://github.com/ahmad-sa3d/php-useragent/blob/master/core/user_agent.php
        $arch_regex = '/\b(x86_64|x86-64|Win64|WOW64|x64|ia64|amd64|ppc64|sparc64|IRIX64)\b/ix';
        $arch = preg_match($arch_regex, $user_agent) ? '64' : '32';

        foreach ($os_array as $regex => $value) {
            if (preg_match('{\b(' . $regex . ')\b}i', $user_agent)) {
                return $value . ' x' . $arch;
            }
        }

        return 'Unknown';
    }

    public function get_client_ip()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }

        return $ipaddress;
    }

    public function getInternetBrowser()
    {
        $ExactBrowserNameUA = $_SERVER['HTTP_USER_AGENT'];

        if (strpos(strtolower($ExactBrowserNameUA), "safari/") and strpos(strtolower($ExactBrowserNameUA), "opr/")) {
            // OPERA
            $ExactBrowserNameBR = "Opera";
        } elseif (strpos(strtolower($ExactBrowserNameUA), "safari/") and strpos(strtolower($ExactBrowserNameUA), "chrome/")) {
            // CHROME
            $ExactBrowserNameBR = "Chrome";
        } elseif (strpos(strtolower($ExactBrowserNameUA), "msie")) {
            // INTERNET EXPLORER
            $ExactBrowserNameBR = "Internet Explorer";
        } elseif (strpos(strtolower($ExactBrowserNameUA), "firefox/")) {
            // FIREFOX
            $ExactBrowserNameBR = "Firefox";
        } elseif (strpos(strtolower($ExactBrowserNameUA), "safari/") and strpos(strtolower($ExactBrowserNameUA), "opr/") == false and strpos(strtolower($ExactBrowserNameUA), "chrome/") == false) {
            // SAFARI
            $ExactBrowserNameBR = "Safari";
        } else {
            // OUT OF DATA
            $ExactBrowserNameBR = "OUT OF DATA";
        };

        return $ExactBrowserNameBR;
    }

    public function getShow($url)
    {

        session_start();
        //$user = User::where('id', $id)->firstOrFail();
        $article = Article::where('url', $url)->firstOrFail();
        //$interested = Article::where('id', '!=', $id)->get()->random(3);

        /*$PublicIP = $this->get_client_ip();
        $json = file_get_contents("http://ipinfo.io/$PublicIP/geo");
        $jsonD = json_decode($json, true);
        //$aTry = $jsonD['ip'];
        //echo $aTry;
        //dd('end');
        if (empty($json)) {
        $countryJ = "";
        $regionJ = "";
        $cityJ = "";

        } else {

        if (!empty($jsonD['region'])) {
        $regionJ = $json['region'];
        } else {
        $regionJ = "";
        //echo $regionJ;
        }

        if (!empty($jsonD['country'])) {
        $countryJ = $jsonD['country'];
        } else {
        $countryJ = "";
        //echo $countryJ;
        }

        if (!empty($jsonD['city'])) {
        $cityJ = $jsonD['city'];
        } else {
        $cityJ = "";
        //echo $countryJ;
        }

        }
         */

        $query = @unserialize(file_get_contents('http://ip-api.com/php/'));
        if ($query && $query['status'] == 'success') {
            //echo 'Hey user from ' . $query['country'] . ', ' . $query['city'] . '!';
            $countryJ = $query['country'];
            $regionJ = $query['regionName'];
            $cityJ = $query['city'];
            $ispJ = $query['isp'];

        }
        /*foreach ($query as $data) {
        echo $data . "<br>";
        dd('here');
        }*/

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip0 = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip0 = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip0 = $_SERVER['REMOTE_ADDR'];
        }

        if (Auth::check()) {
            $userId0 = Auth::user()->id;
        } else {
            $userId0 = 0;
        }

        $article_id = $article->id;
        $region = $regionJ;
        //$region = self::getOperatingSystem();
        //$region = "";
        $country = $countryJ;
        $city = $cityJ;
        $ip = $ip0;
        $user_id = $userId0;

        $session = session_id();
        $mac_address = "";
        $device = "";
        $operating_system = $this->getOperatingSystem();
        $browser = $this->getInternetBrowser();
        $isp = $ispJ;

        $view = new View();

        $view->article_id = $article_id;
        $view->region = $region;
        $view->country = $country;
        $view->city = $city;
        $view->ip = $ip;
        $view->user_id = $user_id;

        $view->session = $session;
        $view->mac_address = $mac_address;
        $view->device = $device;
        $view->operating_system = $operating_system;
        $view->internet_browser = $browser;
        $view->isp = $isp;

        $view->save();

        $category1 = Category1::orderBy('title', 'asc')->get();
        $category2 = Category2::orderBy('title', 'asc')->get();

        $views = View::where('article_id', $article->id)->take(200)->get();
        $viewsall = View::where('article_id', $article->id)->get();
        $viewsCount = $viewsall->count();

        $latestArticles = Article::orderBy('created_at', 'desc')->take(5)->get();

        return view('articles.show')->with(['article' => $article, 'category1' => $category1, 'category2' => $category2, 'views' => $views, 'viewsCount' => $viewsCount, 'latestArticles' => $latestArticles]);

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

    public function updatearticle(Request $request)
    {

        if ($request->hasFile('article_img')) {
            $article_img = $request->file('article_img');
            $upload_name = pathinfo($article_img->getClientOriginalName(), PATHINFO_FILENAME);
            $namesbst = substr($upload_name, 0, 5);
            $filename = $namesbst . '-' . time() . '.' . $article_img->getClientOriginalExtension();

            $article_img->move(public_path() . '/uploads/articles/', $filename);
        } else {

            $filename = 'missing.jpg';
        }

        $this->validate($request, [
            'title' => 'required',

        ]);

        $id = $request['article_id'];

        $title = $request['title'];
        $article_bodyV = $request['article_body'];
        if (!$article_bodyV) {
            $article_img = $filename;
            $category1_id = $request['category1'];
            $subcategory1_id = $request['subcategory1'];
            //$url = $request['url'];

            $url = $this->generateSlug($title);
            //$url = self::generateSlug($title);
            $category2_id = $request['category2'];
            $subcategory2_id = $request['subcategory2'];
            $tags = $request['tags'];

            $article = Article::where('id', '=', $id)->first();

            $article->title = $title;

            $article->article_img = $article_img;
            $article->category1_id = $category1_id;
            $article->subcategory1_id = $subcategory1_id;
            $article->url = $url;
            $article->category2_id = $category2_id;
            $article->subcategory2_id = $subcategory2_id;
            $article->tags = $tags;
            $article->user_id = Auth::user()->id;
            $article->updated_at = Carbon::now();
            // $article->user_id = 1;

            $article->update();

        } elseif ($article_bodyV) {
            $article_img = $filename;
            $category1_id = $request['category1'];
            $subcategory1_id = $request['subcategory1'];
            //$url = $request['url'];

            $url = $this->generateSlug($title);
            //$url = self::generateSlug($title);
            $category2_id = $request['category2'];
            $subcategory2_id = $request['subcategory2'];
            $tags = $request['tags'];

            $article = Article::where('id', '=', $id)->first();

            $article->title = $title;
            $article->article_body = $article_bodyV;
            $article->article_img = $article_img;
            $article->category1_id = $category1_id;
            $article->subcategory1_id = $subcategory1_id;
            $article->url = $url;
            $article->category2_id = $category2_id;
            $article->subcategory2_id = $subcategory2_id;
            $article->tags = $tags;
            $article->user_id = Auth::user()->id;
            $article->updated_at = Carbon::now();
            // $article->user_id = 1;

            $article->update();
        }

        return redirect('articles');

    }

    public function deletearticle($id)
    {

        $thisArticle = Article::findOrFail($id);
        $thisArticle->delete();

        //return view('bufashaccts.allAccounts', compact('bfaccounts'));
        return redirect('articles');
    }

}
