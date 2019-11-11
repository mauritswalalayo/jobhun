<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use App\Collaborate;
use App\Http\Controllers\CollaborateController;
//=========================== Route Testimoni ==============================
Route::get('testimoni/table', 'TestimoniController@index')->name('testimoni.table');

Route::get('testimoni/form', 'TestimoniController@form')->name('testimoni.form');

Route::post('testimoni/add', 'TestimoniController@add')->name('testimoni.add');

Route::get('testimoni/delete/{id}', 'TestimoniController@delete');

Route::get('testimoni/edit/{id}', 'TestimoniController@edit');

Route::get('testimoni/update/{id}', 'TestimoniController@update');