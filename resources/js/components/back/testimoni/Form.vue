<template>
    <div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="" class="btn btn-danger">Kembali</a>
            </div>
            <div class="box-body">
                <div class="alert alert-danger">
                    <ul>
                        <li></li>
                    </ul>
                </div>

            </div>

            <form action="">
                <!-- <input type="hidden" name="_method" value="PATCH"> -->

                <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
                    <input type="hidden" name="_token" value="">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Nama :</label>
                            <input name="name" type="text" id="name" class="form-control"
                                placeholder="Masukan Nama Anda......">
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Profesi :</label>
                            <input name="profesi"  type="text" id="profesi"
                                class="form-control" placeholder="Masukan Profesi Anda......">
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Testimoni :</label>
                            <textarea name="testimoni" id="testimoni" cols="30" rows="10" class="form-control">  </textarea>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Foto :</label>
                            <input type="file" name="foto" id="foto" cols="30" rows="10" class="form-control">
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Update</button>
                    </div>
                </form>
        </div>
    </div>
</template>
