@extends('user.master')

@section('content')
<section>
    <div class="block">
        <div class="container">

        </div>
    </div>
</section>
<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 column">
                    <div class="job-single-sec">
                        <div class="job-single-head2">
                            <div class="job-title2">
                                <h3>Magang di Tuupai</h3><span class="job-is ft">Internship</span>
                            </div>
                            <ul class="tags-jobs">
                                <li><i class="la la-map-marker"></i>Surabaya</li>
                                <li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
                            </ul>
                            <span><strong>Roles</strong>: #Duduk Santai Panggil Tuupai</span>
                        </div><!-- Job Head -->
                        <div class="job-details">
                            <h3>Job Description</h3>
                            <p>
                                Tuupai adalah cara baru dan praktis untuk mencari segala macam penyedia jasa profesional
                                di sekitar Anda. Tuupai berbasismobile service marketplace yang mana secara langsung
                                bisa menghubungkan Anda dengan berbagai penyedia jasa profesional tanpa melalui
                                perantara. Saat ini Tuupai sedang membuka program magang untuk beberapa posisi:
                            </p>
                            <p>
                                <ul>
                                    <li>Account Executive</li>
                                    <li>Copywriter</li>
                                    <li>Client Relation</li>
                                    <li>Fotografer Indoor</li>
                                    <li>Mobile Developer</li>
                                    <li>UI Designer</li>
                                    <li>Ilustrator</li>
                                    <li>Videographer</li>
                                </ul>
                            </p>
                            <p>Cek bit.ly/tuupailab untuk cek kualifikasi dan pendaftaran.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 column">
                    <div class="job-single-head style2">
                        <div class="job-thumb"> <img src="{{ asset ('user/images/job1.jpg')}}" width="124" height="124"
                                alt="" /> </div>
                        <div class="job-head-info">
                            <h4>Magang di Tuupai</h4>
                            <span>#Duduk Santai Panggil Tuupai</span>
                            <p><i class="la la-unlink"></i>https://www.tuupai.com/</p>
                            <p><i class="la la-phone"></i> +90 538 963 54 87</p>
                            <p><i class="la la-envelope-o"></i> ali.tufan@jobhunt.com</p>
                        </div>
                        <a href="#" title="" class="apply-job-btn"><i class="la la-paper-plane"></i>Apply for
                            job</a>
                        <a href="#" title="" class="apply-job-linkedin"><i class="la la-linkedin"></i>Apply with
                            Linkedin</a>
                        <a href="{{ route ('jch')}}" title="" class="viewall-jobs">View all Jobs</a>
                    </div><!-- Job Head -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection