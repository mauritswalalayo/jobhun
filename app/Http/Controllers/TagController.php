<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Validator;

class TagController extends Controller
{
    //
    public function index ()
    {
        $tag = Tag::paginate(3);
        $first_index = $tag->currentPage() * $tag->perPage() - $tag->perPage() + 1;
        return view('content.tag.table', ['daftar_tag' => $tag, 'first_index' => $first_index]);
    }

//================================================
    public function form ()
    {
        return view('content.tag.form');
    }

//===================================================

    public function add (Request $request)
    {
        $validator = validator::make($request->all(),
        ['name' => 'required']);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $tag = Tag::create($request->all());
        $tag->save();
        return redirect()->route('tag.table');

    }

//=====================================================

    public function edit ($id)
    {
        $tag = Tag::find($id);
        return view('content.tag.form');
    }

    public function update (Request $request, $id)
    {
        $validator = validator::make($request->all(),
        ['name' => 'required']);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $tag = Tag::find($id);
        $tag->update($request->all());

        return redirect()->route('tag.table');
    }
}
