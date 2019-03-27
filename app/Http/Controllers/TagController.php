<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index() {
        $tag =  Tag::paginate(3);

        return view('content/tag',['data' => $tag ]);

    }
    
}
