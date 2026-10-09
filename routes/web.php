<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/user/{name}/{id}', function ($name, $id) {
//     return 'User ' . $name . ' with ID ' . $id;
// })->where(['name' => '[A-Za-z]+', 'id' => 23]);

// Route::get('/user/{name}/{id}', function ($name, $id) {
//     return 'User ' . $name . ' with ID ' . $id;
// })->whereAlpha('name')->whereNumber('id');

// Route::get('/books/{genre}', function ($genre) {
//     return 'Books in the ' . $genre . ' genre';
// })->whereIn('genre', ['fiction', 'non-fiction', 'mystery', 'fantasy']);


// Route::get('/', function (Request $request) {
//     $token = $request->session()->token();
//     return $token;
// });

// Route::get('/{id}/{status}', function ($id, $status) {
//     return $id . ' ' . $status;
// });

// Route::get('/{id?}', function (?int $id = null) {
//     return $id;
// });

// Route::get('/user/{id}', function ($id) {
//     return $id . ' is correct';
// })->where('id', 23);


// Route::get('/user/{name}', function ($name) {
//     return $name . ' is correct';
// })->where('name', '[a-zA-Z]+');


// Route::get('books/{genre}', function ($genre) {
//     return 'Books in the ' . $genre . ' genre';
// })->whereIn('genre', ['fiction', 'non-fiction', 'mystery', 'romance', 'science-fiction']);


// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/company-contact', function () {
//     return "Company Contact";
// })->name('company.contact');


// Route::get('/', function () {
//     return view('welcome');
// })->middleware(CalculateCode::class);


// Route::get('/user', [App\Http\Controllers\UserController::class, 'show']);

// Route::resource('categories', App\Http\Controllers\CategoryController::class);


// Route::resources([
//     'categories' => CategoryController::class,
//     'photos' => PhotoController::class,
// ]);

// Route::resource('categories', CategoryController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);

// Route::apiResource('categories', CategoryController::class);

// Route::apiResources([
//     'categories' => CategoryController::class,
//     'photos' => PhotoController::class,
// ]);

// Route::get('/categories/attach-post', [CategoryController::class, 'attach_post'])->name('categories.attach_post');

// Route::resource('categories', CategoryController::class)->parameters([
//     'categories' => 'category_id'
// ]);


// Requests

// Route::get('/', function (Request $request) {
//     return dd($request);
// });

// Route::patch('/post/{id}', [PostController::class, 'update']);
// Route::get('/post/path', [PostController::class, 'the_path']);

// Route::get('/request', function (Request $request) {
//     // return $request->all();
//     // return $request->host();
//     // return $request->method();
//     // return $request->httpHost();
//     // return $request->url();
//     return $request->ip();

// });


// Requests Input
// Route::get('/', function (Request $request) {
//     $data = $request->all();
//     return $data['name'] ?? 'No name provided';
// });

// Route::get('/', function (Request $request) {
//     $data = $request->collect();
//     return $data->get('name', 'No name provided');
// });


// Route::get('/', function (Request $request) {
//     $data = $request->input();
//     return $data;
// });


// Route::get('/request', function () {
//     return view('request');
// });

// Route::post('/request', function (Request $request) {
//     $data = $request->input('colors.2');
//     return $data;
// });

// Route::post('/date', function (Request $request) {
//     //  dd(gettype($request->date('appointment')));
//     // $obj = $request->date('appointment');
//     // return $obj->diffForHumans();
//     return $request->appointment;
// });


// Route::post('/custom', function (Request $request) {
//     // $inputs = $request->only(['email', 'checkBox']);
//     // $inputs = $request->except(['email', 'checkBox']);

//     if($request->has(['email', 'checkBox'])) {
//         return "Email is present in the request";
//     } else {
//         return "Email is not present in the request";
//     }

// })->name('custom');

// Route::get('/data', function (Request $request) {
//     // return $request->all();
//     if($request->missing('email')){
//         return "Email is missing in the request";
//     } else {
//         return "Email is present in the request";
//     }
// });

// Route::post('/flash', function (Request $request) {
//     $request->flash();
//     return "FLASHED";
// });

// Route::get('/response', function () {
//     // return response('Hello World', 200)
//     //     ->header('Content-Type', 'text/plain')
//     //     ->cookie('name', 'value', 60);

//     return response('with many headers', 200)->withHeaders([
//         'Content-Type' => 'text/plain',
//         'Header-1' => 'Value 1',
//         'Header-2' => 'Value 2',
//         'X-Custom-Header' => 'Custom Value',
//     ])->cookie('name', 'value', 60);
// });

// Route::middleware('cache.headers:public;max_age=3600;etag')->group(function () {
//     Route::get('/cache', function () {
//         // return response('This response is cached for 1 hour.');
//         $user = 'Louis Armstrong';
//         return response('DASHBOARD')->cookie('name', $user);
//     });
//     Route::get('/posts', function (Request $request) {
//         return "Welcome to posts, MR. " . $request->cookie('name');
//     });
// });


// Route::middleware('cache.headers:public;max_age=3600;etag')->group(function () {
//     Route::get('/cache', function () {
//         // return response('This response is cached for 1 hour.');
//         $user = 'Louis Armstrong';
//         $cookie = cookie('name', $user, 1); // Set cookie for 60 minutes
//         // return response('DASHBOARD')->cookie($cookie);
//         // return response('DASHBOARD')->withoutCookie('visit');

//         //remove cookie
//         Cookie::expire('visit');
//     });
//     Route::get('/posts', function (Request $request) {
//         $cookie = cookie('visit', 1, 30); // Set cookie for 30 minutes
//         // return "Welcome to posts, MR. " . $request->cookie('name');
//         return response('POSTS')->cookie($cookie);
//     });
// });

// Redirecting with and without parameters

// Route::get('/login', function () {
//     return redirect()->route('home');
// });

// Route::get('/data', function (Request $request) {
//     return $request->query('id');
// })->name('data');

// Route::get('/dashboard', function () {
//     return redirect()->route('data', ['id' => 23]);
// });

// Redirecting to a controller action
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/request', function () {
//     return redirect()->action([DashboardController::class, 'index'], ['id' => 23]);
// });

// Redirecting to external domains
// Route::get('/external', function () {
//     return redirect()->away('https://google.com');
// });

//Redirecting with flashed data
// Route::get('/redirect-dashboard', function () {
//     return redirect('dashboard')->with('user', 'Louis Abasolo');
// });
// Route::get('/dashboard', [DashboardController::class, 'show']);

//Returning and consuming json data
// Route::get('/json-home', function(){
//     return view('json');
// });

// Route::get('/json', function(){
//     return response()->json([
//         'name' => 'Louis',
//         'role' => 'admin'
//     ]);
// });

// Route::view('/profile', 'profile');
// Route::view('/posts', 'posts.create');

// Passing data
class User {
    public $username;
    public $email;

    function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
}

Route::get('/profile', function(){
    $user = new User('rico', 'email@email.com');

    // return view('profile', ['user'=>$user]);
    // return view('profile', compact('user'));
    return view('profile', compact('user'))->with('status', 'active')->with('color', 'blue');
});

$items = [1,2,3,'frieza',4,5,6,7,8,'bordock'];
$products = ['Hydrate','Acoustics','Slumber','Glow','Elevate'];
Route::view('/dashboard', 'dashboard', ['username'=>'edwin', 'count'=>10, 'status'=>'active', 
    "users" => [
        'louis',
        'james',
        'pokemon' ]
, 'items' => $items, 'products' => $products],);