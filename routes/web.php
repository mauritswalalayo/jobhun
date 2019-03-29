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

Route::get('/tag', 'TagController@index' )->name('tag');

Route::get('/tambah', 'TagController@add' )->name('tambah'); //menampilkan form tambah tag

Route::post('/store', 'TagController@store' )->name('store'); //mengirim data tag ke server


Route::get('/user', 'UserController@index' )->name('user');

Route::get('/tambahuser', 'UserController@add' )->name('tambahuser');

Route::post('/storeuser', 'UserController@storeuser' )->name('storeuser'); //mengirim data user ke server











