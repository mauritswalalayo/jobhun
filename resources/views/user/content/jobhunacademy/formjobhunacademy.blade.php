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
								 <h3>Formulir pendaftaran Jobhun Academy</h3>

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
							 <form action="{{route('add.jobhunacademy')}}" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{ csrf_token()}}">
									
					 				<div class="row">

											<div class="col-lg-12">
													<span class="pf-title">Nama Lengkap</span>
													<div class="pf-field">
														<input type="text" name="name" placeholder="Tulis nama lengkapmu di sini" />
													</div>
												</div>

                        				<div class="col-lg-12">
					 						<span class="pf-title">Pilih Kelas</span>
					 						<div class="pf-field">
					 							<select placeholder="Allow In Search" name="class_name" class="chosen">
													<option>Jobhun Academy: Content Writer‎</option>
													<option>Jobhun Academy: Graphic Designer‎</option>
													<option>Jobhun Academy: Videographer‎</option>
													<option>Jobhun Academy: Web Developer‎</option>
													<option>Jobhun Academy: Android Developer‎</option>
													<option>Jobhun Academy: UI/UX Designer‎‎</option>
													<option>Jobhun Academy: Copywriter‎</option>
													<option>Jobhun Academy: Social Media Specialist‎</option>
													<option>Jobhun Academy: Public Speaker‎</option>
													<option>Jobhun Academy: Startup Founder‎</option>

												</select>
					 						</div>
					 					</div>

					 					
                                         
                                         <div class="col-lg-12">
					 						<span class="pf-title">Alamat Email</span>
					 						<div class="pf-field">
					 							<input type="text" name="email_address" placeholder="Tulis alamat emailmu di sini" />
					 						</div>
                                         </div>

                                         <div class="col-lg-12">
                                                <span class="pf-title">Nomor HP</span>
                                                <div class="pf-field">
                                                    <input type="text" name="phone" placeholder="Tulis nomor HP-mu di sini" />
                                                </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                             <span class="pf-title">Bukti Transfer</span>
                                             <div class="">
                                                <input type="file" class="form-control-file" name="evidence_transfer">
                                                    
                                            </div>
										</div>

										<div class="col-lg-12">
											<span class="pf-title">Status Pembayaran</span>
											
											<select data-placeholder="Allow In Search" name="payment_status" class="chosen">
													<option value="1">LUNAS</option>
													<option value="0">DICICIL</option>
											</select>
											
										</div>
					 				
										
										<div class="col-lg-12">
												<span class="pf-title">Keterangan</span>
                                                <div class="pf-field">
													<textarea type="text" name="information" placeholder=""></textarea>
													<p><span>Silakan transfer dengan nominal pembayaran yang kamu pilih (Lunas atau cicil) ke rekening BCA a/n CV Sindikat Kreasi Digital 010.9393.993, 
															kemudian lampirkan bukti transfer di sini. Contoh: "Pembayaran lunas sebesar Rp1.500.000,-" atau 
															"Pembayaran dicicil. Saya transfer nominal sesuai dengan DP"</span></p>
                                                </div>
                                        </div>
                                    
					 					<div class="col-lg-12">
                                             <button type="submit">Daftar</button>
                                             
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