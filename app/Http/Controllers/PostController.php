<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\User;
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
        $daftar_tag = Tag::all();
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
        $user = User::where('id',2)->first();


        $post = new Post;
        $post->title = $request->title;
        $post->url = $url;
        $post->content = $request->content;
        $post->user_id = $user->id;
        $post->save();

        $post->tags()->sync($request->tags);

        return redirect()->route('post.table');
    }

//================================================
    public function edit($id)
    {

        $post = Post::findOrFail($id);
        $daftar_tag = Tag::all();
        $chosen_tags = $post->tags->pluck('id')->all();
        return view('content.post.form',['editpost' => $post, 'tags'=>$daftar_tag,
        'chosen_tags' => $chosen_tags]);
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

        // $post = Post::findOrFail($id);
        // $post->fill($request->all())->save();
        $url = str_replace(' ','-',$request->title);

        $post = Post::findOrFail($id);
        $post->title = ($request->title);
        $post->url = $url;
        $post->content = ($request->content);
        $post->save();

        $post->tags()->sync($request->tags);
        return redirect()->route('post.table');
    }

//================================================
    public function delete($id)
    {
        $post = post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.table');
    }
}
