<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Validator;


class UserController extends Controller
{
    //
    public function index ()
    {
        $user = user::all();
        return view ('content.user.table', ['daftar_user' => $user]);
    }

    public function form ()
    {
        return view ('content.user.form');
    }

    public function add (Request $request)
    {
        $validator = validator::make($request->all(),
        ['name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'password' => 'required'
        ]);
        if ($validator->fails())
        {
            return back ()-> withErrors($validator)->withInput();
        }

        $user = user::create($request->all());
        $user->save();
        return redirect()->route('user.table');
    }
}
