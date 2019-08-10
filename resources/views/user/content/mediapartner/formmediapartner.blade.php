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
                    
                    <div class="col-lg-9 column">
				 		<div class="padding-left">
					 		<div class="profile-title">
								 <h3>Formulir Kerja Sama Media Partner</h3>

								 @if ($errors->any())
        							<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
										<li>{{$error}}</li>
										@endforeach
									</ul>
								</div>
								@endif
								 
                                
					 			<!-- <div class="upload-img-bar">
					 				<span class="round"><img src="http://placehold.it/140x140" alt="" /><i>x</i></span>
					 				<div class="upload-info">
					 					<a href="#" title="">Browse</a>
					 					<span>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</span>
					 				</div>
                                 </div>
                                 
					 			<div class="upload-img-bar">
					 				<span class="round"><img src="http://placehold.it/140x140" alt="" /><i>x</i></span>
					 				<div class="upload-info">
					 					<a href="#" title="">Browse</a>
					 					<span>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</span>
					 				</div>
					 			</div> -->
							</div>
							 
					 		<div class="profile-form-edit">
								 <form action="{{route('post.jobs')}}" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{ csrf_token()}}">
									
					 				<div class="row">
                        				<div class="col-lg-12">
					 						<span class="pf-title">Layanan Media Partner</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Allow In Search" name="type_loker" class="chosen">
													<option>Free</option>
													<option>Premium Rp100.000,-/acara</option>
												</select>
					 						</div>
					 					</div>

					 					<div class="col-lg-12">
					 						<span class="pf-title">Nama Acara</span>
					 						<div class="pf-field">
					 							<input type="text" name="company_name" placeholder="Jobhun" />
					 						</div>
                                         </div>
                                         
                                         <div class="col-lg-12">
					 						<span class="pf-title">Penyelenggara Acara</span>
					 						<div class="pf-field">
					 							<input type="text" name="company_tagline" placeholder="Career Development for Millenials" />
					 						</div>
                                         </div>

                                         <div class="col-lg-12">
                                                <span class="pf-title">Narahubung Acara</span>
                                                <div class="pf-field">
                                                    <input type="text" name="company_address" placeholder="Geco Coworking Space, Kompleks AJBS, Jl. Ratna 14, Ngagel, Wonokromo, Surabaya, Jawa Timur, Indonesia 60246" />
                                                </div>
                                        </div>
                                         
                                        <div class="col-lg-12">
					 						<span class="pf-title">Tanggal Pelaksanaan Acara</span>
					 						<div class="pf-field">
					 							<input type="text" name="company_address" placeholder="Geco Coworking Space, Kompleks AJBS, Jl. Ratna 14, Ngagel, Wonokromo, Surabaya, Jawa Timur, Indonesia 60246" />
					 						</div>
                                         </div>

                                         <div class="col-lg-12">
					 						<span class="pf-title">Tempat Pelaksanaan Acara</span>
					 						<div class="pf-field">
					 							<input type="text" name="company_website" placeholder="www.jobhun.id" />
					 						</div>
                                         </div>

                                         <div class="col-lg-12">
                                                <span class="pf-title">Detail Acara</span>
                                                <div class="pf-field">
                                                    <textarea type="text" name="description_company" placeholder="Jobhun merupakan startup pendukung perkembangan karier masyarakat Indonesia. Kami memiliki layanan utama berupa Jobhun Career Hub dan Jobhun Academy. Melalui platform ini, kami akan mempertemukan pencari kerja dan pemberi kerja dengan cara yang cepat dan mudah. Pencari kerja dapat melamar kerja dengan mudah, sedangkan perusahaan dapat menemukan kandidat yang tepat. Sedangkan Jobhun Academy dibuat guna membekali para calon pekerja dan pekerja dengan berbagai skill yang saat ini sedang dibutuhkan di dunia kerja. Nantinya mereka akan disalurkan oleh Jobhun pada beberapa perusahaan partner Jobhun yang sedang mencari tenaga kerja atau talent."></textarea>
                                                </div>
                                        </div>
                                    
					 					
                                        
                                        <div class="col-lg-12">
                                             <span class="pf-title">Bukti Transfer</span>
                                             <div class="upload-info">
                                                <input type="file" class="form-control-file" name="evidence_transfer">
                                                <span>Silakan transfer Rp50.000,- (per posisi pekerjaan) ke rekening BCA a/n Cynthia Cecilia 0373393328, kemudian lampirkan bukti transfer di sini.</span>
                                                    <br><br> <br>
                                            </div>
                                        </div>
                                    
					 					<div class="col-lg-12">
                                             <button type="submit">Posting</button>
                                             
                                             <br><br> <br> <br><br>
                                         </div>

                                           
                                         
					 				</div>
					 			</form>
                             </div>			 		
                         </div>
                       </div>
                    </div>
                </section>

@endsection