@extends('user.master')

@section('content')
<section>
    <section>
    <div class="block">
        <div class="container">
            <div class="row">
                    <div class="block no-padding">
                        <div data-velocity="-.1" style="background: url({{ asset ('user/images/depan.jpg')}});"
                                class="parallax scrolly-invisible no-parallax">
                        </div><!-- PARALLAX BACKGROUND IMAGE -->
                    <div class="container fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner-header">
                                    <h3>Media Partner</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
                {{-- <div class="col-lg-12">
                    <div class="about-us">
                        <div class="row">
                            <div class="col-lg-12">
                            </div>
                            <div class="col-lg-7">
                            </div>
                            <div class="col-lg-12">
                                <br><br>
                                <h2 align="left">Media Partner</h2>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-12 column">
                    <div class="blog-single">
                        <div class="bs-thumb">
                            <img src="{{ asset ('user/images/mediapartner.png')}}" alt="Gambar Web Developer" />
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-12">
                        <br><br>
                        
                        <p align="justify">
                                Penawaran kerja sama media partner ini ditujukan bagi 
                                komunitas/organisasi/perusahaan yang hendak menggelar 
                                sebuah acara yang tetap ada kaitannya dengan visi dan misi Jobhun. 
                                Pihak Jobhun menerima kerja sama media partner untuk acara-acara 
                                yang berhubungan dengan karier maupun penunjang skill dalam berkarier.
                        </p>
                        <p><b>
                            Paket Kerja Sama Media Partner
                        </b></p>
                        <p>
                            Berikut ini merupakan paket penawaran kerja sama media partner yang kami tawarkan: 
                        </p>
                    </div>
                    <section>
                            <div class="block">
                                <div class="container" >
                                    <div class="row" >
                                        <div class="col-lg-12">
                                            {{-- <div class="heading">
                                                <h2>Jobhun Career Hub for Company</h2>
                                                <span>Jobhun Career Hub menjadi solusi bagi perusahaan, instansi, lembaga, maupun organisasi yang sedang mencari kandidat terbaik. Temukan pekerja melalui Jobhun dengan cara yang mudah dan cepat.</span>
                                            </div><!-- Heading --> --}}
                                            <div class="plans-sec">
                                                <div class="row"  >
                                                    <div class="col-lg-6">
                                                        <div class="pricetable">
                                                            <div class="pricetable-head">
                                                                <h3>Media Partner Free</h3>
                                                                <h2><i>Rp. </i>0,-</h2>
                                                            </div><!-- Price Table -->
                                                            <ul>
                                                                <li><h6> 1. Bersifat full barter<h6></li>

                                                                <li><h6> 2. Berkewajiban memasang logo Jobhun di seluruh media promosi acara</h6></li>
                                                                <li><h6>- Berlaku untuk 1 posisi pekerjaan</h6></li>
                                                            </ul>
                                                            <a href="{{route('formposting')}}" title="">Posting Loker</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="pricetable active">
                                                            <div class="pricetable-head">
                                                                <h3>Media Partner Premium</h3>
                                                                <h2><i>Rp. </i>100.000,-</h2>
                                                            </div><!-- Price Table -->
                                                            <ul>
                                                                <li><h6>- Informasi lowongan kerja dipasang secara permanen<h6></li>
                                                                <li><h6>- Informasi lowongan kerja diposting di Instagram Jobhun</h6></li>
                                                                <li><h6>- Berlaku untuk 3 posisi pekerjaan</h6></li>
                                                                <li><h6>- Kandidat seleksi langsung oleh Tim Jobhun</h6></li>
                                                                <li>• Perusahaan akan mendapatkan laporan calon pekerja yang telah dipilih oleh tim Jobhun maksimal 2 minggu setelah penayangan lowongan kerja</li>
                                                                <li>• Seleksi yang dilakukan oleh tim Jobhun berdasarkan CV, portfolio, dan dokumen-dokumen lainnya yang dikirimkan oleh para kandidat. Selanjutnya, perusahaan yang akan melakukan interview maupun psikotes kepada calon pekerja.</li>
                                                            </ul>
                                                            <a href="{{route('formposting')}}" title="">Posting Loker</a>
                                                        </div>
                                                    </div>
                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                
            </div>
        </div>
    </div>
</section>

@endsection