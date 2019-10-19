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
								 <form action="{{route('post.mediapartner')}}" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{ csrf_token()}}">
									
					 				<div class="row">
                        				
										 
										 <div class="col-lg-12">
												<span class="pf-title">Alamat Email</span>
												<div class="pf-field">
													<input type="text" name="email" placeholder="Tulis alamat email anda" />
												</div>
											</div>
										 

					 					<div class="col-lg-12">
					 						<span class="pf-title">Nama Acara</span>
					 						<div class="pf-field">
					 							<input type="text" name="event_name" placeholder="Tulis nama acara anda" />
					 						</div>
										 </div>
										 
										 <div class="col-lg-12">
												<span class="pf-title">Tanggal Pelaksanaan Acara</span>
												<div class="pf-field">
													<input type="text" name="event_date" placeholder="Tulis tanggal pelaksaan acara anda" />
												</div>
											</div>
                                         
                                         <div class="col-lg-12">
					 						<span class="pf-title">Penyelenggara Acara</span>
					 						<div class="pf-field">
					 							<input type="text" name="event_organizer" placeholder="Tulis nama perusahaan/komunitas/organisasi yang menyelenggarakan acara" />
					 						</div>
										 </div>
										 
										 <div class="col-lg-12">
                                                <span class="pf-title">Detail Acara</span>
                                                <div class="pf-field">
                                                    <textarea type="text" name="event_details" placeholder="Tulis detail acara anda"></textarea>
                                                </div>
                                        </div>

                                         <div class="col-lg-12">
                                                <span class="pf-title">Narahubung Acara</span>
                                                <div class="pf-field">
                                                    <input type="text" name="contact_event" placeholder="Silakan cantumkan nama dan nomor HP narahubung" />
                                                </div>
                                        </div>
                                         
                                       

                                         <div class="col-lg-12">
					 						<span class="pf-title">Tempat Pelaksanaan Acara</span>
					 						<div class="pf-field">
					 							<input type="text" name="event_venue" placeholder="Tulis tempat pelaksaan acara anda" />
					 						</div>
										 </div>
										 
										 <div class="col-lg-12">
												<span class="pf-title">Layanan Media Partner</span>
												<div class="pf-field">
													<select data-placeholder="Allow In Search" name="type_mediapartner" class="chosen">
													   <option>Free</option>
													   <option>Premium Rp100.000,-/acara</option>
												   </select>
												</div>
											</div>

                                         
                                    
					 					
                                        
                                        {{-- <div class="col-lg-12">
                                             <span class="pf-title">Bukti Transfer</span>
                                             <div class="upload-info">
                                                <input type="file" class="form-control-file" name="evidence_transfer">
                                                <span>Silakan transfer Rp50.000,- (per posisi pekerjaan) ke rekening BCA a/n Cynthia Cecilia 0373393328, kemudian lampirkan bukti transfer di sini.</span>
                                                    <br><br> <br>
                                            </div>
										</div> --}}
										
                                    
					 					<div class="col-lg-12">
                                             <button type="submit">Ajukan</button>
                                             
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