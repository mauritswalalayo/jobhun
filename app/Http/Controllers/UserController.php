<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;


class UserController extends Controller
{
    public function store(Request $request)
    {
        $validator = validator::make($request->all(),
        ['name' => 'required',
        'email' => 'required|unique',
        'phone' => 'required',
        'password' => bycript('1234567890')]);
        if ($validator->fails())
        {
            return back ()-> withErrors($validator)->withInput();
        }

        $user = User::create($request->all());
        $user->password = bcrypt('12345');
        $user->save();

        return redirect()->route('beranda');
    }
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
        'email' => 'required',]);
        if ($validator->fails())
        {
            return back ()-> withErrors($validator)->withInput();
        }

        $user = user::create($request->all());
        $user->role = 'author';
        $user->password = bcrypt('12345');
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
        'email' => 'required',
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

    //untuk user biasa
    public function login(Request $request){
        $validator = validator::make($request->all(),
        ['email' => 'required',
        'password' => 'required',]);
        if ($validator->fails())
        {
            return response()->json(['pesan'=>'maaf password dan email wajib diisi'],401);
        }

        $user = User::where('email',$request->email)->first();
        if(!$user){
            return response()->json(['pesan'=>'maaf user anda belum terdaftar'],401);
        }

        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json(['pesan'=>'maaf password anda salah'],401);
        }

        return response()->json(['pesan'=>'Selamat '.$user->name.', anda berhasil login']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
