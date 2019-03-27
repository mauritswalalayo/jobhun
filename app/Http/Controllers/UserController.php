<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $mhs = [
            ['nama' => 'oces', 'phone' => '082245755491', 'sex' => 'Laki-laki', 'email' => 'walalayooces@gmail.com' ],
            ['nama' => 'boy', 'phone' => '098778954635', 'sex' => 'laki-laki', 'email' => 'boy@gmail.com' ],
            ['nama' => 'juned', 'phone' => '098778954876', 'sex' => 'Laki imitasi', 'email' => 'arjun@gmail.com' ],
            
        ]; 

        return view('content/user',['namaku' => $mhs ]);

    }

    public function add() {
        
         return view('content/tag/tambahuser',['namaku' => 'oces' ]);
        

    }
}
