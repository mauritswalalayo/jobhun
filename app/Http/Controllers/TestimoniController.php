<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;

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
        $testimoni = Testimoni::create($request->all());
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
