<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\Auth;

use Validator;

class PostController extends Controller
{
//================================================
    public function index()
    {
        $post = Post::paginate(10);
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
                'criteria'=> 'required',
                
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $url = str_replace(' ','-',$request->title);


        $post = new Post;
        $post->criteria = $request->criteria;
        $post->title = $request->title;
        $post->url = $url;
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;
        // $post->save();

        $image = $post->id.''.$request->file('feature_image')->getClientOriginalExtension();
        $request->file('feature_image')->move(public_path('image/post'),$image);
        $post->feature_image = $image;
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

//=========================================================
    public function delete($id)
    {
        $post = post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.table');
    }

    //=================================================== BLOG ===============================================

    public function blog ($filter)
    {
        if ($filter=='blog')
        {
            $daftar_post = Post::where('criteria', 'Cerita-Karier')->orWhere('criteria', 'Infografik')->orWhere('criteria', 'Karierpedia')
            ->orWhere('criteria', 'Artikel')->orWhere('criteria', 'Berita-Acara')->orWhere('criteria', 'Info-Acara')->simplePaginate(10);
        }
        else {
            $daftar_post = Post::where ('criteria', $filter)->simplePaginate();
        }

        return view('user.content.post.list',['daftar_post'=>$daftar_post, 'filter' => $filter]);
    }

    public function show ($url)
    {
        $post = Post::where('url',$url)->first();
        return view('user.content.post.show',['post'=>$post]);
        
    }

//==================================================== PROGRAM ==================================================

    public function program ($filter)
    {
        if ($filter=='program')
        {
            $daftar_post = Post::where('criteria', 'Jobhun-Internship')->orWhere('criteria', 'Jobhun-Talks')
            ->orWhere('criteria', 'Jobhun-Internship')->simplePaginate(10);
        }
        else {
            $daftar_post = Post::where ('criteria', $filter)->simplePaginate();
        }

        return view('user.content.post.list',['daftar_post'=>$daftar_post, 'filter' => $filter]);
    }    
}
