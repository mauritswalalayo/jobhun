@extends('user.master')

@section('content')

<section>
    <div class="block">
        <div class="block no-padding">
            <div class="container">
                <div class="inner-title2">
                    <div class="inner-title2">
                        <h3>Berkarier di Jobhun</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 column">
                        <div class="blog-single">
                            <div class="bs-thumb"><img src="{{ asset ('user/images/berkarier.jpg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 style="text-align:center;">Jobhun wants you! Be a part of us!</h2>
                <p>Kirim CV dan portfolio-mu ke info@jobhun.id dengan subjek email “Jobhun Internship” untuk program magang atau “Jobhun Hiring (Position)” untuk posisi full time/part time/freelance yang sedang dibuka.</p>
                <h4><b>Posisi yang sedang dibuka</b></h4>
                <p><i>Belum ada posisi yang sedang dibuka</i></p>
            </div>
        </div>
    </div>
</section>

@endsection