<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collaborate;

class CollaborateController extends Controller
{

    public function index()
    {
        $collaborate = Collaborate::paginate(3);
        $first_index = $collaborate->currentPage() * $collaborate->perPage() - $collaborate->perPage() + 1;
        return view('content.collaborate.table',['datacollaborate' => $collaborate, 'first_index' => $first_index]);
    }
 
    public function form ()
    {
        return view ('content.collaborate.form');
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
        $collaborate = Collaborate::find($id);
        return view('content.collaborate.form',['editcollaborate'=> $collaborate]);
    }

}
