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
                            <div class="col-lg-12">
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
                                <h2 align="center">Mengapa harus mengikuti Jobhun Academy</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid border">
                                        <div class="job-title-sec">
                                            <h3>Belajar dengan formula khusus untuk persiapan karier</h3>
                                            <p align="left">Di Jobhun Academy, kamu tidak hanya belajar secara teori saja. Namun juga akan praktek secara langsung untuk menghasilkan portfolio penunjang karier. Kamu juga bisa sharing bersama mentor untuk membahas persiapan karier.</p>
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
@endsection