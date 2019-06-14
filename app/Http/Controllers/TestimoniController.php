<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
    
        return view('content.testimoni.table');
    }
 
    public function form ()
    {
        return view ('content.testimoni.form');
    }

}
