<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;

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
//----------------  Route Home
Route::get('/', function () {
    return redirect()->route('beranda');
});

Route::get('register', function(){
    return view (auth.register);
})->name('register');



Route::get('user/logout', 'UserController@logout')->name('user.logout');

Route::group(["middleware" => ['login']],function (){

    Route::get('/beranda', function () {
        return view('content.home');
    })->name('beranda');
    
    Route::get('user/table', 'UserController@index')->name('user.table');
});

Route::group(["middleware" => ['admin']],function (){
    Route::get('user/form', 'UserController@form')->name('user.form');
});


//========================== Route User =============================




Route::post('user/add', 'UserController@add')->name('user.add');

Route::get('user/edit/{id}', 'UserController@edit');

Route::patch('user/update/{id}', 'UserController@update');

Route::get('user/hapus/{id}', 'UserController@delete');



//========================== Route Post =============================

Route::get('/post/table', 'PostController@index')->name('post.table');

Route::get('/post/form', 'PostController@form')->name('post.form');

Route::post('post/add', 'PostController@add')->name('post.add');

Route::get('post/edit/{id}', 'PostController@edit');

Route::patch('post/update/{id}', 'PostController@update');

Route::get('post/hapus/{id}', 'PostController@delete');


//=========================== Route Tag ==============================

Route::get('tag/table', 'TagController@index')->name('tag.table');

Route::get('/tag/form', 'TagController@form')->name('tag.form');

Route::post('tag/add', 'TagController@add')->name('tag.add');

Route::get('tag/edit/{id}', 'TagController@edit');

Route::patch('tag/update/{id}', 'TagController@update');

Route::get('tag/delete/{id}', 'TagController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

