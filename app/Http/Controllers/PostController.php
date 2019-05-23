<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;
use DB;
use App\Tag;

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
        $daftar_tag = DB::table('tags')->get();
        return view('content.post.form', ['tags'=>$daftar_tag]);
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

        $url = str_replace(' ','-',$request->title);

        $post = new Post;
        $post->title = $request->title;
        $post->url = $url;
        $post->content = $request->content;
        $post->save();
       
        return redirect()->route('post.table');
    }

//================================================
    public function edit($id)
    {
       
        $post = post::find($id);
        $daftar_tag = Tag::all();
        //$chosen_tags = $post->tags->pluck('id')->all();
        return view('content.post.form',['editpost' => $post, 'tags'=>$daftar_tag]);
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
