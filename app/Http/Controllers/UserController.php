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
        $user = user::paginate(3);
        $first_index = $user->currentPage() * $user->perPage() - $user->perPage() + 1;
        return view ('content.user.table', ['daftar_user' => $user, 'first_index' => $first_index]);
    }
//============================================
    public function form ()
    {
        return view ('content.user.form');
    }
//============================================
    public function add (Request $request)
    {
        $validator = validator::make($request->all(),
        ['name' => 'required',
        'phone' => 'required',
        'email' => 'required',]);
        if ($validator->fails())
        {
            return back ()-> withErrors($validator)->withInput();
        }

        $user = user::create($request->all());
        $user->save();
        return redirect()->route('user.table');
    }
//================================================
    public function edit ($id)
    {
        $user = user::find($id);
        return view ('content.user.form',['edituser' => $user]);
    }
//===============================================
    public function update (Request $request, $id)
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

        $user = user::find($id);
        $user->update($request->all());
        return redirect()->route('user.table');
    }

    public function delete ($id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect()->route('user.table');

    }
}
