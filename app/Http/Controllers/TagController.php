<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use validator;

class TagController extends Controller
{
    //
    public function index ()
    {
        return view('content.tag.table');
    }

    public function form ()
    {
        return view('content.tag.form');
    }

//===================================================

    public function add (Request $request)
    {
        $validator = validator::make($request->all(),
        [
            'name' => 'required'
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $tag = Tag::create($request->all());
        $tag->save();
        return redirect()->route('tag.table');

    }

//=====================================================

    public function edit ()
    {
        
    }
}
