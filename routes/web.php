<?php

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
//Route Home
Route::get('/', function () {
    return view('content.home');
})->name('home');



//Route User

Route::get('user/table', 'UserController@index')->name('user.table');

Route::get('user/form', 'UserController@form')->name('user.form');

Route::post('user/add', 'UserController@add')->name('user.add');

Route::get('user/edit/{id}', 'UserController@edit');

Route::patch('user/update/{id}', 'UserController@update');

Route::get('user/hapus/{id}', 'UserController@delete');



//Route Post
Route::get('/post/table', function () {
    return view('content.post.table');
})->name('post.table');

Route::get('/post/form', function () {
    return view('content.post.form');
})->name('post.form');

//Route Tag
Route::get('/tag/table', function () {
    return view('content.tag.table');
})->name('tag.table');

Route::get('/tag/form', function () {
    return view('content.tag.form');
})->name('tag.form');