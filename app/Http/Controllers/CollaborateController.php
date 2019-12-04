<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collaborate;

class CollaborateController extends Controller
{

    public function index()
    {
        $datacollaborate = Collaborate::paginate(3);
        $first_index = $datacollaborate->currentPage() * $datacollaborate->perPage() - $datacollaborate->perPage() + 1;
        return view('back.content.collaborate.table', compact('datacollaborate','first_index'));
    }

    public function form ()
    {
        return view ('back.content.collaborate.form');
    }

    public function add (Request $request)
    {
        $collaborate = Collaborate::create($request->all());
        $collaborate->save();

        return redirect()->route('collaborate.table');
    }

    public function delete ($id)
    {
        $collaborate = Collaborate::find($id);
        $collaborate->delete();

        return redirect()->route('collaborate.table');
    }

    public function edit ($id)
    {
        $editcollaborate = Collaborate::find($id);
        return view('back.content.collaborate.form', compact('editcollaborate'));
    }

    public function update (Request $request, $id)
    {
        $collaborate = Collaborate::find($id);
        $collaborate->update($request->all());
        $collaborate->save();
        return redirect()->route('collaborate.table');
    }

}
