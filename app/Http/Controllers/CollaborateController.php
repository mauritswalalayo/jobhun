<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollaborateController extends Controller
{
    public function index()
    {
        return view('content.collaborate.table');
    }
 
    public function form ()
    {
        return view ('content.collaborate.form');
    }
}
