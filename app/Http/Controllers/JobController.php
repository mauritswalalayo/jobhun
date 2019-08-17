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
        $job = Job::paginate(10);
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
            $emailtujuan = $job->company_email;
            $namatujuan = 'Maurits Oces';
            $data = ['name' => 'Johana','body' => 'ada Loker baru dari '.$job->company_name];

            Mail::send('content.email.email', $data, function ($message) use($emailtujuan,$namatujuan) {
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
//=========================================== form verified ===============================================
        public function verified($id)
        {
            $job = Job::findOrfail($id);
            return view('content.loker.verified',['verified' => $job]);
        }

//=========================================== verified loker ======================================================

public function verified_loker(Request $request, $id)
{
    // $validator = validator::make(
    //     $request->all(),
    //     [
    //         'company_name' => 'required',
    //         'company_tagline'=> 'required',
    //         'description_company' => 'required',
    //         'company_address' => 'required',
    //         'company_website'=> 'required',
    //         'company_email' => 'required',
    //         'company_phone' => 'required',
    //         'position_sought'=> 'required',
    //         'type_work' => 'required',
    //         'description_job'=> 'required',
    //         'recruit_process' => 'required',
    //     ]
    // );
    // if ($validator->fails()) {
    //     return back()->withErrors($validator)->withInput();
    // }

    $loker = Job::find($id);


    // $loker->update($request->all());

    // $loker = str_replace('0','1',$request->verified_job);

    

    $loker->type_loker = ($request->type_loker);
    $loker->company_name = ($request->company_name);
    $loker->company_tagline = ($request->company_tagline);
    $loker->description_company = ($request->description_company);
    $loker->company_address = ($request->company_address);
    $loker->company_website = ($request->company_website);
    $loker->company_email = ($request->company_email);
    $loker->company_phone = ($request->company_phone);
    $loker->position_sought = ($request->position_sought);
    $loker->type_work = ($request->type_work);
    $loker->description_job = ($request->description_job);
    $loker->recruit_process = ($request->recruit_process);

    $loker->logo_url = ($request->logo_url);
    $loker->upload_poster = ($request->upload_poster);
    $loker->evidence_transfer = ($request->evidence_transfer);
    $loker->verified_job = '1';

    $loker->save();


    return redirect()->route('loker.table');

    

}


//========================================== Delete Loker =======================================================

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

