<template>
    <div>
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.2s">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Jobhun Talent Pool</h6>
                </div>
                <div class="container">
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama lengkap</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Fullname">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Lokasi tinggal saat ini</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="lokasi">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor telepon/HP</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="+63">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Berapa usiamu saat ini?</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder=" ">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Sebutkan beberapa kemampuan yang kamu kuasai!</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Jelaskan latar belakang pendidikanmu!</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Sebutkan beberapa posisi pekerjaan yang kamu minati!</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Jelaskan tentang dirimu secara singkat!</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Sebutkan dan jelaskan pengalaman kerja/proyek yang pernah kamu lakukan!</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Apa saja aktivitasmu saat ini?</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Apa kelebihan dan kekuranganmu saat bekerja?</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mengapa perusahaan harus memilih kamu?</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Unggah CV-mu</label>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Masukkan URL portfolio/profile online-mu!</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="github/www.">
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