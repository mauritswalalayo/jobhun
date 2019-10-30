<template>
    <div>
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.2s">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Registrasi Jobhun Academy</h6>
                </div>
                <div class="container">
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama lengkap</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Pilihan kelas</label>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">Content Writer</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Graphic Designer‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Videographer‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Web Developer‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Android Developer‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">UI/UX Designer‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Copywriter‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Social Media Specialist‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Public Speaker‎</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Startup Founder‎</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat Email</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="contoh@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor Hp</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="+62">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Bukti Transfer</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi Pekerjaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value=""></textarea>
                        </div>

                        <button type="button" class="btn btn-primary btn-lg btn-block">Kirim</button>
                        <br>
                    </form>
                </div>
            </div>

        </div>
    </div>
</template>
<script>
export default {

}
</script>