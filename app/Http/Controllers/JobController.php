<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Mediapartner;
use Validator;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{

//=========================================== Post Job ======================================================

    public function view_loker ()
    {
        $job = Job::paginate(3);
        $first_index = $job->currentPage() * $job->perPage() - $job->perPage() + 1;
        return view('content.loker.table',['datajob' => $job, 'first_index' => $first_index]);
    }

    public function view_mediapartner ()
    {
        $mediapartner = Mediapartner::paginate(3);
        $first_index = $mediapartner->currentPage() * $mediapartner->perPage() - $mediapartner->perPage() + 1;
        return view('content.mediapartner.table',['data_mediapartner' => $mediapartner, 'first_index' => $first_index]);
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

//=================================== email =======================================================
            $emailtujuan = 'walalayooces@gmail.com';
            $namatujuan = 'Maurits Oces';
            $data = ['name' => 'Johana','body' => 'ada loker baru dari '.$job->company_name];

            Mail::send('content.email.verifiedjob', $data, function ($message) use($emailtujuan,$namatujuan) {
                $message->from('jobhun.id@gmail.com', 'Johana');
                // $message->sender('john@johndoe.com', 'John Doe');
                $message->to($emailtujuan, $namatujuan);
                // $message->cc('john@johndoe.com', 'John Doe');
                // $message->bcc('john@johndoe.com', 'John Doe');
                // $message->replyTo('john@johndoe.com', 'John Doe');
                $message->subject('Loker Baru');
                // $message->priority(3);
                // $message->attach('pathToFile');
            });
        
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

            $image_bukti = $mediapartner->id.'.'.$request->file('evidence_transfer')->getClientOriginalExtension();
            $request->file('evidence_transfer')->move(public_path('image/bukti_transfer'),$image_bukti);
            $mediapartner->evidence_transfer = $image_bukti;

            $mediapartner->save();
        
            return redirect()->route('index')->with('berhasil', '.');
        }

        public function delete_mediapartner($id)
        {
            $mediapartner = Mediapartner::findOrFail($id);
            $mediapartner->delete();
            return redirect()->route('mediapartner.table');        
        }

        public function verified_mediapartner($id)
        {
            $mediapartner = Mediapartner::findOrfail($id);
            return view('content.mediapartner.verified',['verified' => $mediapartner]);
        }

//=============================================== Jobhun Academy ====================================================

        public function form_jobhun_academy ()
        {
            return view('user.content.jobhunacademy.formjobhunacademy');
        }
}

