<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(["middleware" => ['cors']],function (){
    Route::get('job/filter/{per_page}', 'JobController@apiCareerHub');

    Route::post('post/jobs/premium','JobController@add')->name('post.jobs.premium');

    Route::post('post/jobs','JobController@add')->name('post.jobs.reguler');

    Route::get('testimoni', 'TestimoniController@index')->name('testimoni.index');
});


