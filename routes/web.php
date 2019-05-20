<?php

use Illuminate\Routing\Router;
use App\Http\Controllers\TagController;
use App\User;

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

Route::get('/', function () {
    return view('content/home');
})->name('home');

Route::get('/setting', function () {
    return view('content/setting');
})->name('setting');

Route::get('/profil', function () {
    return view('content/profil',['namaku' => 'oces' ]);
})->name('profil');

Route::get('/login', function () {
    return view('login/login',['namaku' => 'oces' ]);
})->name('login');

Route::get('/tambahuser', function () {
    return view('login/tambahuser',['namaku' => 'oces' ]);
})->name('tambahuser');

// Route::get('/tambah', function () {
// })->name('tambah');

//===================================== TAG ==================================================================
Route::get('/tag', 'TagController@index' )->name('tag');

Route::get('/tag/tambah', 'TagController@add' )->name('tag.tambah'); //menampilkan form tambah tag

Route::post('/tag/store', 'TagController@store' )->name('store'); //mengirim data tag ke server

Router::get('/tag/edit/{id}', 'TagController@edit'); //menampilakan halaman untuk edit tag

Router::patch('/tag/update/{id}', 'TagController@update'); //mengupdate data tag (dgn aucuannya adalah id)

Router::get('/tag/delete/{id}', 'TagController@delete'); //menampilakan halaman untuk update tag


//===================================== USER ==================================================================
Route::get('/user', 'UserController@index' )->name('user');

Route::get('/user/tambah', 'UserController@add' )->name('tambahuser');

Route::post('/user/store', 'UserController@storeuser' )->name('storeuser'); //mengirim data user ke server

Route::get('/user/edit/{id}', 'UserController@edit');

Route::patch('/user/update/{id}', 'UserController@update');

Route::get('/user/delete/{id}', 'UserController@delete');

//==================================== POST ====================================================================

Route::get('/post', 'PostController@index' )->name('post');

Route::get('/post/tambah', 'PostController@add' )->name('tambahpost');

Route::post('/post/store', 'PostController@storepost' )->name('storepost'); //mengirim data user ke server

Route::get('/post/edit/{id}', 'PostController@editpost');

Route::patch('/post/update/{id}', 'PostController@update');



// OCES GITHUB COBA

// OCES GITHUB COBA 4

// Gusti edit route user

// OCES BANGSAT

// Gusti edit 1
// Gusti edit route user 2













