<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talentpool;
use Validator;
use Illuminate\Support\Facades\Mail;


class TalentpoolController extends Controller
{
    public function add(Request $request)
        {
            $validator = validator::make(
                $request->all(),
                [
                    'full_name' => 'required',
                    'email_address' => 'required',
                    'residence' => 'required',
                    'phone_number' => 'required',
                    'current_age' => 'required',
                    'ability' => 'required',
                    'educational_background' => 'required',
                    'work_position'=> 'required',
                    'about_you' => 'required',
                    'work_experience' => 'required',
                    'current_activity' => 'required',
                    'overworked' => 'required',
                    'choose' => 'required',
                    'upload_cv' => 'required',
                    'photo_url' => 'required',    
                    
                ]
            );
            if ($validator->fails()) {
                //return back()->withErrors($validator)->withInput();
                return response()->json(['message'=> 'gagal tambah talent pool. cek inputan anda', 
                                        'error'=>$validator->getMessageBag()->toArray()],422);
            }

            $talentpool = Talentpool::create($request->all());

            $cv = $talentpool->id.'.'.$request->file('upload_cv')->getClientOriginalExtension();
            $request->file('upload_cv')->move(public_path('image/berkas_cv'),$cv);
            $talentpool->upload_cv = $cv;

            $talentpool->save();

//======================= KIRIM EMAIL ==========================

            $emailtujuan = $talentpool->email_address;
            // $namatujuan = $mediapartner->name;
            $data= ['name_admin' => 'Johana'];

            Mail::send('content.talentpool.email',$data, function ($message) use($emailtujuan) {
                $message->from('jobhun.id@gmail.com', 'Jobhun');
                // $message->sender('john@johndoe.com', 'John Doe');
                $message->to($emailtujuan);
                // $message->cc('john@johndoe.com', 'John Doe');
                // $message->bcc('john@johndoe.com', 'John Doe');
                // $message->replyTo('john@johndoe.com', 'John Doe');
                $message->subject('konfimasi Talent Pool');
                // $message->priority(3);
                // $message->attach('pathToFile');
            });
            
            if($request->ajax()){
                return response()->json(['message'=> 'berhasil tambah Talent Pool' ]);
            }

            return redirect()->route('index')->with('berhasil', '.');
        }
}
