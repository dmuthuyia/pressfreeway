<?php
use arodhaavms\Token;
use arodhaavms\User;
use Carbon\Carbon;
use Carbon\Category1;
//use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::group(['middleware' => ['web']], function () {

    //Route::get('/', function () {
    // return view('dds.home');
    //})->name('home');

    //Route::get('/', function () {
    //return redirect()->route('home');
    //});

    Route::get('/', [
        'uses' => 'DdsController@getHome',
        'as' => 'home',

    ]);

    Route::get('/signinfrm', function () {
        return view('users.login');
    })->name('signinfrm');

    Route::get('/users/register', function () {
        return view('users.register');
    })->name('registration form');

    //Route::get('/about-us', function () {
    //return view('aboutUs');
    //})->name('about us');

    Route::get('/about-us', [
        'uses' => 'DdsController@getAboutus',
        'as' => 'about us',

    ]);

    Route::get('/contact-us', [
        'uses' => 'DdsController@getContact',
        'as' => 'contact',

    ]);

    Route::post('/contact-us', [
        'uses' => 'DdsController@postContact',
        'as' => 'contact',

    ]);

    Route::post('/signup', [
        'uses' => 'UserController@trybsSignUp',
        'as' => 'signup',

    ]);

    Route::get('register/verify/{confirmationCode}', [
        'as' => 'confirmation_path',
        'uses' => 'UserController@confirm',
    ]);

    Route::post('/signin', [
        'uses' => 'UserController@trybsSignIn',
        'as' => 'signin',

    ]);

    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'logout',

    ]);

    Route::get('/profile', [
        'uses' => 'UserController@getProfile',
        'as' => 'profile',

    ]);

    Route::post('/update/profile', [
        'uses' => 'UserController@saveProfile',
        //'as' => 'profile.save'
    ]);

    Route::post('/profilepicture/{filename}', [
        'uses' => 'UserController@getProfilePicture',
        'as' => 'profile.picture',

    ]);

// token ****************************************************

    Route::get('/token/featured', [
        'uses' => 'DdsController@getFeatured',
        'as' => 'song.featured',
        //'middleware' => 'auth'

    ]);

    Route::get('/token/best-selling', [
        'uses' => 'DdsController@getBestselling',
        'as' => 'song.bestselling',
        //'middleware' => 'auth'

    ]);

    Route::get('/token/new-arrivals', [
        'uses' => 'DdsController@getNewarrivals',
        'as' => 'song.newarrivals',
        //'middleware' => 'auth'

    ]);

    // token ********************************************************

    Route::get('/token', [
        'uses' => 'TokenController@getIndex',
        'as' => 'token',
        //'middleware' => 'auth'

    ]);

    Route::get('/token/new', [
        'uses' => 'TokenController@getNew',
        //'as' => 'token.new',
        //'middleware' => 'auth'

    ]);

    Route::post('/token/new/post', [
        'uses' => 'TokenController@postNew',
        //'as' => 'token.post',
        //'middleware' => 'auth'

    ]);

    Route::get('/token/show/{id}', [
        'uses' => 'TokenController@getShow',
        //'as' => 'token.show',
        //'middleware' => 'auth'

    ]);

    Route::post('/update/token', [
        'uses' => 'TokenController@updateProduct',
        //'as' => 'token.update'

    ]);

    Route::get('/token/delete/{id}', [
        'uses' => 'TokenController@deleteProduct',
        //'as' => 'token.update'

    ]);

    // message ********************************************************

    Route::get('/message', [
        'uses' => 'MessageController@getIndex',
        'as' => 'message',
        //'middleware' => 'auth'

    ]);

    Route::get('/message/new', [
        'uses' => 'MessageController@getNew',
        //'as' => 'message.new',
        //'middleware' => 'auth'

    ]);

    Route::post('/message/new/post', [
        'uses' => 'MessageController@postNew',
        'as' => 'message.post',
        //'middleware' => 'auth'

    ]);

    Route::get('/message/show/{id}', [
        'uses' => 'MessageController@getShow',
        //'as' => 'message.show',
        //'middleware' => 'auth'

    ]);

    Route::post('/update/message', [
        'uses' => 'MessageController@updateProduct',
        //'as' => 'message.update'

    ]);

    Route::get('/message/delete/{id}', [
        'uses' => 'MessageController@deleteProduct',
        //'as' => 'message.update'

    ]);

// article ********************************************************

    Route::get('/article', [
        'uses' => 'articleController@getIndex',
        'as' => 'article',
        //'middleware' => 'auth'

    ]);

    Route::get('/article/new', [
        'uses' => 'articleController@getNew',
        'as' => 'article.new',
        //'middleware' => 'auth'

    ]);

    Route::post('/article/new/post', [
        'uses' => 'articleController@postNew',
        //'as' => 'article.post',
        //'middleware' => 'auth'

    ]);

    Route::get('/article/show/{id}', [
        'uses' => 'articleController@getShow',
        //'as' => 'article.show',
        //'middleware' => 'auth'

    ]);

    Route::post('/update/article', [
        'uses' => 'articleController@updatearticle',
        //'as' => 'article.update'

    ]);

    Route::get('/article/delete/{id}', [
        'uses' => 'articleController@deletearticle',
        //'as' => 'article.update'

    ]);

// Download Route
    Route::get('download/{filename}', function ($filename) {
        // Check if user logged in
        if (Auth::check()) {
            // Check if file exists
            $file_path = public_path() . '/uploads/tokens/' . $filename;

            if (file_exists($file_path)) {
                // Send Download
                return Response::download($file_path, $filename, [
                    'Content-Length: ' . filesize($file_path),
                ]);
            } else {
                // Error
                exit('Requested file does not exist on our server!');
            }
        } else {
            // If user logged out
            return redirect()->route('registration form');
        }

    })->name('download');

//->where('filename', '[A-Za-z0-9\-\_\.]+');

    Route::get('/cart', array('before' => 'auth.basic', 'as' => 'cart', 'uses' => 'CartController@getIndex', 'middleware' => 'auth'));
    Route::post('/cart/add', array('before' => 'auth.basic', 'uses' => 'CartController@postAddToCart', 'middleware' => 'auth'));
    Route::get('/cart/delete/{id}', array('before' => 'auth.basic', 'as' => 'delete_token_from_cart', 'uses' => 'CartController@getDelete', 'middleware' => 'auth'));

    Route::post('/order', array('before' => 'auth.basic', 'uses' => 'OrderController@postOrder'));
    Route::get('/user/orders', array('before' => 'auth.basic', 'uses' => 'OrderController@getIndex', 'middleware' => 'auth'));

//*********************************************************
    //ajax routes

//*********************************************************
    //ajax routes

    Route::get('/ajax-subcat', function () {
        $cat_id = Input::get('cat_id');
        //$cat_id = $request['email'];

        $subsong = Subcategory1::where('category_id', '=', $cat_id)->get();

        return Response::json($subcat);

    });

    Route::get('/ajax-software', function () {
        $subcat_id = Input::get('subcat_id');
        //$cat_id = $request['email'];

        $services = Product::where('subcategory_id', '=', $subcat_id)->get();

        return Response::json($services);

    });

    Route::get('/ajax-staff', function () {
        //$cat_id = Input::get('cat_id');
        //$cat_id = 1;
        //$messages = Message::where('cat_id', '=', $cat_id)->get();
        $staff = User::all(['id', 'FirstName', 'LastName']);

        return Response::json($staff);
    });

    Route::get('/ajax-this-month', function () {
        $visitors = Token::whereMonth('created_at', '=', date('m'));

        //$visitors = Token::all();
        $visitorCount = $visitors->count();

        //$k = array('count' => $visitorCount);
        $k = ['count' => $visitorCount];

        //return Response::json($visitors);
        return Response::json($k);
    });

    Route::get('/ajax-this-day', function () {
        $visitors = Token::whereDate('created_at', '=', date('Y-m-d'));
        $visitorCount = $visitors->count();
        $thisCount = ['count' => $visitorCount];
        return Response::json($thisCount);
    });

    Route::get('/ajax-this-week', function () {
        //$visitors = Token::whereDate('created_at', '=', date('Y-m-d'));
        Carbon::setWeekStartsAt(Carbon::SUNDAY);
        Carbon::setWeekEndsAt(Carbon::SATURDAY);

        $visitors = Token::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

        $visitorCount = $visitors->count();
        $thisCount = ['count' => $visitorCount];
        return Response::json($thisCount);
    });

    Route::get('/ajax-this-user-today', function () {
        $visitors = Token::whereDate('created_at', '=', date('Y-m-d'));
        $visitorCount = $visitors->count();
        $thisCount = ['count' => $visitorCount];
        return Response::json($thisCount);
    });

    Route::get('/ajax-currently-inside', function () {
        $visitors = Token::all();
        $visitorCount = $visitors->count();
        $thisCount = ['count' => $visitorCount];
        return Response::json($thisCount);
    });

    Route::post('/message/ajax-post', [
        'uses' => 'MessageController@postNewAjax',
        'as' => 'message.ajax_post',

    ]);

    Route::post('token/{branch_no}', 'EmployeeController@getemployee');

    // Activity logs*********************************************************

    Route::get('add-to-log', 'ActivityController@myTestAddToLog');
    Route::get('logActivity', 'ActivityController@logActivity');

});
