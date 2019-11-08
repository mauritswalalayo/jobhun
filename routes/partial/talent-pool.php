<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use App\Collaborate;
use App\Http\Controllers\CollaborateController;

//Talent Pool
Route::post('post/talent-pool/','TalentpoolController@add')->name('post.talentpool');

Route::get('/jobhun-talent-pool', 'Homepage_UserController@jtp')->name('jtp');