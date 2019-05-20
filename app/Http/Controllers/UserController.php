<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Author;
use DB;
use Symfony\Component\Routing\Router;

use Validator;

class UserController extends Controller

{
    public function index() {
        //$user = DB::table('users')->select('users.*','authors.education')->join('authors','users.id','=','authors.user_id')->paginate(3);
        
        $user = User::paginate(3);
        $first_index = $user->currentPage() * $user->perPage() - $user->perPage() + 1;
        return view('content/user',['namaku' => $user, 'first_index' => $first_index]);
    
    }
    
    public function add() {
        
         return view('content/tag/tambahuser',['namaku' => 'oces' ]);
    }

    public function storeuser(Request $request){ 

        // $dataku = new User ;
        // $dataku->name = $request->name;
        // $dataku->phone = $request->phone;
        // $dataku->sex = $request->sex;
        // $dataku->email = $request->email;
        // User::create($request->all());

        $validator = Validator::make($request->all(),
            ['name' => 'required|max:191', 'email' => 'required|max:191|unique:users,email', 
            'sex' => 'required', 'phone' => 'required']
        );
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        /*
        $data =['name' => $request->name, 
                'email' => $request->email, 
                'sex' => $request->sex, 
                'phone' => $request->phone,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'password' => bcrypt('12345')];
        
        DB::table('users')->insert($data);

        $user = DB::table('users')->where('email',$request->email)->first();

        $dataauthor = ['education' => $request->education,
                       'user_id' => $user->id];
                       
        DB::table('authors')->insert($dataauthor);
        */

        $user  = User::Create($request->all());
        $user->password = bcrypt('12345');
        $user->save();

        $user->author()->create($request->all());


    return redirect()->route('user')->with('user', 'User Berhasil Ditambahkan');
    }

    public function edit($id){
        $datauser = User::find($id);
        return view('/content/tag/tambahuser',['user' => $datauser]);
    }

    public function update(Request $request, $id){

        $validator = Validator::make($request->all(),
            ['name' => 'required|max:191', 'email' => 'required|max:191', 
            'sex' => 'required', 'phone' => 'required', 'education' => 'required']
        );

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        
        $datauser = User::find($id);
        $datauser->update ($request->all());
        $datauser->author->education = $request->education;
        $datauser->author->save();
        return redirect()->route('user')->with('update','Update User Berhasil');
    }

    public function delete($id){
        
        // User::find($id)->delete();
        // Author::where('user_id',$id)->delete();
        $user = User::find($id);
        $user->author()->delete();
        $user->delete();

        return redirect()->route('user')->with('delete', 'Delete User Berhasil');
    }

    public function apalhobos()
    {

    }
}