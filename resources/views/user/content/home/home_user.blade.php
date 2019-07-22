@extends('user.master')

@section('content')

<section>
    <div class="block no-padding">
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-featured-sec">
                        <div class="new-slide-3">
                            <img src="{{ asset ('user/images/depan.jpg')}}" height="550" alt="" />
                        </div>
                        <div class="job-search-sec">
                            <div class="job-search">
                                <h3>Persiapkan Dirimu untuk Karier Terbaik di Masa Depan</h3>
                                <span>Dapatkan pekerjaan impianmu melalui Jobhun Career Hub dan kembangkan
                                    berbagai skill melalui Jobhun Academy</span>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="job-field">
                                                <input type="text" placeholder="Job title, keywords or company name" />
                                                <i class="la la-keyboard-o"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                            <div class="job-field">
                                                <select data-placeholder="City, province or region" class="chosen-city">
                                                    <option>Surabaya </option>
                                                    <option>Yogyakarta</option>
                                                    <option>Jakarta</option>
                                                    <option>Bandung</option>
                                                </select>
                                                <i class="la la-map-marker"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                            <button type="submit"><i class="la la-search"></i></button>
                                        </div>
                                    </div>
                                </form>
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
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Jobhun Career Hub</h2>
                        {{-- <span>Leading Employers already using job and talent.</span> --}}
                    </div><!-- Heading -->
                    <div class="job-listings-sec">

                        <div class="job-grid-sec">
                            <div class="row">

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid border">
                                        <div class="job-title-sec">
                                            <div class="c-logo"> <img src="{{ asset ('user/images/job1.jpg')}}" height="150" alt="" /> </div>
                                                <h3><a href="#" title="">Magang di Tuupai | PT Ilios Studio Teknologi - Tuupai App</a></h3>
                                            <ul class="tags-jobs">
                                                <li><i class="la la-map-marker"></i> Surabaya</li>
                                                <li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
                                            </ul>
                                            {{-- <span>Massimo Artemisis</span> --}}
                                            <span class="fav-job"><i class="la la-heart-o"></i></span>
                                        </div>
                                        <span class="job-lctn">Tuupai adalah cara baru dan praktis untuk mencari segala
                                                    macam penyedia jasa profesional di sekitar Anda. Tuupai berbasismobile service
                                                    marketplace yang mana secara langsung bisa menghubungkan ...... </span>
                                        <a href="{{ route ('spek_jch')}}" title="">Read More</a>
                                    </div><!-- JOB Grid -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="browse-all-cat">
                        <a href="{{ route ('jch')}}" title="">Lihat Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block double-gap-top double-gap-bottom">
        <div data-velocity="-.1"
            style="background: url(http://placehold.it/1920x1000) repeat scroll 50% 422.28px transparent;"
            class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="simple-text-block">
                        <h3>Belajar kemampuan baru untuk karier impian di Jobhun Academy</h3>
                        <span>Materi sesuai dengan persiapan karier dan biaya bisa dicicil!</span>
                        <a href="{{ route ('ja')}}" title="">Lihat Kelas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div data-velocity="-.1"
            style="background: url(http://placehold.it/1920x655) repeat scroll 50% 422.28px transparent;"
            class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Blog</h2>
                        <span>Baca berbagai konten seputar karier yang dapat menambah pengetahuanmu dalam dunia
                            kerja</span>
                    </div><!-- Heading -->
                    <div class="blog-sec">
                        <div class="row">

                            @foreach($daftar_post as $post)

                            <div class="col-lg-4">
                                <div class="my-blog">
                                    <div class="blog-thumb">
                                        <a href="#" title=""><img width="322" height="280"
                                                src="{{asset ('image/post/'.$post->feature_image)}}" alt="" /></a>
                                        <div class="blog-metas">
                                            <a href="#" title="">{{$post->created_at}}</a>
                                            <a href="#" title="">0 Comments</a>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h3><a href="{{url('post/show/'.$post->url)}}" title="">{{$post->title}}</a>
                                        </h3>
                                        <p>{!! str_limit($post->content, 100)!!}</p>
                                        <a href="{{url('post/show/'.$post->url)}}" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div data-velocity="-.1"
            style="background: url(http://placehold.it/1920x1000) repeat scroll 50% 422.28px transparent;"
            class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading light">
                        <h2>Testimoni</h2>
                        <span>Kami mempertemukan perusahaan dan pencari kerja, sekaligus membantu pekerja
                            mengembangkan skill.</span>
                    </div><!-- Heading -->
                    <div class="reviews-sec" id="reviews-carousel">
                        @foreach($daftar_testimoni as $testimoni)
                        <div class="col-lg-6">
                            <div class="reviews">
                                <img src="{{asset ('image/testimoni/'.$testimoni->foto)}}" alt="">
                                <h3>{{$testimoni->name}} <span>{{$testimoni->profesi}}</span></h3>
                                <p>{{$testimoni->testimoni}}</p>
                            </div><!-- Reviews -->
                        </div>

                        @endforeach
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
                    <div class="heading">
                        <h2>Pernah diliput di</h2>
                        <span>Beberapa perusahaan telah membantu merekrut pelamar yang sangat baik selama
                            bertahun-tahun.</span>
                    </div><!-- Heading -->
                    <div class="comp-sec">
                        <div class="company-img">
                            <a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
                        </div><!-- Client  -->
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
                    <div class="heading">
                        <h2>Bekerjasama dengan</h2>
                    </div><!-- Heading -->
                    <div class="comp-sec">
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/lazday.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/lazday.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/lazday.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/lazday.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/lazday.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="comp-sec">
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/lazday.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/lazday.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/lazday.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/lazday.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/lazday.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection