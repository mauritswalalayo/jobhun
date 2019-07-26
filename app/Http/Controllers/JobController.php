<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function add (Request $request)
        {
            $validator = validator::make(
                $request->all(),
                [
                    'type_loker' => 'required',
                    'company_name' => 'required',
                    'company_tagline'=> 'required',
                    'description_company' => 'required',
                    'company_address' => 'required',
                    'company_website'=> 'required',
                    'company_email' => 'required',
                    'company_phone' => 'required',
                    'position_sought'=> 'required',
                    'type_work' => 'required',
                    'description_job'=> 'required',
                    'drecruit_process' => 'required',

                    'logo_url' => 'required',
                    'upload_poster'=> 'required',
                    'evidence_transfer'=> 'required',
                    
                ]
            );
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
    
            $post = new Job;
            $post->type_loker = $request->type_loker;
            $post->company_name = $request->company_name;
            $post->company_tagline = $request->company_tagline;
            $post->description_company = $request->description_company;
            $post->company_address = $request->company_address;
            $post->company_website = $request->company_website;
            $post->company_email = $request->company_email;
            $post->company_phone = $request->company_phone;
            $post->position_sought = $request->position_sought;
            $post->type_work = $request->type_work;
            $post->description_job = $request->description_job;
            $post->recruit_process = $request->recruit_process;


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
