<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use App\Collaborate;
use App\Http\Controllers\CollaborateController;

Route::get('/jobhun-visit', 'Homepage_UserController@jv')->name('jv');