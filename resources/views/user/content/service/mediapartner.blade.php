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
           
                        <div class="block">

                                
                                <div class="blog-posthumb"> <img width="1300" height="900"
                                        src="{{ asset ('user/images/WEB_BANNER.jpg')}}" alt="" />
                                </div>
                                    
        
        
                            </div><!-- Heading -->
                

                <div class="col-lg-12">
                        <br><br>
                        
                        <p align="justify" style="font-size:20px">
                                Penawaran kerja sama media partner ini ditujukan bagi 
                                komunitas/organisasi/perusahaan yang hendak menggelar 
                                sebuah acara yang tetap ada kaitannya dengan visi dan misi Jobhun. 
                                Pihak Jobhun menerima kerja sama media partner untuk acara-acara 
                                yang berhubungan dengan karier maupun penunjang skill dalam berkarier.
                        </p>
                        <p style="font-size:20px"><b>
                            Paket Kerja Sama Media Partner
                        </b></p>
                        <p style="font-size:20px">
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
                                                                <li><h6>3. Poster acara akan diposting di website, feed Instagram, dan Instagram Story 
                                                                    Jobhun sebanyak 1 kali.</h6></li>
                                                                <li><h6>4. Press release sebelum acara akan diposting di website Jobhun</h6></li>
                                                                <li><h6></h6></li>
                                                            </ul>
                                                            <a href="{{route('form_media_partner')}}" title="">Daftar</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="pricetable active">
                                                            <div class="pricetable-head">
                                                                <h3>Media Partner Premium</h3>
                                                                <h2><i>Rp. </i>100.000,-</h2>
                                                            </div><!-- Price Table -->
                                                            <ul>
                                                                <li><h6>1. Pemasangan logo Jobhun di seluruh media promosi acara diperbolehkan. 
                                                                    Namun hal ini tidak bersifat wajib.<h6></li>
                                                                <li><h6>2. Poster acara akan diposting di website, feed akun Instagram, dan Instagram Story Jobhun sebanyak 1 kali.</h6></li>
                                                                <li><h6>3. Press release sebelum acara akan diposting di website Jobhun</h6></li>
                                                                <li><h6>4. Blasting poster acara melalui newsletter Jobhun (Kurang lebih ribuan pengguna).</h6></li>
                                                                <li><h6>5. Peliputan acara dalam bentuk artikel premium yang akan diposting di website dan Instagram Jobhun.</h6></li>
                                                                
                                                            </ul>
                                                            <a href="{{route('form_media_partner')}}" title="">Daftar</a>
                                                        </div>
                                                    </div>
                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                    <br><br>
                                    
                                    <p align="justify" style="font-size:20px"><b>
                                            Alur Kerja Sama Media Partner</b>
                                            <ul>
                                                    <li><h6>1. Memilih paket kerja sama media partner.<h6></li>
                                                    <li><h6>2. Klik ‘daftar’ pada paket kerja sama media partner yang dipilih.</h6></li>
                                                    <li><h6>3. Isi lengkap formulir kerja sama media partner dan ikuti instruksi.</h6></li>
                                                    <li><h6>4. Menunggu konfirmasi dari pihak Jobhun terkait persetujuan dan tanggal yang tersedia untuk memposting promosi acara tersebut.</h6></li>
                                                    <li><h6>5. Poster akan diupload di website dan akun Instagram Jobhun sesuai dengan jadwal yang telah disepakati.</h6></li>
                                                    
                                            </ul>
                                    </p>
                                    <p style="font-size:20px"><b>
                                            Catatan :
                                            </b>
                                            <ul style="margin-left:50px">
                                                    <li><h6>1. Harga premium media partner berlaku mulai 1 Januari 2019.<h6></li>
                                                    <li><h6>2. Klik ‘daftar’ pada paket kerja sama media partner yang dipilih.</h6></li>
                                                    <li><h6>3. Isi lengkap formulir kerja sama media partner dan ikuti instruksi.</h6></li>
                                                    <li><h6>4. Menunggu konfirmasi dari pihak Jobhun terkait persetujuan dan tanggal yang tersedia untuk memposting promosi acara tersebut.</h6></li>
                                                    <li><h6>5. Poster akan diupload di website dan akun Instagram Jobhun sesuai dengan jadwal yang telah disepakati.</h6></li>
                                                    
                                            </ul>
                                    </p>
                                    <br>
                                    <p style="font-size:20px"><b>
                                        Informasi acara akan ditayangkan melalui menu 
                                        <a href="{{ url ('post/info-acara')}}"><font color="blue">'Info Acara'</font></a> dan <a href="https://www.instagram.com/jobhun/"><font color="blue"> Instagram @jobhun </font></a> 
                                    </b></p>
                                </div>
                        </section>
                
            </div>
        </div>
    </div>
</section>

@endsection