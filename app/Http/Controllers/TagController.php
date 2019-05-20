<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag; //untuk konek ke model(database)

use Validator;

class TagController extends Controller
{
    public function index() {
        $tag =  Tag::paginate(3);
        //kita buat variable first index (terserah namanya apa sih)
        //lalu firstindex = (halaman yg sedan diakses x 1 halaman berapa row) - 1 halaman berapa row + 1
        //contoh skrg halaman 2, 1 halaman 3 row. berarti (2*3)-3+1 = 4
        //jadi kalau saat ini akses halaman 2, maka first indexnya = 4, 
        //angka itu kita kirim ke view sbg first index
        $first_index = $tag->currentPage() * $tag->perPage() - $tag->perPage() + 1;
        return view('content/tag',['data' => $tag, 'first_index' => $first_index ]);
    }

    public function add() {
        
    return view('content/tag/tambah',['namaku' => 'oces' ]);
        
    }

    // ini untuk merequest data ke server
    // variabel $data boleh sembarang (bebas)

    public function store(Request $request)
    { 
        $validator = Validator::make($request->all(),
            ['name' => 'required|max:100']
        );
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $data = Tag::create($request->all());
        $data->save();

        return redirect()->route('tag')->with('berhasil', 'Tag Berhasil Ditambahkan'); 
        // untuk menampilan data yang sudah di resquest dari server dan di kirim ke route tag
        // dan kemudian akan ditampilkan                        
    }


    public function edit($id)
    {
        $datatag = Tag::find($id);
        return view('content/tag/tambah',['tag' => $datatag]);
    }


    public function update(Request $request, $id)
    {
        $datatag = Tag::find($id);
        $datatag->update($request->all());

        return redirect()->route('tag')->with('update','Update Tag Berhasil');
    }

    public function delete($id)
    {
        $datatag = Tag::find($id);
        $datatag->delete();

        return redirect()->route('tag')->with('delete', 'Delete Tag Berhasil');
    }
}
