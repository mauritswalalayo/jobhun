<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use App\Collaborate;
use App\Http\Controllers\CollaborateController;

//Loker

Route::get('loker/table/{verified_status}', 'JobController@view_loker')->name('loker.table');

//Route::get('loker/terverifikasi/','JobController@loker_terverifikasi')->name('loker.terverifikasi');

Route::post('post/jobs/reguler','JobController@add')->name('post.jobs.reguler');

Route::post('post/jobs/premium','JobController@add')->name('post.jobs.premium');

Route::get('loker/not-verified/{id}','JobController@not_verified')->name('loker.notverifikasi');


Route::patch('loker/verified-loker/{id}', 'JobController@verified_loker')->name('verified_loker');

Route::get('loker/verified/{id}', 'JobController@verified')->name('verified_job');

Route::get('loker/delete/{id}', 'JobController@delete')->name('delete_job');

Route::get('/jobhun-careerhub', 'Homepage_UserController@jch')->name('jch');

Route::get('/loker/show/{id}', 'Homepage_UserController@spek_jch')->name('spek_jch');

Route::post('/search','JobController@cari')->name('cari.loker');


//================================ Route Posting Job ===============================

Route::get('postingjob/form/reguler', 'JobController@form_reguler')->name('formposting_reguler');

Route::get('postingjob/form/premium', 'JobController@form_premium')->name('formposting_premium');

Route::get('postingjob/type', 'JobController@indextype')->name('typeposting');

Route::get('posting/media-partner/form', 'JobController@index_media_partner')->name('form_media_partner');