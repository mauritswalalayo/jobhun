@extends('user.master')

@section('content')

<section>
    <div class="block gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 column">
                    <div class="heading">
                        <h2 style="text-align:left;">Jobhun Talent Pool</h2>
                    </div><!-- Heading -->
                    <div class="heading">
                        <div class="row">
                            <div class="blog-posthumb"> <img width="1300" height="900"
                                    src="{{ asset ('user/images/jtp.png')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="pf-title">Nama Lengkap</span>
                                    <div class="pf-field">
                                        <input type="text" placeholder="Masukan Nama Lengkap....." />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Alamat Email</span>
                                    <div class="pf-field">
                                        <input type="text" placeholder="Masukan Alamat Email....." />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Lokasi tinggal saat ini</span>
                                    <div class="pf-field">
                                        <input type="text" placeholder="Masukan Lokasi tinggal saat ini....." />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Nomor telepon/hp</span>
                                    <div class="pf-field">
                                        <input type="text" placeholder="Masukan Nomor telepon/hp....." />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Sebutkan beberapa kemampuan yang kamu kuasai !</span>
                                    <div class="pf-field">
                                        <textarea placeholder="Jelaskan di sini....."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Sebutkan beberapa posisi pekerjaan yang kamu minati !</span>
                                    <div class="pf-field">
                                        <textarea placeholder="Jelaskan di sini....."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Sebutkan dan jelaskan pengalaman kerja/proyek yang pernah kamu lakukan</span>
                                    <div class="pf-field">
                                        <textarea placeholder="Jelaskan di sini....."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Apa saja aktivitasmu saat ini ?</span>
                                    <div class="pf-field">
                                        <textarea placeholder="Jelaskan di sini....."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Apa kelebihan dan kekuranganmu saat bekerja ?</span>
                                    <div class="pf-field">
                                        <textarea placeholder="Jelaskan di sini....."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Mengapa perusahaan harus memilih kamu ?</span>
                                    <div class="pf-field">
                                        <textarea placeholder="Jelaskan di sini....."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                        <span class="pf-title">Masukkan URL CV-mu (Unggah file CV-mu ke cloud storage seperti Google Docs/Dropbox) !</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="Masukan URL CV-mu....." />
                                        </div>
                                    </div>
                                <div class="col-lg-12">
                                        <span class="pf-title">Masukkan URL portfolio/profile online-mu !</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="Masukan URL portfolio/profile online-mu....." />
                                        </div>
                                    </div>
                                <div class="col-lg-12">
                                    <button type="submit">Kirim !</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection