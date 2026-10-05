<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;

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
});

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


Route::get('/user', [App\Http\Controllers\UserController::class, 'show']);

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

Route::patch('/post/{id}', [PostController::class, 'update']);
Route::get('/post/path', [PostController::class, 'the_path']);

Route::get('/request', function (Request $request) {
    // return $request->all();
    // return $request->host();
    // return $request->method();
    // return $request->httpHost();
    // return $request->url();
    return $request->ip();

});


