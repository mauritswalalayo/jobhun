<template>
    <div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <a :href="$store.state.apiUrl + 'testimoni/table'" class="btn btn-danger">Kembali</a>
            </div>
            <div class="box-body">
                <div class="alert alert-danger">
                    <ul>
                        <li></li>
                    </ul>
                </div>

            </div>

            <form @submit.prevent="addTestimoni">
                <!-- <input type="hidden" name="_method" value="PATCH"> -->

                <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
                    <input type="hidden" name="_token" value="">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Nama :</label>
                            <input v-model="name" type="text" id="name" class="form-control"
                                placeholder="Masukan Nama Anda......">
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Profesi :</label>
                            <input v-model="profesi"  type="text" id="profesi"
                                class="form-control" placeholder="Masukan Profesi Anda......">
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Testimoni :</label>
                            <textarea v-model="testimoni" id="testimoni" cols="30" rows="10" class="form-control">  </textarea>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Foto :</label>
                            <input type="file" @change="changeFotoUrl" ref="ref_foto_url" id="foto" cols="30" rows="10" class="form-control">
                        </div>
                    </div>

                    <div class="box-footer">
                        <!-- <button type="submit" class="btn btn-info pull-right">Tambah</button> -->
                        <a :href="$store.state.apiUrl + 'testimoni/table'" class="btn btn-primary" type="submit">Tambah Testimoni</a>
                    </div>
                </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: '',
            profesi: '',
            testimoni: '',
            foto: ''
        }
    },
    methods: {
            changeFotoUrl: function() {
                this.foto = this.$refs.ref_foto_url.files[0];
                console.log(this.foto);
            },
            addTestimoni: function() {
                let formData = new FormData();
                formData.append('name', this.name);
                formData.append('profesi', this.profesi);
                formData.append('testimoni', this.testimoni);
                formData.append('foto', this.foto);

                axios.post(this.$store.state.apiUrl + 'testimoni/add',formData,
                {
                    headers: {
                        'Content-Type' : 'multipart/form-data'
                    }
                }).then(response=>{
                    let msg = response.data.message;
                    this.$swal({
                        title: "Berhasil",
                        text: msg,
                        icon: "success",
                    });
                });
            },
            testin: function(){
                alert("wow");
            }
        }
}
</script>
