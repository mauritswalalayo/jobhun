<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use App\Collaborate;
use App\Http\Controllers\CollaborateController;

//Media Partner
Route::post('post/media-partner/','JobController@media_partner')->name('post.mediapartner');

Route::get('mediapartner/delete/{id}', 'JobController@delete_mediapartner')->name('delete_mediapartner');

Route::get('mediapartner/verified/{id}', 'JobController@verified_mediapartner')->name('verified_mediapartner');