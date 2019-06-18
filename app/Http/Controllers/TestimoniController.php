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
        return view('content.testimoni.table',['daftar_testimoni' => $testimoni]);
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




}
