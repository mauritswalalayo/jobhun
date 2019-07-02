<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;

class Homepage_UserController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::paginate();
        $first_index = $testimoni->currentPage() * $testimoni->perPage() - $testimoni->perPage() + 1;
        return view('user.content.home.home_user',['daftar_testimoni' => $testimoni, 'first_index' => $first_index]);
    }

    public function tentang()
    {
        return view('user.content.about.about');
    }

    // Layanan
    public function jch()
    {
        return view('user.content.service.jch');
    }

    public function spek_jch()
    {
        return view('user.content.service.spek_jch');
    }

    public function ja()
    {
        return view('user.content.service.ja');
    }

    public function spek_ja()
    {
        return view('user.content.service.spek_ja');
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
}
