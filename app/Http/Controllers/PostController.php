<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;

class PostController extends Controller
{
//================================================
    public function index(){
        return view('content.post.table');
    }

//================================================
    public function form(){
        return view('content.post.form');
    }

//================================================
    public function add(Request $request)
    {
        $validator = validator::make(
            $request->all(),
            [
                'title' => 'required',
                'url' => 'required',
                'content' => 'required',
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $post = Post::create($request->all());
        $post->save();

        return redirect()->route('post.table');
    }

//================================================
    public function edit($id)
    {
        $post = Post::find(id);
        return view('content.post.form',['editpost' => $post]);
    }

//================================================
    public function update(Request $request, $id)
    {
        $validator = validator::make(
            $request->all(),
            [
                'title' => 'required',
                'url' => 'required',
                'content' => 'required',
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $post = Post::find($id);
        $post->update ($request->all());
        return redirect()->route('post.table');
    }

//================================================
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.table');
    }
}
