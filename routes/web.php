<?php

use Illuminate\Routing\Router;
use App\Http\Controllers\TagController;
use App\User;
use App\Tag;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route User
Route::get('user', function () {
    return view('user.index');
})->name('user.index');

Route::get('user/create', function () {
    return view('user.create');
})->name('user.create');


//Route Tag
Route::get('tag', function () {
    return view('tag.index');
})->name('tag.index');

Route::get('tag/create', function () {
    return view('tag.create');
})->name('tag.create');

//Route Post
Route::get('post', function(){
    return view ('post.index');
})->name('post.index');


Route::get('post/create', function(){
    return view ('post.create');
})->name('post.create');

//Route Logout
Route::get('/', function () {
    return view('welcome');
})->name('logout');











