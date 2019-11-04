<template>
    <div>
        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="col-lg-9 column">
			<div class="padding-left">
				<div class="profile-title">
					<h3>Formulir Jobhun Career Hub Reguler</h3>
				</div>

		<div class="profile-form-edit">
			<form @submit.prevent="addJob">
					<div class="row"><!--
                        <div class="col-lg-12">
					 	    <span class="pf-title">Tipe Posting Job</span>
					 			<div class="pf-field">
					 				<select data-placeholder="Allow In Search" v-model="job_service" class="chosen">
                                        <option selected>Jobhun Career Hub Reguler</option>
									</select>
					 			</div>
					 	</div>-->
		<div class="col-lg-12">
			<span class="pf-title">Nama Perusahaan</span>
				<div class="pf-field">
					<input type="text" v-model="job_company_name" placeholder="Your company name"/>
				</div>
        </div>

        <div class="col-lg-12">
			<span class="pf-title">Tagline Perusahaan</span>
				<div class="pf-field">
					<input type="text" v-model="job_company_tagline" placeholder="Write your tagline here" />
				</div>
        </div>

        <div class="col-lg-12">
			<span class="pf-title">Informasi Tentang Perusahaan</span>
				<div class="pf-field">
					<textarea type="text" v-model="job_company_description" placeholder="Describe your company here"></textarea>
				</div>
		</div>

        <div class="col-lg-12">
			<span class="pf-title">Alamat Perusahaan</span>
				<div class="pf-field">
				<input type="text" v-model="job_company_address" placeholder="Company address"/>
					 						</div>
                                         </div>
                                         <div class="col-lg-12">
					 						<span class="pf-title">Website Perusahaan</span>
					 						<div class="pf-field">
					 							<input type="text" v-model="job_company_website" placeholder="your Url Site" />
					 						</div>
                                         </div>

                                         <div class="col-lg-12">
					 						<span class="pf-title">Email Perusahaan</span>
					 						<div class="pf-field">
					 							<input type="text" v-model="job_company_email" placeholder="your email address" />
					 						</div>
                                         </div>

                                        <div class="col-lg-12">
					 						<span class="pf-title">Nomor Telepon Perusahaan</span>
					 						<div class="pf-field">
					 							<input type="text" v-model="job_company_phone" placeholder="your company phone" />
					 						</div>
                                        </div>

                                        <div class="col-lg-12">
					 						<span class="pf-title">Posisi Yang Dicari</span>
					 						<div class="pf-field">
					 							<input type="text" v-model="job_position_sought" placeholder="what position you look for" />
					 						</div>
                                        </div>

					 					<div class="col-lg-12">
					 						<span class="pf-title">Jenis Pekerjaan</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Job Type" v-model="job_type" class="chosen">
													<option>Full time</option>
                                                    <option>Part time</option>
                                                    <option>Freelance</option>
                                                    <option>Internship</option>
                                                    <option>Volunteer</option>
												</select>
					 						</div>
                                         </div>

                                        <div class="col-lg-12">
					 						<span class="pf-title">Deskripsi Masing-masing Pekerjaan</span>
					 						<div class="pf-field">
					 							<textarea type="text" v-model="job_description" placeholder="Syarat dan kualifikasi :
Kemampuan dan kompetensi yang harus dimiliki :
Lokasi kerja :
Waktu bekerja :
Gaya berpakaian :
Bahasa yang digunakan :
Tunjangan :
Besar gaji : "></textarea>
					 						</div>
										</div>

										<div class="col-lg-12">
												<span class="pf-title">Tentang Proses Rekrut</span>
												<div class="pf-field">
													<textarea type="text" v-model="job_recruit_process" placeholder="Cara mengirimkan lamaran :
Batas waktu melamar :
Waktu proses rekrut.">

													</textarea>
												</div>
										   </div>



										   <div class="col-lg-12">
												<span class="pf-title">Unggah Logo Perusahaan</span>
												<div class="upload-info">
                                                <input type="file" @change="changeLogoUrl" ref="ref_job_logo_url" class="form-control-file">
												   <span>Klik tombol 'Upload', kemudian pilih logo perusahaan yang ingin kamu unggah.</span>
											   </div>
										   </div>

                                        <div class="col-lg-12">
                                             <span class="pf-title">Unggah Poster</span>
                                             <div class="upload-info">
                                                <input type="file" @change="changePosterUrl" ref="ref_job_poster_url" class="form-control-file">
                                                <span>Klik tombol 'Upload', kemudian pilih poster yang ingin kamu unggah.</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                             <span class="pf-title">Bukti Transfer</span>
                                             <div class="upload-info">
                                                <input type="file" @change="changeTransferUrl" ref="ref_job_transfer_url" class="form-control-file">
                                                <span>Silakan transfer Rp50.000,- (per posisi pekerjaan) ke rekening BCA a/n Cynthia Cecilia 0373393328, kemudian lampirkan bukti transfer di sini.</span>
                                                    <br><br> <br>
                                            </div>
                                        </div>

					 					<div class="col-lg-12">
                                             <button type="submit">Pasang Loker</button>

                                             <br><br> <br> <br><br>
                                         </div>



					 				</div>
					 			</form>
                             </div>
                         </div>
                       </div>
                    </div>
                </section>
    </div>
</template>

<script>
export default {
    data(){
        return{
            job_service: 'Jobhun Career Hub Reguler',
            job_company_name: '',
            job_company_tagline: '',
            job_company_description: '',
            job_company_address: '',
            job_company_website: '',
            job_company_email: '',
            job_company_phone: '',
            job_position_sought: '',
            job_type: '',
            job_description: '',
            job_recruit_process: '',
            job_logo_url: '',
            job_poster_url: '',
            job_transfer_url: '',
            job_verified: ''
        }
    },
    methods: {
        changeLogoUrl: function() {
            this.job_logo_url = this.$refs.ref_job_logo_url.files[0];
            console.log(this.logo_url);
        },
        changePosterUrl: function(){
            this.job_poster_url = this.$refs.ref_job_poster_url.files[0];
            console.log(this.poster_url);
        },
        changeTransferUrl: function(){
            this.job_transfer_url = this.$refs.ref_job_transfer_url.files[0];
            console.log(this.transfer_url);
        },
        addJob: function(){
            let formData = new FormData();
            formData.append('job_service', this.job_service);
            formData.append('job_company_name', this.job_company_name);
            formData.append('job_company_tagline', this.job_company_tagline);
            formData.append('job_company_description', this.job_company_description);
            formData.append('job_company_address', this.job_company_address);
            formData.append('job_company_website', this.job_company_website);
            formData.append('job_company_email', this.job_company_email);
            formData.append('job_company_phone', this.job_company_phone);
            formData.append('job_position_sought', this.job_position_sought);
            formData.append('job_type', this.job_type);
            formData.append('job_description', this.job_description);
            formData.append('job_recruit_process', this.job_recruit_process);
            formData.append('job_logo_url', this.job_logo_url);
            formData.append('job_poster_url', this.job_poster_url);
            formData.append('job_transfer_url', this.job_transfer_url);
            formData.append('job_verified', this.job_verified);

            axios.post(this.$store.state.apiUrl + 'api/post/jobs',formData,
              {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
              }).then(response=>{
                let msg = response.data.message;
                this.$swal({
                  title: "Berhasil",
                  text: msg,
                  icon: "success"
                });
              });

        }
    }
}
</script>