<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Mediapartner;
use Validator;

class JobController extends Controller
{

//=========================================== Post Job ======================================================

    public function view ()
    {
        $job = Job::paginate(3);
        $first_index = $job->currentPage() * $job->perPage() - $job->perPage() + 1;
        return view('content.loker.table',['datajob' => $job, 'first_index' => $first_index]);
    }

    public function form_reguler ()
    {
        return view('user.content.postingjob.formposting');
    }

    public function form_premium ()
    {
        return view('user.content.postingjob.formpostingpremium');
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

                    // 'logo_url' => 'required',
                    'evidence_transfer'=> 'required',
                    
                ]
            );
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $job = Job::create($request->all());
    
            // $job = new Job;
            // $job->type_loker = $request->type_loker;
            // $job->company_name = $request->company_name;
            // $job->company_tagline = $request->company_tagline;
            // $job->description_company = $request->description_company;
            // $job->company_address = $request->company_address;
            // $job->company_website = $request->company_website;
            // $job->company_email = $request->company_email;
            // $job->company_phone = $request->company_phone;
            // $job->position_sought = $request->position_sought;
            // $job->type_work = $request->type_work;
            // $job->description_job = $request->description_job;
            // $job->recruit_process = $request->recruit_process;
            // $job->save();

            

            $image_bukti = $job->id.'.'.$request->file('evidence_transfer')->getClientOriginalExtension();
            $request->file('evidence_transfer')->move(public_path('image/bukti_transfer'),$image_bukti);
            $job->evidence_transfer = $image_bukti;
            
            if($request->hasFile('upload_poster')){
                $image_poster = $job->id.'.'.$request->file('upload_poster')->getClientOriginalExtension();
                $request->file('upload_poster')->move(public_path('image/poster'),$image_poster);
                $job->upload_poster = $image_poster;
            }
            elseif($request->hasFile('logo_url')){
            $image_logo = $job->id.'.'.$request->file('logo_url')->getClientOriginalExtension();
            $request->file('logo_url')->move(public_path('image/logo_perusahaan'),$image_logo);
            $job->logo_url = $image_logo;
                
            }
            

            $job->save();
        
            return redirect()->route('index')->with('berhasil', '.');

        }

        public function verified($id)
        {
            $job = Job::findOrfail($id);
            return view('content.loker.verified',['verified' => $job]);
        }

        public function delete($id)
        {
            $job = Job::findOrFail($id);
            $job->delete();
            return redirect()->route('loker.table');        
        }

//========================================= Media Partner ===============================================================

        public function index_media_partner ()
        {
            return view('user.content.mediapartner.formmediapartner');
        }

        public function media_partner(Request $request)
        {
            $validator = validator::make(
                $request->all(),
                [
                    'type_mediapartner' => 'required',
                    'event_name' => 'required',
                    'event_organizer'=> 'required',
                    'contact_event' => 'required',
                    'event_date' => 'required',
                    'event_venue'=> 'required',
                    'event_details' => 'required',
                    'evidence_transfer' => 'required',
                    
                ]
            );
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $mediapartner = Mediapartner::create($request->all());


        }
}
