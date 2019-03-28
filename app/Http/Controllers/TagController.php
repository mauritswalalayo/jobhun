<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index() {
        $tag =  Tag::paginate(10);
        
        return view('content/tag',['data' => $tag ]);

    }
    public function add() {
        
    return view('content/tag/tambah',['namaku' => 'oces' ]);
        
    }

    // ini untuk merequest data ke server
    // variabel $data boleh sembarang (bebas)
    public function store(Request $request){ 
        $data = new Tag ;
        $data->name = $request->name;
        $data->save();

    return redirect()->route('tag'); 
    // untuk menampilan data yang sudah di resquest dari server dan di kirim ke route tag
    // dan kemudian akan ditampilkan                        
    

    }
}
