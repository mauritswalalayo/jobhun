<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Jobhunacademy;
use Illuminate\Support\Facades\Mail;


class JobhunAcademyController extends Controller
{
    public function form_jobhun_academy ()
        {
            return view('user.content.jobhunacademy.formjobhunacademy');
        }

    public function add (Request $request)
        {
            $validator = validator::make(
                $request->all(),
                [
                    'name' => 'required',
                    'class' => 'required',
                    'email_address'=> 'required',
                    'phone' => 'required',
                    'evidence_transfer'=> 'required',
                    'payment_status' => 'required',
                    'information' => 'required',

                ]
            );
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $jobhunacademy = Jobhunacademy::create($request->all());

            $image_bukti = $jobhunacademy->id.'.'.$request->file('evidence_transfer')->getClientOriginalExtension();
            $request->file('evidence_transfer')->move(public_path('image/jobhun_academy/bukti_transfer'),$image_bukti);
            $jobhunacademy->evidence_transfer = $image_bukti;

            $jobhunacademy->save();

//================================================= KIRIM PESAN KE USER =====================================================

            $emailtujuan = $jobhunacademy->email_address;
            $namatujuan = $jobhunacademy->name;
            $no_telp = $jobhunacademy->phone;
            $kelas = $jobhunacademy->class;

            $date = $jobhunacademy->created_at->format('d-m-Y');
            $nomorkwitansi = $jobhunacademy->id.'/'.$date;
            
            $data = ['name' => $namatujuan, 'no_telp' => $no_telp, 'kelas' => $kelas, 'date' => $date, 
                    'nomor_kwitansi' => $nomorkwitansi];
                    
        
            Mail::send('content.email.kwitansi_jobhun', $data, function ($message) use($emailtujuan,$namatujuan) {
                $message->from('jobhun.id@gmail.com', 'Jobhun');
                // $message->sender('john@johndoe.com', 'John Doe');
                $message->to($emailtujuan, $namatujuan);
                // $message->cc('john@johndoe.com', 'John Doe');
                // $message->bcc('john@johndoe.com', 'John Doe');
                // $message->replyTo('john@johndoe.com', 'John Doe');
                $message->subject('Jobhun Academy');
                // $message->priority(3);
                // $message->attach('pathToFile');
            });

//================================================== KIRIM PESAN KE ADMIN ====================================================

            $emailtujuan_keadmin = 'walalayooces@gmail.com';
            $namatujuan_keadmin = 'Maurits Oces';
            $data_keadmin = ['name_admin' => 'Johana','body_admin' => $jobhunacademy->name.' telah mendaftar di Jobhun Academy'];

            Mail::send('content.email.ver_jobhunacademy', $data_keadmin, function ($message) use($emailtujuan_keadmin,$namatujuan_keadmin) {
                $message->from('jobhun.id@gmail.com', 'Johana');
                // $message->sender('john@johndoe.com', 'John Doe');
                $message->to($emailtujuan_keadmin, $namatujuan_keadmin);
                // $message->cc('john@johndoe.com', 'John Doe');
                // $message->bcc('john@johndoe.com', 'John Doe');
                // $message->replyTo('john@johndoe.com', 'John Doe');
                $message->subject('Jobhun Academy Baru');
                // $message->priority(3);
                // $message->attach('pathToFile');
            });

            return redirect()->route('index')->with('berhasil', '.');

        }

//======================================= VIEW ADMIN JOBHUN ACADEMY ===============================================

public function view_jobhunacademy ($payment_status)
    {
        $jobhunacademy = Job::where('payment_status',$payment_status)->paginate(5);
        $first_index = $jobhunacademy->currentPage() * $jobhunacademy->perPage() - $jobhunacademy->perPage() + 1;
        if($payment_status == 0)
            return view('content.loker.table',['datajob' => $jobhunacademy, 'first_index' => $first_index]);
        else
            return view('content.loker.table_terverifikasi',['datajob' => $jobhunacademy, 'first_index' => $first_index]);

    }
}
