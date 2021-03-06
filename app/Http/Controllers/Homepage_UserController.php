<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;
use App\Post;
use App\Job;

class Homepage_UserController extends Controller
{
    public function index()
    {
        $job = Job::where('job_verified',1)->paginate(5);
        $post = Post::simplepaginate(10);
        $testimoni = Testimoni::simplepaginate(10);
        $first_index = $testimoni->currentPage() * $testimoni->perPage() - $testimoni->perPage() + 1;
        return view('user.content.home.home_user', ['daftar_job' => $job, 'daftar_post' => $post ,'daftar_testimoni' => $testimoni, 'first_index' => $first_index]);
    }

    public function tentang()
    {
        return view('user.content.about.about');
    }

    // Layanan
    public function jch()
    {
        $job = Job::where('job_verified',1)->paginate(5);
        $first_index = $job->currentPage() * $job->perPage() - $job->perPage() + 1;
        return view('user.content.service.jch',['daftar_job' => $job]);
    }

    public function spek_jch($id)
    {
        $job = Job::find($id);
        return view('user.content.service.spek_jch',['job' => $job]);
    }

    public function ja()
    {
        return view('user.content.service.ja');
    }

    public function content_writer()
    {
        return view('user.content.service.content_writer');
    }

    public function graphic_designer()
    {
        return view('user.content.service.graphic_designer');
    }

    public function videographer()
    {
        return view('user.content.service.videographer');
    }

    public function web()
    {
        return view('user.content.service.web');
    }

    public function android()
    {
        return view('user.content.service.android');
    }

    public function ui()
    {
        return view('user.content.service.ui');
    }

    public function copywriter()
    {
        return view('user.content.service.copywriter');
    }

    public function public_speaker()
    {
        return view('user.content.service.public_speaker');
    }

    public function social_media()
    {
        return view('user.content.service.social_media');
    }

    public function startup_founder()
    {
        return view('user.content.service.startup_founder');
    }

    public function media()
    {
        return view('user.content.service.mediapartner');
    }

    public function jtp()
    {
        return view('user.content.service.jtp');
    }

    // Program
    public function ji()
    {
        return view('user.content.program.ji');
    }

    public function jt()
    {
        return view('user.content.program.jt');
    }

    public function jv()
    {
        return view('user.content.program.jv');
    }


    // Blog
    public function ck()
    {
        return view('user.content.blog.ck');
    }

    public function infografik()
    {
        return view('user.content.blog.infografik');
    }

    public function kp()
    {
        return view('user.content.blog.kp');
    }

    public function artikel()
    {
        return view('user.content.blog.artikel');
    }

    public function berita()
    {
        return view('user.content.blog.berita');
    }

    public function ia()
    {
        return view('user.content.blog.ia');
    }

    // Footer
    public function syarat()
    {
        return view('user.content.home.syarat');
    }

    public function kebijakan()
    {
        return view('user.content.home.kebijakan');
    }

    public function berkarier()
    {
        return view('user.content.home.berkarier');
    }
}
