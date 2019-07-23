<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function add (Request $request)
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
            $post->save();
            if($request->hasFile('feature_image')){
            $image = $post->id.'.'.$request->file('feature_image')->getClientOriginalExtension();
            $request->file('feature_image')->move(public_path('image/post'),$image);
            $post->feature_image = $image;
            $post->save();
            }
    
            $post->tags()->sync($request->tags);
    
            return redirect()->route('post.table');
        }
}
