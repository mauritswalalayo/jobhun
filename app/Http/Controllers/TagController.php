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
    public function add() {
        
    return view('content/tag/tambah',['namaku' => 'oces' ]);
        
    }

    public function store(Request $request){
        $data = new Tag ;
        $data->name = $request->name;
        $data->save();

    return redirect()->route('tag');
    

    }
}
