<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller

{
    public function index() {
        $user =  User::paginate(10);
        
        return view('content/user',['namaku' => $user ]);
    
    }
    
    public function add() {
        
         return view('content/tag/tambahuser',['namaku' => 'oces' ]);
    }

    public function storeuser(Request $request){ 
        $dataku = new User ;
        $dataku->name = $request->name;
        $dataku->phone = $request->phone;
        $dataku->sex = $request->sex;
        $dataku->email = $request->email;
        $dataku->password = bcrypt('12345');



        $dataku->save();

    return redirect()->route('user')->with('user', 'User Berhasil Ditambahkan');
    }
}