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

    public function view_loker ($verified_status)
    {
        $job = Job::where('verified_job',$verified_status)->paginate(5);
        $first_index = $job->currentPage() * $job->perPage() - $job->perPage() + 1;
        if($verified_status == 0)
            return view('content.loker.table',['datajob' => $job, 'first_index' => $first_index]);
        else
            return view('content.loker.table_terverifikasi',['datajob' => $job, 'first_index' => $first_index]);

    }

    public function view_mediapartner ()
    {
        $mediapartner = Mediapartner::paginate(10);
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
                    'job_service' => 'required',
                    'job_company_name' => 'required',
                    'job_company_tagline'=> 'required',
                    'job_company_description' => 'required',
                    'job_company_address' => 'required',
                    'job_company_website'=> 'required',
                    'job_company_email' => 'required',
                    'job_company_phone' => 'required',
                    'job_position_sought'=> 'required',
                    'job_type' => 'required',
                    'job_description'=> 'required',
                    'job_recruit_process' => 'required',

                    // 'logo_url' => 'required',
                    'job_transfer_url'=> 'required',
                    
                ]
            );
            if ($validator->fails()) {
                return response()->json(['message'=> 'gagal tambah loker. cek inputan anda', 
                                        'error'=>$validator->getMessageBag()->toArray()],422); 
            }
/*
            $job = Job::create($request->all());

            $job_transfer_url = $job->id.'.'.$request->file('job_transfer_url')->getClientOriginalExtension();
            $request->file('job_transfer_url')->move(public_path('image/bukti_transfer'),$job_transfer_url);
            $job->job_transfer_url = $job_transfer_url;
            
            if($request->hasFile('job_poster_url')){
                $job_poster_url = $job->id.'.'.$request->file('job_poster_url')->getClientOriginalExtension();
                $request->file('job_poster_url')->move(public_path('image/poster'),$job_poster_url);
                $job->job_poster_url = $job_poster_url;
            }
            if($request->hasFile('job_logo_url')){
            $job_logo_url = $job->id.'.'.$request->file('job_logo_url')->getClientOriginalExtension();
            $request->file('job_logo_url')->move(public_path('image/logo_perusahaan'),$job_logo_url);
            $job->job_logo_url = $job_logo_url;
                
            };
            

            $job->save();

//=================================== email =======================================================
            $destinationemail = $job->job_company_email;
            $destionationname = 'Maurits Oces';
            $data = ['name' => 'Johana','body' => 'ada Loker baru dari '.$job->job_company_name];

            Mail::send('content.email.email', $data, function ($message) use($destinationemail,$destionationname) {
                $message->from('jobhun.id@gmail.com', 'Johana');
                // $message->sender('john@johndoe.com', 'John Doe');
                $message->to($destinationemail, $destionationname);
                // $message->cc('john@johndoe.com', 'John Doe');
                // $message->bcc('john@johndoe.com', 'John Doe');
                // $message->replyTo('john@johndoe.com', 'John Doe');
                $message->subject('Loker Baru');
                // $message->priority(3);
                // $message->attach('pathToFile');
            });

            if($request->ajax()){
                    return response()->json(['message'=> 'berhasil tambah loker' ]);                    

            }
        
            return redirect()->route('index')->with('berhasil', '.');
            */

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
    $validator = validator::make(
        $request->all(),
        [
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
        ]
    );
    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    $loker = Job::find($id);


    $loker->update($request->all());
    $loker->verified_job =1;

    $loker->save();

//======================================= Pesan verifikasi=============================================

    $emailtujuan = $loker->company_email;
    $namatujuan = $loker->company_name;
    $data = ['name' => $namatujuan];

    Mail::send('content.email.email_verified', $data, function ($message) use($emailtujuan,$namatujuan) {
        $message->from('jobhun.id@gmail.com', 'Johana');
        // $message->sender('john@johndoe.com', 'John Doe');
        $message->to($emailtujuan, $namatujuan);
        // $message->cc('john@johndoe.com', 'John Doe');
        // $message->bcc('john@johndoe.com', 'John Doe');
        // $message->replyTo('john@johndoe.com', 'John Doe');
        $message->subject('Loker Verified');
        // $message->priority(3);
        // $message->attach('pathToFile');
    });


    return redirect()->route('loker.table',['verified_status'=>0]);

    

}

//======================================= Pesan Tidak Terverifikasi ==============================================

public function not_verified($id)
{
    $loker = Job::findOrFail($id);

    $emailtujuan = $loker->company_email;
    $namatujuan = $loker->company_name;
    $data = ['name' => $namatujuan];

    Mail::send('content.email.email_notverified', $data, function ($message) use($emailtujuan,$namatujuan) {
        $message->from('jobhun.id@gmail.com', 'Johana');
        // $message->sender('john@johndoe.com', 'John Doe');
        $message->to($emailtujuan, $namatujuan);
        // $message->cc('john@johndoe.com', 'John Doe');
        // $message->bcc('john@johndoe.com', 'John Doe');
        // $message->replyTo('john@johndoe.com', 'John Doe');
        $message->subject('Loker Tidak Diterima');
        // $message->priority(3);
        // $message->attach('pathToFile');
    });

    $loker->delete();


    return redirect()->route('loker.table',['verified_status'=>0]);

}

//========================================== Delete Loker =======================================================

        public function delete($id)
        {
            $job = Job::findOrFail($id);
            $job->delete();
            return redirect()->route('loker.table',['verified_status'=>0]);        
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
                    'email'=>'required',
                    'event_name' => 'required',
                    'event_organizer'=> 'required',
                    'contact_event' => 'required',
                    'event_date' => 'required',
                    'event_venue'=> 'required',
                    'event_details' => 'required',
                    
                ]
            );
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $mediapartner = Mediapartner::create($request->all());

            // $image_bukti = $mediapartner->id.'.'.$request->file('evidence_transfer')->getClientOriginalExtension();
            // $request->file('evidence_transfer')->move(public_path('image/bukti_transfer'),$image_bukti);
            // $mediapartner->evidence_transfer = $image_bukti;

            $mediapartner->save();

//======================= KIRIM EMAIL ==========================

            $emailtujuan = $mediapartner->email;
            // $namatujuan = $mediapartner->name;
            $data= ['name_admin' => 'Johana'];

            Mail::send('content.mediapartner.email',$data, function ($message) use($emailtujuan) {
                $message->from('jobhun.id@gmail.com', 'Jobhun');
                // $message->sender('john@johndoe.com', 'John Doe');
                $message->to($emailtujuan);
                // $message->cc('john@johndoe.com', 'John Doe');
                // $message->bcc('john@johndoe.com', 'John Doe');
                // $message->replyTo('john@johndoe.com', 'John Doe');
                $message->subject('konfimasi Media Partner');
                // $message->priority(3);
                // $message->attach('pathToFile');
            });
        
            return redirect()->route('index')->with('berhasil', '.');
        }

//################################ DELETE ############################################

        public function delete_mediapartner($id)
        {
            $mediapartner = Mediapartner::findOrFail($id);
            $mediapartner->delete();
            return redirect()->route('mediapartner.table');        
        }

//############################## VERIFIED MEDIA PARTNER ############################
        public function verified_mediapartner($id)
        {
            $mediapartner = Mediapartner::findOrfail($id);
            return view('content.mediapartner.verified',['verified' => $mediapartner]);
        }

//============================================== search loker =====================================================
        public function cari (Request $request)
        {
            if($request->ajax())

                $cari = $request->get('datanya');

                if($cari)
                {
                    $data_cari = Job::where('company_name' , 'like', '%'.$cari.'%')->paginate(5);

                    return response()->json(['data'=> $data_cari]);                    

                    // echo json_encode($data);
                }

                else
                {
                    return response()->json(['pesan'=>'Data tidak tersedia'],401);
                }
            

            return response()->json(['pesan'=>'Kesalahan'],401);

        

            // $loker = Job::where('company_name', 'like', '%'.$cari.'%')->paginate(5);

            // return view('user.content.home.home_user',['loker'=> $loker]);
            
            // ->orWhere('company_name' , 'like', '%'.$cari.'%')
            // ->orWhere('company_tagline' , 'like', '%'.$cari.'%')
            // ->orWhere('company_address' , 'like', '%'.$cari.'%')
            // ->orWhere('position_sought' , 'like', '%'.$cari.'%')
            // ->orWhere('type_work' , 'like', '%'.$cari.'%')
        }

    public function apiCareerHub($per_page){
        $jobs = Job::where('verified_job',1)->orderBy('created_at','desc')->paginate($per_page);
        return response()->json(["jobs"=>$jobs]);
    }

}

