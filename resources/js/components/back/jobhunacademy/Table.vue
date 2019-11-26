<template>
    <div class="box box-primary">
        <div class="box-header with-border">
        </div>
        <div class="box-body">
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
                            <a @click="showModalnya" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="box-footer">
        </div>
        <modal name="arjun-world">
            <h2>>hello, world!</h2>
        </modal>
    </div>

</template>
<script>
export default{
    data(){
        return {
            daftarsiswa: []
        }
    },
    mounted(){
        axios.get(this.$store.state.apiUrl + 'api/jobhunacademystudents').then(response=>{
            this.daftarsiswa = response.data.jobhunacademystudent;
        });
        
    },
    methods:{
        showModalnya: function(){
            this.$modal.show("arjun-world");
        }
    }
}
</script>