<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;
use Validator;

class TestimoniController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $testimoni = Testimoni::paginate(3);
        $first_index = $testimoni->currentPage() * $testimoni->perPage() - $testimoni->perPage() + 1;
        return view('content.testimoni.table',['daftar_testimoni' => $testimoni, 'first_index' => $first_index]);
    }

    public function form ()
    {
        return view ('content.testimoni.form');
    }

    public function add (Request $request)
    {
        $validator = validator::make($request->all(),
        ['name' => 'required',
        'profesi' => 'required',
        'foto' => 'required|image|mimes:jpeg,png,jpg|max:1000',
        'testimoni'=>'required']);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $testimoni = Testimoni::create($request->all());
        $image = $testimoni->id.''.$request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->move(public_path('image/testimoni'),$image);
        $testimoni->foto = $image;
        $testimoni->save();
        return redirect()->route('testimoni.table');
    }

    public function delete ($id)
    {
        $testimoni = testimoni::find($id);
        $testimoni->delete();

        return redirect()->route('testimoni.table');

    }

    public function edit ($id)
    {
        $testimoni = Testimoni::find($id);
        return view('content.testimoni.form', ['edittestimoni' => $testimoni]);
    }

    public function update (Request $request, $id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->update($request->all());
        $testimoni->save();
        return redirect()->route('testimoni.table');
    }
}
