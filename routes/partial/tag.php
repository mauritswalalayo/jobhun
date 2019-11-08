<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use App\Collaborate;
use App\Http\Controllers\CollaborateController;
//=========================== Route Tag ==============================

Route::get('tag/table', 'TagController@index')->name('tag.table');

Route::get('/tag/form', 'TagController@form')->name('tag.form');

Route::post('tag/add', 'TagController@add')->name('tag.add');

Route::get('tag/edit/{id}', 'TagController@edit');

Route::patch('tag/update/{id}', 'TagController@update');

Route::get('tag/delete/{id}', 'TagController@delete');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');