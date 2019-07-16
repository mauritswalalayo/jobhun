<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostingJobController extends Controller
{
    public function index ()
    {
        
        return view('user.content.postingjob.formposting');
    }

    public function indextype ()
    {
        
        return view('user.content.postingjob.typejob');
    }
}
