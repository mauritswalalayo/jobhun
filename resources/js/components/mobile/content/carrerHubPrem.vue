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
                                placeholder="nama perusahaan" v-model="company_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tagline perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="tagline" v-model="company_tagline">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Informasi tentang perusahaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="description_company"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jl." v-model="company_address">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Website perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="www.perusahaan.com" v-model="company_website">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="perusahaan@gmail.com" v-model="company_email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor telepon perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" v-model="company_phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Posisi - posisi yang dicari</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" v-model="position_sought">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Jenis pekerjaan</label>
                            <select class="form-control" v-model="type_work">
                                <option value="Full time">Full time</option>
                                <option value="Part time">Part time</option>
                                <option value="Freelance">Freelance</option>       
                                <option value="Internship">Internship</option>       
                                <option value="Volunteer">Volunteer</option>       
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi masing - masing Pekerjaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="description_job">Pekerjaan yang akan dilakukan:
Syarat dan kualifikasi:
Kemampuan dan kompetensi yang harus dimiliki:
Lokasi kerja:
Waktu bekerja:</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Tentang proses rekrut</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="recruit_process">Cara mengirimkan lamaran:
Batas waktu melamar:
Waktu proses rekrut.</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Logo Perusahaan</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" ref="inputLogo" @change="addLogo">
                                <label class="custom-file-label" >Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Bukti Transfer</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" ref="inputTransfer" @change="addTransfer">
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
                company_name:"Club",
                company_tagline:"Air minum dalam gelas",
                description_company:" perusahaan air minum sehat",
                company_address:"Surabaya",
                company_website:"www.club.com",
                company_email:"club@gmail.com",
                company_phone:"081234556",
                position_sought:"Web development",
                type_work:"Full time",
                description_job:"yang bisa ngoding",
                recruit_process:"wawancara",
                logo_url: null,
                evidence_transfer: null
            }
        },
        methods: {
            addloker: function () {
                var formData = new FormData();
                formData.append('commpany_name', this.company_name);
                formData.append('company_tagline', this.company_tagline);
                formData.append('description_company', this.description_company);
                formData.append('company_address', this.company_address);
                formData.append('company_website', this.company_website);
                formData.append('company_email', this.company_email);
                formData.append('company_phone', this.company_phone);
                formData.append('position_sought', this.position_sought);
                formData.append('type_work', this.type_work);
                formData.append('description_job', this.description_job);
                formData.append('recruit_process', this.recruit_process);
                formData.append('logo_url', this.logo_url);
                formData.append('evidence_transfer', this.evidence_transfer);
                
                axios.post('https://192.168.11.3/jobhun/public/api/post/job/premium',
                formData, {headers : {'Content-Type': 'multipart/form-data'}} 
                
                ).then(response =>{
                    console.log(response.data);

                    
                }).catch(error =>{
                    console.log(error.response);
                })
                
            },
            addLogo: function () {
                this.logo_url = this.$refs.inputLogo.files[0];
            },
            addTransfer: function () {
                this.evidence_transfer = this.$refs.inputTransfer.files[0];
            }
            
        },


    }
</script>