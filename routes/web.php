<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/user', [App\Http\Controllers\UserController::class, 'show']);

Route::resource('categories', App\Http\Controllers\CategoryController::class);
