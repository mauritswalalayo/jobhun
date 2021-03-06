@extends('user.master')

@section('content')
<section>
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url({{ asset ('user/images/depan.jpg')}});"
            class="parallax scrolly-invisible no-parallax">
        </div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Jobhun Academy</h3>
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
                <div class="col-lg-12">
                    <div class="about-us">
                        <div class="row">

						<div class="blog-posthumb"> <img width="1300" height="900"
                            src="{{ asset ('user/images/WEB_BANNER-02.jpg')}}" alt="" />
                        </div>

                            <div class="col-lg-7">
                            </div>
                            <div class="col-lg-12">
                                <br><br>
                                <h2 align="center">Mengasah <i>skill</i> bersama Jobhun</h2>
                                <p align="justify">
                                    Jobhun Academy merupakan sebuah program pelatihan dengan berbagai topik yang dapat
                                    menunjang skill para pekerja secara intensif. Melalui program ini, kamu tidak hanya
                                    belajar secara teori saja, namun juga dilakukan secara praktek sehingga akan
                                    menghasilkan portfolio terbaik bagi kariermu. Tak hanya itu saja, para mentee dalam
                                    Jobhun Academy akan dibekali persiapan karier sesuai dengan minatnya. Kamu bisa
                                    menambah skill di berbagai bidang, meningkatkan karier, mengubah karier, atau
                                    menjadi seorang entrepreneur.
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <h2 align="center">Mengapa harus mengikuti Jobhun Academy ?</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid border">
                                        <div class="job-title-sec">
                                            <h3>Belajar dengan formula khusus untuk persiapan karier</h3>
                                            <p align="left">Di Jobhun Academy, kamu tidak hanya belajar secara teori
                                                saja. Namun juga akan praktek secara langsung untuk menghasilkan
                                                portfolio penunjang karier. Kamu juga bisa sharing bersama mentor untuk
                                                membahas persiapan karier.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid border">
                                        <div class="job-title-sec">
                                            <h3>Berkesempatan untuk mendapatkan pekerjaan</h3>
                                            <p align="left">Jobhun bekerjasama dengan berbagai perusahaan dalam mencari
                                                kandidat terbaik. Apabila kamu berhasil menyelesaikan program di Jobhun
                                                Academy dengan baik dan sesuai dengan Kriteria yang sedang dicari oleh
                                                perusahaan, maka Jobhun akan merekomendasikan kamu agar bisa bekerja di
                                                beberapa company partner Jobhun tersebut.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid border">
                                        <div class="job-title-sec">
                                            <h3>Dibimbing oleh mentor - mentor berkualitas dan berpengalaman</h3>
                                            <p align="left">Jobhun selalu berupaya menghadirkan mentor berkualitas dan
                                                berpengalaman dibidangnya, serta memiliki prestasi di bidang tersebut.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid border">
                                        <div class="job-title-sec">
                                            <h3>Belajar secara optimal dan kondusif</h3>
                                            <p align="left">Agar belajar bisa lebih optimal dan kondusif, Jobhun Academy
                                                hanya bisa diikuti 3 - 5 orang setiap kelas. Kami percaya bahwa
                                                kapasitas kelas yang sedikit akan membuat interaksi antara mentor dan
                                                mentee menjadi lebih intens.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid border">
                                        <div class="job-title-sec">
                                            <h3>Menghasilkan portfolio yang berguna untuk karier</h3>
                                            <p align="left">Setelah program Jobhun Academy ini berakhir, mentee akan
                                                mendapatkan hasil tes, penilaian secara keseluruhan, sertifikat, dan
                                                portfolio atau karya di masing - masing bidang yang telah dilakukan
                                                selama pembelajaran dilakukan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid border">
                                        <div class="job-title-sec">
                                            <h3>Biaya terjangkau dan bisa dicicil</h3>
                                            <p align="left">Kamu tidak perlu pusing masalah biaya. Program - program
                                                yang ada di Jobhun Academy dipatok dengan harga yang terjangkau dan bisa
                                                kamu cicil dengan skema cicilan yang sangat membantu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <div class="col-lg-12 column">
                    <div class="blog-single">
                        <div class="bs-thumb">
                            <img src="{{ asset ('user/images/ja.jpeg')}}" width="1000"
                                alt="Gambar Testimoni Jobhun Academy" />
                        </div>
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
                <div class="col-lg-12">
                    <div class="about-us">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 align="center">Macam - Macam Jobhun Academy yang bisa mengasah skill anda.</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <a href="{{ route ('content-writer')}}">
                                        <div class="job-grid border">
                                            <div class="job-title-sec">
                                                <div class="bs-thumb">
                                                    <img src="{{ asset ('user/images/cw-1.jpg')}}"
                                                        alt="Gambar Testimoni Jobhun Academy" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <a href="{{ route ('graphic-designer')}}">
                                        <div class="job-grid border">
                                            <div class="job-title-sec">
                                                <div class="bs-thumb">
                                                    <img src="{{ asset ('user/images/gd-1.jpg')}}"
                                                        alt="Gambar Testimoni Jobhun Academy" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <a href="{{ route ('videographer')}}">
                                        <div class="job-grid border">
                                            <div class="job-title-sec">
                                                <div class="bs-thumb">
                                                    <img src="{{ asset ('user/images/vg-1.jpg')}}" alt="Gambar Testimoni Jobhun Academy" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <a href="{{ route ('web')}}">
                                        <div class="job-grid border">
                                            <div class="job-title-sec">
                                                <div class="bs-thumb">
                                                    <img src="{{ asset ('user/images/wd-1.jpg')}}"
                                                        alt="Gambar Testimoni Jobhun Academy" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <a href="{{ route ('android')}}">
                                        <div class="job-grid border">
                                            <div class="job-title-sec">
                                                <div class="bs-thumb">
                                                    <img src="{{ asset ('user/images/ad-1.jpg')}}"
                                                        alt="Gambar Testimoni Jobhun Academy" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <a href="{{ route ('ui')}}">
                                        <div class="job-grid border">
                                            <div class="job-title-sec">
                                                <div class="bs-thumb">
                                                    <img src="{{ asset ('user/images/ui-1.jpg')}}"
                                                        alt="Gambar Testimoni Jobhun Academy" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <a href="{{ route ('copywriter')}}">
                                        <div class="job-grid border">
                                            <div class="job-title-sec">
                                                <div class="bs-thumb">
                                                    <img src="{{ asset ('user/images/cw-3.jpg')}}"
                                                        alt="Gambar Testimoni Jobhun Academy" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <a href="{{ route ('public_speaker')}}">
                                        <div class="job-grid border">
                                            <div class="job-title-sec">
                                                <div class="bs-thumb">
                                                    <img src="{{ asset ('user/images/ps.jpg')}}"
                                                        alt="Gambar Testimoni Jobhun Academy" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <a href="{{ route ('social_media')}}">
                                        <div class="job-grid border">
                                            <div class="job-title-sec">
                                                <div class="bs-thumb">
                                                    <img src="{{ asset ('user/images/sms.jpg')}}" alt="Gambar Testimoni Jobhun Academy" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <a href="{{ route ('startup_founder')}}">
                                        <div class="job-grid border">
                                            <div class="job-title-sec">
                                                <div class="bs-thumb">
                                                    <img src="{{ asset ('user/images/sf.jpg')}}"
                                                        alt="Gambar Testimoni Jobhun Academy" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection