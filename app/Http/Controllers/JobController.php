<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function index ()
    {
        
        return view('user.content.postingjob.formposting');
    }

    public function indextype ()
    {
        
        return view('user.content.postingjob.typejob');
    }

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
                    'recruit_process' => 'required',

                    'logo_url' => 'required',
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
            $post->save();

            $image_logo = $post->id.'.'.$request->file('logo_url')->getClientOriginalExtension();
            $request->file('logo_url')->move(public_path('image/logo_perusahaan'),$image_logo  );
            $post->logo_url = $image_logo;

            $image_bukti = $post->id.'.'.$request->file('evidence_transfer')->getClientOriginalExtension();
            $request->file('evidence_transfer')->move(public_path('image/bukti_transfer'),$image_bukti);
            $post->evidence_transfer = $image_bukti;
            
            if($request->hasFile('upload_poster')){
                $image_poster = $post->id.'.'.$request->file('upload_poster')->getClientOriginalExtension();
                $request->file('upload_poster')->move(public_path('image/poster'),$image_poster);
                $post->upload_poster = $image_poster;
            }

            $post->save();
        
            return redirect()->route('post.table');
        }
}
