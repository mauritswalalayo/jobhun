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
                            <label for="exampleFormControlInput1">Pilihan Kelas</label>
                            <select class="form-control" v-model="class_name">
                                <option value="jobhun Academy: Content Writer" selected>Content Writer</option>
                                <option value="jobhun Academy: Graphic Designer‎">Graphic Designer‎</option>
                                <option value="jobhun Academy: Videographer‎">Videographer‎</option>
                                <option value="jobhun Academy: Web Developer‎" selected>Web Developer‎</option>
                                <option value="jobhun Academy: Android Developer‎">Android Developer‎</option>
                                <option value="jobhun Academy: UI/UX Designer‎">UI/UX Designer‎</option>
                                <option value="jobhun Academy: Copywriter‎">Copywriter‎</option>
                                <option value="jobhun Academy: Social Media Specialist‎‎">Social Media Specialist‎</option>
                                <option value="jobhun Academy: Public Speaker‎">Public Speaker‎</option>
                                <option value="jobhun Academy: Startup Founder‎‎">Startup Founder‎</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Email" v-model="email_address">
                        </div>
                        <div class="form-group flex-nowrap">
                            <label for="">Nomor Hp</label>
                            <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+62</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                    placeholder="">
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Bukti Transfer</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" @change="changeevidence_transfer" ref="ref_evidence_transfer">
                            </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Status Pembayaran</label>
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
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value=""
                                v-model="information"></textarea>
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
        data() {
            return {
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
            changeevidence_transfer() {
                this.evidence_transfer = this.$refs.ref_evidence_transfer.files[0];
                console.log(this.evidence_transfer);
            },
            addAcademy() {
                let formData = new FormData();

                formData.append('name', this.name);
                formData.append('class_name', this.class_name);
                formData.append('email_address', this.email_address);
                formData.append('phone', this.phone);
                formData.append('evidence_transfer', this.evidence_transfer);
                formData.append('payment_status', this.payment_status);
                formData.append('information', this.information);

                axios.post(this.$store.state.apiUrl + 'api/form/jobhun-academy/daftar', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }).then(response => {
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