<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use App\Collaborate;
use App\Http\Controllers\CollaborateController;
//=========================== Route Collaborate ==============================
Route::get('collaborate/table', 'CollaborateController@index')->name('collaborate.table');

Route::get('collaborate/form', 'CollaborateController@form')->name('collaborate.form');

Route::post('collaborate/add', 'CollaborateController@add')->name('collaborate.add');

Route::get('collaborate/delete/{id}', 'CollaborateController@delete')->name('collaborate.delete');

Route::get('collaborate/edit/{id}', 'CollaborateController@edit')->name('collaborate.edit');

Route::get('collaborate/update/{id}', 'CollaborateController@update')->name('collaborate.update');