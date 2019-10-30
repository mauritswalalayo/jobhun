<template>
    <div>
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.2s">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir Kerja Sama Media Partner</h6>
                </div>
                <div class="container">
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama acara</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Startup Indonesia">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal pelaksanaan</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                placeholder="Startup Indonesia">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Penyelenggara</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nama penyelenggara">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi acara</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Proposal Acara</label>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Pilihan Paket Kerjasama</label>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Reguler</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">Premium</label>
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