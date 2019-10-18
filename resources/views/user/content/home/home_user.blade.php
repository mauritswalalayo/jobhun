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
                                <h1 style="color:blanchedalmond"><b> Persiapkan Dirimu untuk Karier Terbaik di Masa Depan</b></h1>
                                <h5 style="color:blanchedalmond"> Pekerjaan impianmu melalui Jobhun Career Hub dan kembangkan
                                    berbagai skill melalui Jobhun Academy</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
<div class="heading search-box">
    <div class="block">
        <front-careerhub></front-careerhub>
    </div>
</div>
</section>

<section>
    <div class="block double-gap-top double-gap-bottom">
        <div data-velocity="-.1"
            style="background: url({{ asset('user/images/kelas.jpg')}}) repeat scroll 50% 422.28px transparent;"
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
                                        <a href="{{url('post/show/'.$post->url)}}" title="">Selengkapnya<i class="la la-long-arrow-right"></i></a>
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
                            <div class="reviews" style="text-align: justify;">
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
                            <a href="#" title=""><img src="{{ asset('user/images/tvri.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="{{ asset('user/images/sonora.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="{{ asset('user/images/idn.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="{{ asset('user/images/provoke.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="{{ asset('user/images/sbo.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                    </div>
                        <div class="company-img">
                            <a href="#" title=""><img src="{{ asset('user/images/scg.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="{{ asset('user/images/pas.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="{{ asset('user/images/prima.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="{{ asset('user/images/rosco.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="{{ asset('user/images/yot.png')}}" alt="" /></a>
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
                                    src="{{ asset('user/images/dilosby.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/geco.jpg')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/devecir.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/ppl.jpeg')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/kawankoding.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                     </div>

                    <div class="comp-sec">
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/sgx.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/lazday.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/idsfsby.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="https://lazday.com/" target="_blank" title="Website Lazday"><img
                                    src="{{ asset('user/images/sym.png')}}" alt="" /></a>
                        </div><!-- Client  -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="block">
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
    </div> --}}
</section>



@endsection

@section('customjs')

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        $("#search").click(function(e){
        //mencegah refresh halaman
        e.preventDefault();

        //  ambil data dari id
        var datanya = $("#cari_nama").val();

        console.log(datanya);

        $.ajax({
            type: 'POST',
            url: '/projek/jobhun/public/search',
            data: {
                datanya,
            },
            success: function(data){
                var data_loker = data.data.data;
                var data_loker_html = "";
                var site = 'http://localhost/projek/jobhun/public/';
                for (var i = 0; i < data_loker.length; i++){
                    data_loker_html = data_loker_html + '<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">'
                        +
                                    '<div class="job-grid border">'
                                        +
                                        '<div class="job-title-sec">'
                                            +
                                            '<div class="c-logo"> <img width="300" height="300" src="'
                                                +
                                                site+data_loker[i].logo_url+
                                                ' alt=""></div>'
                                                +
                                                ' <h3><a href="' + site+data_loker[i].id + '" title="">' + data_loker[i].company_name + '</a></h3>'
                                                +
                                                '<ul class="tags-jobs">'+
                                            '<li><i class="la la-map-marker"></i>'+data_loker[i].company_address+'</li>'
                                            +
                                                '<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>'+
                                            '</ul>'
                                            +
                                            '<span class="fav-job"><i class="la la-heart-o"></i></span>'
                                        + '</div>'
                                    '<span class="job-lctn">'+data_loker[i].description_company.substring(0,200)+'</span>'
                                    +
                                        '<a href="'+site+'loker/show/'+data_loker[i].id+'" title="">Selengkapnya</a>'
                                        +
                                    '</div></div>';
                }
                $('#data_loker').append(data_loker_html);

                
                

                console.log(data_loker)
            },
            error: function(error){
                alert(error.responseJSON.pesan);
            }
        })

    });

</script>
    
@endsection