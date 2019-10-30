<template>
    <div>
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.2s">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir Jobhun Career Hub Reguler</h6>
                </div>
                <div class="container">
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="nama perusahaan">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tagline perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="tagline">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Informasi tentang perusahaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jl.">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Website perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="www.perusahaan.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="perusahaan@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor telepon perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Posisi - posisi yang dicari</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Jenis pekerjaan</label>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">Full time</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Part time</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Freelance</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Internship</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Volunteer</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi Pekerjaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="">Pekerjaan yang akan dilakukan:
Syarat dan kualifikasi:
Kemampuan dan kompetensi yang harus dimiliki:
Lokasi kerja:
Waktu bekerja:</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Tentang proses rekrut</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="">Cara mengirimkan lamaran:
Batas waktu melamar:
Waktu proses rekrut.</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Unggah Poster</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Bukti Transfer</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
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