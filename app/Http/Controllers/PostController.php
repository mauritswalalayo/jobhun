<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //untuk konek ke model(database)
use App\User;
use App\Tag;
use App\Author;
use Validator;


class PostController extends Controller
{
    public function index ()
    {
        $post = Post::paginate(3);
        $first_index = $post->currentPage() * $post->perPage() - $post->perPage() + 1;
        return view('content/post',['datapost' => $post, 'first_index' => $first_index  ]);
    }

    public function add() {
    $daftar_tag = Tag::all();    
    return view('content/tag/tambahpost',['namaku' => 'oces', 'daftar_tag' => $daftar_tag  ]);

   }

   public function storepost (Request $request)
   {

        $validator = Validator::make($request->all(),
            ['title' => 'required', 'content' => 'required']
        );
    
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
   
     
        /*$datapost  = Post::Create($request->all());
        $datapost->save();
        $datapost->author()->create($request->all());*/

        $url = str_replace (' ',"-",$request->title);
        $author = Author::where('user_id',1)->first();

        //$daftaruser = User::where('sex','cowo')->get();

        $post = new Post;
        $post->title = $request->title;
        $post->url = $url;
        $post->content = $request->content;
        $post->author_id = $author->id; 
        $post->save();
        
        $post->tags()->sync($request->tags);

        return redirect()->route('post');
    
    }
   
    public function editpost ($id)
    {
        
        $post = Post::find($id);
        $daftar_tag = Tag::all();
        $chosen_tags = $post->tags->pluck('id')->all();
        return view('/content/tag/tambahpost',['post' => $post, 'daftar_tag' => $daftar_tag, 'chosen_tags'=>$chosen_tags]);
    }
    
    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
        $post->fill($request->all())->save();

        $post->tags()->sync($request->tags);
        return redirect()->route('post');
    }

}