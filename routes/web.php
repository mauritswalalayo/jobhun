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
Route::get('user', function () {
    return view('user.index');
})->name('user.index');

Route::get('user/create', function () {
    return view('user.create');
})->name('user.create');


//Route Biodata
Route::get('biodata', function () {
    return view('biodata.index');
})->name('biodata.index');

//Route Logout
Route::get('/', function () {
    return view('welcome');
})->name('logout');











