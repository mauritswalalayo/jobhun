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
                                <h2>Magang di Tuupai</h2>
                                {{-- <span class="job-is ft">Internship</span> --}}
                            </div>
                            <ul class="tags-jobs">
                                @foreach ($daftar_job as $job)
                                    
                            <li><i class=" fa fa-briefcase"></i> {{$job->type_work}}</li>
                                <li><i class="la la-map-marker"></i>Surabaya</li>
                                <li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
                                
                                @endforeach
                               
                            </ul>
                            <span><strong>Roles</strong>: #Duduk Santai Panggil Tuupai</span>
                        </div><!-- Job Head -->
                        <div class="job-details">
                            <h3>Job Description</h3>
                            <p>
                                {{$job->description_company}}
                            </p>
                            <p>
                                <ul>
                                    {{-- <li>Account Executive</li>
                                    <li>Copywriter</li>
                                    <li>Client Relation</li>
                                    <li>Fotografer Indoor</li>
                                    <li>Mobile Developer</li>
                                    <li>UI Designer</li>
                                    <li>Ilustrator</li>
                                    <li>Videographer</li> --}}
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
                            <p><i class="la la-envelope-o"></i> ali.tufan@jobhunt.com</p>
                        </div>
                        <a href="#" title="" class="apply-job-btn"><i class="la la-paper-plane"></i>Apply for
                            job</a>
                        <a href="{{ route ('jch')}}" title="" class="viewall-jobs">View all Jobs</a>
                    </div><!-- Job Head -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection