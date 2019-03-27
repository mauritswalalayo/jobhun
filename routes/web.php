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
    return view('content/home',['namaku' => 'oces' ]); 
})->name('home');

Route::get('/setting', function () {
    return view('content/setting',['namaku' => 'oces']);
})->name('setting');

Route::get('/user', 'UserController@index' )->name('user');


Route::get('/profil', function () {
    return view('content/profil',['namaku' => 'oces' ]);
})->name('profil');

Route::get('/login', function () {
    return view('login/login',['namaku' => 'oces' ]);
})->name('login');

Route::get('/tag', 'TagController@index' )->name('tag');

Route::get('/tambahuser', function () {
    return view('login/tambahuser',['namaku' => 'oces' ]);
})->name('tambahuser');

// Route::get('/tambah', function () {
// })->name('tambah');

Route::get('/tambah', 'TagController@add' )->name('tambah');

Route::get('/tambahuser', 'UserController@add' )->name('tambahuser');

Route::post('/store', 'TagController@store' )->name('store');









