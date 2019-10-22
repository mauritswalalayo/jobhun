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
                                    src="{{ asset ('user/images/jtp-1.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>

                    @if ($errors->any())
        							<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
										<li>{{$error}}</li>
										@endforeach
									</ul>
								</div>
								@endif

                    <div class="contact-form">
						<form action="{{route('post.talentpool')}}" method="POST" enctype="multipart/form-data">
						    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="pf-title">Nama Lengkap</span>
                                    <div class="pf-field">
                                        <input type="text" placeholder="" name="full_name"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Alamat Email</span>
                                    <div class="pf-field">
                                        <input type="text" placeholder="" name="email_address"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Lokasi tinggal saat ini</span>
                                    <div class="pf-field">
                                        <input type="text" placeholder="" name="residence"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Nomor telepon/HP</span>
                                    <div class="pf-field">
                                        <input type="text" placeholder=""  name="phone_number"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                        <span class="pf-title">Berapa usiamu saat ini ?</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="" name="current_age"/>
                                        </div>
                                    </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Sebutkan beberapa kemampuan yang kamu kuasai !</span>
                                    <div class="pf-field">
                                        <textarea placeholder="" name="ability"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                        <span class="pf-title">Jelaskan latar belakang pendidikanmu !</span>
                                        <div class="pf-field">
                                            <textarea placeholder="" name="educational_background"></textarea>
                                        </div>
                                    </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Sebutkan beberapa posisi pekerjaan yang kamu minati !</span>
                                    <div class="pf-field">
                                        <textarea placeholder="" name="work_position"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                        <span class="pf-title">Jelaskan tentang dirimu secara singkat !</span>
                                        <div class="pf-field">
                                            <textarea placeholder="" name="about_you"></textarea>
                                        </div>
                                    </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Sebutkan dan jelaskan pengalaman kerja/proyek yang pernah kamu lakukan !</span>
                                    <div class="pf-field">
                                        <textarea placeholder="" name="work_experience"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Apa saja aktivitasmu saat ini ?</span>
                                    <div class="pf-field">
                                        <textarea placeholder="" name="current_activity"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Apa kelebihan dan kekuranganmu saat bekerja ?</span>
                                    <div class="pf-field">
                                        <textarea placeholder="" name="overworked"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Mengapa perusahaan harus memilih kamu ?</span>
                                    <div class="pf-field">
                                        <textarea placeholder="" rows="4" cols="500" maxlength="500px" name="choose"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                             <span class="pf-title">Unggah CV-mu</span>
                                             <div class="pf-field">
                                                <input type="file" class="" name="upload_cv">
                                            </div>
                                        </div>

                                        
                                        
                                <div class="col-lg-12">
                                        <span class="pf-title">Masukkan URL portfolio/profile online-mu !</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="" name="photo_url"/>
                                        </div>
                                    </div>
                                    
                                <div class="col-lg-12">
                                    <button type="submit">Daftar</button>
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