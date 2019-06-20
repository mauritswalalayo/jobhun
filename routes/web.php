<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use App\Collaborate;
use App\Http\Controllers\CollaborateController;

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
})->name('beranda');


Route::get('register', function(){
    return view (auth.register);
})->name('register');


Route::get('user/logout', 'UserController@logout')->name('user.logout');

//========================= Middleware ===============================================

Route::group(["middleware" => ['login']],function (){

    Route::get('/beranda', function () {
        return view('content.home');
    })->name('beranda');

    Route::get('user/table', 'UserController@index')->name('user.table');
});


Route::group(["middleware" => ['admin']],function (){

    //========================== Route User =============================
    Route::get('user/form', 'UserController@form')->name('user.form');

    Route::post('user/add', 'UserController@add')->name('user.add');

    Route::get('user/edit/{id}', 'UserController@edit');

    Route::patch('user/update/{id}', 'UserController@update');

    Route::get('user/hapus/{id}', 'UserController@delete');
});

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


//=========================== Route Testimoni ==============================
Route::get('testimoni/table', 'TestimoniController@index')->name('testimoni.table');
Route::get('/testimoni/form', 'TestimoniController@form')->name('testimoni.form');
Route::post('testimoni/add', 'TestimoniController@add')->name('testimoni.add');
Route::get('testimoni/delete/{id}', 'TestimoniController@delete');




//=========================== Route Collaborate ==============================
Route::get('collaborate/table', 'CollaborateController@index')->name('collaborate.table');

Route::get('collaborate/form', 'CollaborateController@form')->name('collaborate.form');

Route::post('collaborate/add', 'CollaborateController@add')->name('collaborate.add');

Route::get('collaborate/delete/{id}', 'CollaborateController@delete')->name('collaborate.delete');

Route::get('collaborate/edit/{id}', 'CollaborateController@edit')->name('collaborate.edit');

Route::get('collaborate/update/{id}', 'CollaborateController@update')->name('collaborate.update');

//=========================== Route Homepage ==============================
Route::get('user/homepage', 'HomepageController@index')->name('user.homepage');
