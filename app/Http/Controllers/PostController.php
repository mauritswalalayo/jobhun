<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;

class PostController extends Controller
{
//================================================
    public function index()
    {
        $post = Post::paginate(2);
        $first_index = $post->currentPage() * $post->perPage() - $post->perPage() + 1;
        return view('content.post.table',['daftar_post' => $post, 'first_index' => $first_index]);
    }

//================================================
    public function form()
    {
        return view('content.post.form');
    }

//============================================
    public function add(Request $request)
    {
        $validator = validator::make(
            $request->all(),
            [
                'title' => 'required',
                'content' => 'required',
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = post::create($request->all());
        $user->save();
        return redirect()->route('post.table');
    }

//================================================
    public function edit($id)
    {
        $post = post::find($id);
        return view('content.post.form',['editpost' => $post]);
    }

//================================================
    public function update(Request $request, $id)
    {
        $validator = validator::make(
            $request->all(),
            [
                'title' => 'required',
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
        $post = post::find($id);
        $post->delete();
        return redirect()->route('post.table');
    }
}
