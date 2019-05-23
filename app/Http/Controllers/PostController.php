<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('content.post.table');
    }

    public function form(){
        return view('content.post.form');
    }
}
