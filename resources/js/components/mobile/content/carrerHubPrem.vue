<template>
    <div>
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.2s">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir Jobhun Career Hub Premium</h6>
                </div>
                <div class="container">
                    <br>
                    <form>
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
                            <select class="form-control" v-model="job_type">
                                <option value="Full time">Full time</option>
                                <option value="Part time">Part time</option>
                                <option value="Freelance">Freelance</option>       
                                <option value="Internship">Internship</option>       
                                <option value="Volunteer">Volunteer</option>       
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi masing - masing Pekerjaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="job_description">Pekerjaan yang akan dilakukan:
Syarat dan kualifikasi:
Kemampuan dan kompetensi yang harus dimiliki:
Lokasi kerja:
Waktu bekerja:</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Tentang proses rekrut</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="job_recruit_process">Cara mengirimkan lamaran:
Batas waktu melamar:
Waktu proses rekrut.</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Logo Perusahaan</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" ref="ref_job_logo_url" @change="changeLogoUrl">
                                <label class="custom-file-label" >Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Bukti Transfer</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" ref="ref_job_transfer_url" @change="changeTranferUrl">
                                <label class="custom-file-label" >Pilih file</label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg btn-block" @click="addloker">Kirim</button>
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
               job_service :'jobhun career hub prem',
               job_company_name : '',
               job_company_tagline : '',
               job_company_description : '',
               job_company_address : '',
               job_company_website : '',
               job_company_email: '',
               job_company_phone: '',
               job_position_sought: '',
               job_type: '',
               job_description: '',
               job_recruit_process: '',
               job_logo_url: '',
               job_transfer_url: ''

            }
        },
        methods: {
            changeLogoUrl:function (){
                this.job_logo_url = this.$refs.ref_job_logo_url.files[0];
                console.log(this.job_logo_url);
            },
            changeTranferUrl:function(){
                this.job_transfer_url= this.$refs.ref_job_transfer_url.files[0];
                console.log(this.job_transfer_url);
            },


    
            addloker: function () {
            var formData = new FormData();  
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
            formData.append('job_transfer_url', this.job_transfer_url);
          
                axios.post(this.$store.state.apiUrl + 'api/post/jobs',formData, {
                    headers : {
                        'Content-Type': 'multipart/form-data'
                        }
                        }).then(response =>{
                    let msg = response.data.message;
                    this.$swal({
                        title: "berhasil",
                        text:msg,
                        icon: "succes", 
                    });
                });
            },
              
        },


    }
</script>