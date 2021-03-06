<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Registrationuser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\Environment\Console;
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

    public function sign_up(Request $request)
    {
        $validator = validator::make($request->all(),
        ['name' => 'required',
        'password' => 'required',
        'email' => 'required',
        'phone' =>'required']);
        if ($validator->fails())
        {
            return response()->json(['pesan'=>'Maaf semua data wajib diisi'],401);
        }

        $email = User::where('email',$request->email)->first();
        if($email){
            return response()->json(['pesan'=>'maaf email sudah terdaftar'],401);
        }

        $user = User::create($request->all());
        $user->role = 'user';
        $user->password = bcrypt($request->password);
        $user->save();
        
        $register_link = bcrypt($user->email.$user->created_at);

        $register = new Registrationuser;
        $register->user_id = $user->id;
        $register->register_link = $register_link;
        $register->save();

        $emailtujuan = $user->email;
        $namatujuan = $user->name;
        $link = $register->register_link;
        $data = ['name' => $namatujuan,'link_registrasi' => $link];

        Mail::send('content.email.email_verified_users', $data, function ($message) use($emailtujuan,$namatujuan) {
        $message->from('jobhun.id@gmail.com', 'Jobhun');
        // $message->sender('john@johndoe.com', 'John Doe');
        $message->to($emailtujuan, $namatujuan);
        // $message->cc('john@johndoe.com', 'John Doe');
        // $message->bcc('john@johndoe.com', 'John Doe');
        // $message->replyTo('john@johndoe.com', 'John Doe');
        $message->subject('Verifikasi Email-mu dulu yuk!”');
        // $message->priority(3);
        // $message->attach('pathToFile');
    });

        return response()->json(['pesan'=>'Selamat, email-mu sudah terdaftar di Jobhun! Silakan cek email untuk verifikasi']);

    }

    public function verified_akun($code)
    { 
        $regis_user = Registrationuser::where('register_link',$code)->first();

        if(!$regis_user){
            return view('view_gagal_registrasi');
            // return redirect()->route('index')->with(['delete' => 'Maaf Registrasi Link Anda Salah']);
        }

        $user = $regis_user->user_id;
        $user = User::find($user,'id');
        $user->verified_user = 1;
        $user->save();

        return view('view_berhasil_registrasi');

        // return redirect()->route('index')->with(['berhasil' => 'Pesan Berhasil']);

        // return redirect()->route('index');

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
