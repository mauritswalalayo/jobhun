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
								 <h3>Formulir Jobhun Career Hub Reguler</h3>
								 
                                
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
					 			<form>
					 				<div class="row">
                        				<div class="col-lg-12">
					 						<span class="pf-title">Tipe Posting Job</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Allow In Search" class="chosen">
													<option>Jobhun Career Hub Reguler</option>
													<option>Jobhun Career Hub Premium</option>
												</select>
					 						</div>
					 					</div>

					 					<div class="col-lg-12">
					 						<span class="pf-title">Nama Perusahaan</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="Jobhun" />
					 						</div>
                                         </div>
                                         
                                         <div class="col-lg-12">
					 						<span class="pf-title">Tagline Perusahaan</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="Career Development for Millenials" />
					 						</div>
                                         </div>
                                         
                                         <div class="col-lg-12">
					 						<span class="pf-title">Deskripsi Perusahaan</span>
					 						<div class="pf-field">
					 							<textarea type="text" placeholder="Jobhun merupakan startup pendukung perkembangan karier masyarakat Indonesia. Kami memiliki layanan utama berupa Jobhun Career Hub dan Jobhun Academy. Melalui platform ini, kami akan mempertemukan pencari kerja dan pemberi kerja dengan cara yang cepat dan mudah. Pencari kerja dapat melamar kerja dengan mudah, sedangkan perusahaan dapat menemukan kandidat yang tepat. Sedangkan Jobhun Academy dibuat guna membekali para calon pekerja dan pekerja dengan berbagai skill yang saat ini sedang dibutuhkan di dunia kerja. Nantinya mereka akan disalurkan oleh Jobhun pada beberapa perusahaan partner Jobhun yang sedang mencari tenaga kerja atau talent."></textarea>
					 						</div>
					 					</div>
                                         
                                        <div class="col-lg-12">
					 						<span class="pf-title">Alamat Perusahaan</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="Geco Coworking Space, Kompleks AJBS, Jl. Ratna 14, Ngagel, Wonokromo, Surabaya, Jawa Timur, Indonesia 60246" />
					 						</div>
                                         </div>

                                         <div class="col-lg-12">
					 						<span class="pf-title">Website Perusahaan</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="www.jobhun.id" />
					 						</div>
                                         </div>

                                         <div class="col-lg-12">
					 						<span class="pf-title">Email Perusahaan</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="jobhun@jobhun.id" />
					 						</div>
                                         </div>

                                        <div class="col-lg-12">
					 						<span class="pf-title">No Telepon Perusahaan</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="08113235533" />
					 						</div>
                                        </div>
                                        
                                        <div class="col-lg-12">
					 						<span class="pf-title">Posisi yang dicari</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="Programmer" />
					 						</div>
                                        </div>
                                    
					 					<div class="col-lg-12">
					 						<span class="pf-title">Jenis Pekerjaan</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Allow In Search" class="chosen">
													<option>Full time</option>
                                                    <option>Part time</option>
                                                    <option>Freelance</option>
                                                    <option>Internship</option>
                                                    <option>Volunteer</option>
												</select>
					 						</div>
                                         </div>

                                        <div class="col-lg-12">
					 						<span class="pf-title">Deskripsi Pekerjaan</span>
					 						<div class="pf-field">
					 							<textarea type="text" >Syarat dan kualifikasi:
Kemampuan dan kompetensi yang harus dimiliki : 
Lokasi kerja : 
Waktu bekerja : 
Gaya berpakaian : 
Bahasa yang digunakan : 
Tunjangan : 
Besar gaji : </textarea>
					 						</div>
                                        </div>
                                         
                                         <div class="col-lg-12">
					 						<span class="pf-title">Deskripsi Pekerjaan</span>
					 						<div class="pf-field">
					 							<textarea type="text" >Cara mengirimkan lamaran :
Batas waktu melamar :
Waktu proses rekrut : </textarea>
                                             </div>
                                        </div>
                                       
                                        <div class="col-lg-12">
                                             <span class="pf-title">Unggah Poster</span>
                                             <div class="upload-info">
                                                <input type="file" class="form-control-file" id="poster">
                                                <span>Klik tombol 'Upload', kemudian pilih foto yang ingin kamu unggah.</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                             <span class="pf-title">Bukti Transfer</span>
                                             <div class="upload-info">
                                                <input type="file" class="form-control-file" id="transfer">
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