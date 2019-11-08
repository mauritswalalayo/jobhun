<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use App\Collaborate;
use App\Http\Controllers\CollaborateController;

//========================== Route Post =============================

Route::get('/post/table', 'PostController@index')->name('post.table');

Route::get('/post/form', 'PostController@form')->name('post.form');

Route::post('post/add', 'PostController@add')->name('post.add');

Route::get('post/edit/{id}', 'PostController@edit');

Route::patch('post/update/{id}', 'PostController@update');

Route::get('post/hapus/{id}', 'PostController@delete');