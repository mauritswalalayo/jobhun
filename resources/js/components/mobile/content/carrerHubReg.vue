<template>
    <div>
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.2s">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir Jobhun Career Hub Reguler</h6>
                </div>
                <div class="container">
                    <br>
                    <form @submit.prevent="addJob">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="nama perusahaan" v-model="job_company_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tagline perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="tagline" v-model="job_company_tagline">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Informasi tentang perusahaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="job_company_description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jl." v-model="job_company_address">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Website perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="www.perusahaan.com" v-model="job_company_website">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="perusahaan@gmail.com" v-model="job_company_email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor telepon perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" v-model="job_company_phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Posisi - posisi yang dicari</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" v-model="job_position_sought">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Jenis pekerjaan</label>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="Fulltime" v-model="job_type">
                                <label class="form-check-label" for="inlineRadio1">Full time</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="Part time" v-model="job_type">
                                <label class="form-check-label" for="inlineRadio2">Part time</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="Freelance" v-model="job_type">
                                <label class="form-check-label" for="inlineRadio2">Freelance</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="Internship" v-model="job_type">
                                <label class="form-check-label" for="inlineRadio2">Internship</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="Volunteer" v-model="job_type">
                                <label class="form-check-label" for="inlineRadio2">Volunteer</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi Pekerjaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="" v-model="job_description">Pekerjaan yang akan dilakukan:
Syarat dan kualifikasi:
Kemampuan dan kompetensi yang harus dimiliki:
Lokasi kerja:
Waktu bekerja:
Gaya berpakaian:
Bahasa yang digunakan:
Tunjangan:
Besar gaji:</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Tentang proses rekrut</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="" v-model="job_recruit_process">Cara mengirimkan lamaran:
Batas waktu melamar:
Waktu proses rekrut:</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Unggah Logo perusahaan</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" @change="changeLogoUrl" ref="ref_job_logo_url">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Unggah Poster</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" @change="changePosterUrl" ref="ref_job_poster_url">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Bukti Transfer</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" @change="changeTransferUrl" ref="ref_job_transfer_url">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Pasang Loker</button>
                        <br>
                    </form>
                </div>
            </div>

        </div>
    </div>

</template>
<script>
    export default {
        data(){
            return{
                job_service: 'jobhun Career Hub Reguler',
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
                
            }
        },
        methods: {
        changeLogoUrl: function() {
            this.job_logo_url = this.$refs.ref_job_logo_url.files[0];
            console.log(this.job_logo_url);
        },
        changePosterUrl: function(){
            this.job_poster_url = this.$refs.ref_job_poster_url.files[0];
            console.log(this.job_poster_url);
        },
        changeTransferUrl: function(){
            this.job_transfer_url = this.$refs.ref_job_transfer_url.files[0];
            console.log(this.job_transfer_url);
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

            // alert('test');
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