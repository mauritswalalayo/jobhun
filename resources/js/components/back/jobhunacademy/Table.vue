<template>
    <div class="box box-primary">
        <div class="box-header with-border">
        </div>
        <div class="box-body">
            <div v-if = "daftarsiswa.length > 0">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Status Pembayaran</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="siswa in daftarsiswa" :key="siswa.nama">
                            <td>1</td>
                            <td>{{siswa.name}}</td>
                            <td>{{siswa.class_name}}</td>
                            <td>4</td>
                            <td>
                                <a @click="showModalnya(siswa)" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">View</a>
                                <a @click="deleteData(siswa)" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
                            </td>

                        </tr>
                    </tbody>
                </table>
                <!--
                <input type="text" v-model="gantikelas">
                <button @click="gantikelasbuton">Ganti Kelas</button>

                <button :class="kelasbuton">hasil</button>
                <p>gantikelasbuton = {{gantikelas}}</p>
                
                <p>kelasbuton = {{kelasbuton}}</p>-->
            </div>
            <div v-else>
                <p>Tidak ada Data Pendaftar</p>
            </div>
        </div>
        <div class="box-footer">
        </div>

        <modal name="data" height="auto" :resizable
        ="true">
        
            <h2 class="text-center">Konfirmasi Pendaftar</h2>
            <form>
            <div class="box-body">
                <div class="form-group">
                    <label for="title">Nama</label>
                    <input v-model="pendaftar.name" type="text"  class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="title">Kelas</label>
                    <input v-model="pendaftar.class_name" type="text"  class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="title">Alamat Email</label>
                    <input v-model="pendaftar.email_address" type="text"  class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="title">Nomor HP</label>
                    <input v-model="pendaftar.phone" type="text"  class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="title">Bukti Transfer</label>
                    <img :src="$store.state.apiUrl + 'image/jobhun_academy/bukti_transfer/' + pendaftar.evidence_transfer">
                </div>

                    <!--<a @click="save" class="btn btn-info btn-sm glyphicon glyphicon-floppy-disk">Save</a></td>-->

            </div>


            </form>
            
        
        </modal>

    </div>

</template>

<script>
export default{
    data(){
        return {
            daftarsiswa: [],
            pendaftar: {},
            gantikelas: '',
            kelasbuton: ''
        }
    },
    mounted(){
        this.init();
    },
    methods:{
        showModalnya: function(siswa){
            this.pendaftar=_.clone(siswa);
            this.$modal.show("data");
        },
        gantikelasbuton: function(){
            this.kelasbuton = this.gantikelas;
        },
        deleteData: function(siswa){
            this.$swal({
                    title: "Konfirmasi",
                    text: "Apakah Kamu Yakin Menghapus Data Pendaftara Ini ?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                       axios.delete(this.$store.state.apiUrl + 'api/jobhunacademystudents/' + siswa.id).then(response=>{
                            let msg = response.data.message;
                            this.$swal({
                                    title: "berhasil",
                                    text:msg,
                                    icon: "succes", 
                                });

                            this.init();
                        })
                    } else {
                        this.$swal("Batal Menghapus!");
                    }
                });
        },
        init: function(){
            axios.get(this.$store.state.apiUrl + 'api/jobhunacademystudents').then(response=>{
                this.daftarsiswa = response.data.jobhunacademystudent;
            });
        }
        // // save: function(){
        // //     axios.post(this.$store.state.apiUrl + 'api/jobhunacademystudents/')

        // }
    }
}
</script>