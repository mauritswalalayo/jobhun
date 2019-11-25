<template>
    <div>
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.2s">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Registrasi Jobhun Academy</h6>
                </div>
                <div class="container">
                    <br>
                    <form @submit.prevent="addAcademy">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama lengkap</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nama lengkap" v-model="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Pilihan kelas</label>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="jobhun Academy: Content Writer" v-model="class_name">
                                <label class="form-check-label" for="inlineRadio1">Content Writer</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="jobhun Academy: Graphic Designer" v-model="class_name">
                                <label class="form-check-label" for="inlineRadio2">Graphic Designer‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="jobhun Academy: Videographer" v-model="class_name">
                                <label class="form-check-label" for="inlineRadio2">Videographer‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="jobhun Academy: Web Developer" v-model="class_name">
                                <label class="form-check-label" for="inlineRadio2">Web Developer‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="jobhun Academy: Android Developer" v-model="class_name">
                                <label class="form-check-label" for="inlineRadio2">Android Developer‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="jobhun Academy: UI/UX Designer" v-model="class_name">
                                <label class="form-check-label" for="inlineRadio2">UI/UX Designer‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="jobhun Academy: Copywriter" v-model="class_name">
                                <label class="form-check-label" for="inlineRadio2">Copywriter‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="jobhun Academy: Social Media Specialist" v-model="class_name">
                                <label class="form-check-label" for="inlineRadio2">Social Media Specialist‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="jobhun Academy: Public Speaker" v-model="class_name">
                                <label class="form-check-label" for="inlineRadio2">Public Speaker‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="jobhun Academy: Startup Founder" v-model="class_name">
                                <label class="form-check-label" for="inlineRadio2">Startup Founder‎</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat Email</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="contoh@gmail.com" v-model="email_address">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor Hp</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="+62" v-model="phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Bukti Transfer</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" @change="changeevidence_transfer" ref="ref_evidence_transfer">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Pilihan kelas</label>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="1" v-model="payment_status">
                                <label class="form-check-label" for="inlineRadio1">LUNAS</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="0" v-model="payment_status">
                                <label class="form-check-label" for="inlineRadio2">DICICIL</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi Pekerjaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="" v-model="information"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
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
            name: '',
            class_name: '',
            email_address: '',
            phone: '',
            evidence_transfer: '',
            payment_status: '',
            information: ''

        }
    },
    methods: {
        changeevidence_transfer(){
            this.evidence_transfer = this.$refs.ref_evidence_transfer.files[0];
            console.log(this.evidence_transfer);
        },
        addAcademy(){
            let formData = new FormData();
            
            formData.append('name', this.name);
            formData.append('class_name', this.class_name);
            formData.append('email_address', this.email_address);
            formData.append('phone', this.phone);
            formData.append('evidence_transfer', this.evidence_transfer);
            formData.append('payment_status', this.payment_status);
            formData.append('information', this.information);
            
            axios.post(this.$store.state.apiUrl + 'api/form/jobhun-academy/daftar', formData,
            {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(response=>{
                let msg= response.data.message;
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