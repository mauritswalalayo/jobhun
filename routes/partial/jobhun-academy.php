<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use App\Collaborate;
use App\Http\Controllers\CollaborateController;
//Jobhyn Academy
Route::get('form/jobhun-academy/','JobhunAcademyController@form_jobhun_academy')->name('form.jobhunacademy');

Route::post('form/jobhun-academy/daftar','JobhunAcademyController@add')->name('add.jobhunacademy');

Route::get('jobhun-academy/table', 'JobhunAcademyController@table')->name('jobhunacademy.table');

Route::get('jobhun-academy/table/delete/{id}', 'JobhunAcademyController@delete')->name('jobhunacademy.delete');

Route::get('/jobhun-academy', 'Homepage_UserController@ja')->name('ja');

Route::get('/jobhun-academy-content-writer', 'Homepage_UserController@content_writer')->name('content-writer');

Route::get('/jobhun-academy-graphic-designer', 'Homepage_UserController@graphic_designer')->name('graphic-designer');

Route::get('/jobhun-academy-videographer', 'Homepage_UserController@videographer')->name('videographer');

Route::get('/jobhun-academy-web-developer', 'Homepage_UserController@web')->name('web');

Route::get('/jobhun-academy-android-developer', 'Homepage_UserController@android')->name('android');

Route::get('/jobhun-academy-ui-ux-designer', 'Homepage_UserController@ui')->name('ui');

Route::get('/jobhun-academy-copywriter', 'Homepage_UserController@copywriter')->name('copywriter');

Route::get('/jobhun-academy-social-media-specialist', 'Homepage_UserController@social_media')->name('social_media');

Route::get('/jobhun-academy-public-speaker', 'Homepage_UserController@public_speaker')->name('public_speaker');

Route::get('/jobhun-academy-startup-founder', 'Homepage_UserController@startup_founder')->name('startup_founder');

Route::get('/jobhun-academy-media-partner', 'Homepage_UserController@media')->name('media');