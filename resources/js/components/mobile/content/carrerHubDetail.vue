<template>
    <div class="container">
        <!-- <p>{{job.id}}</p>
        <p>{{job.job_company_name}}</p>
        <p>{{job.job_company_tagline}}</p>
        <p>{{job.job_company_description}}</p>
        <p>{{job.job_company_website}}</p>

        <input type="text" v-model="kata">
        <p>{{alertMisuh}}</p>
        -->

        
   
    <div class="card">
    <div class="card-header">carrerhubDetail</div>
    <div class="card-body">
         <img class="card-img-top" :src="$store.state.apiUrl + 'image/logo_perusahaan/' + job.job_logo_url" style="width:100%">
         <br> <br>
         
  <table class="table text-center">
    <tr>{{job.job_company_name}}</tr>
    <tr>{{job.job_company_website}}</tr>
  </table>

        <p>{{job.job_position_sought}}</p>
        <p>{{job.job_type}}</p>
        <p>{{job.job_company_phone}}</p>
        <p>{{job.job_company_mail}}</p>        

    </div>
    </div>
    <br>

    <div class="card">
    <div class="card-header">Deskripsi pekeerjaan</div>
    <div class="card-body">
    <p class="card-text">{{job.job_company_description}}</p>
    </div>
    </div>
    <br>

    <div class="card">
    <div class="card-header">Lokasi Kerja</div>
    <div class="card-body">
    <h5 class="card-title">Alamat</h5>
    <p class="card-text">{{job.job_company_address}}</p>
    </div>
    </div>
    
    <br>
        <button class="btn btn-success btn-lg btn-block">Daftar</button>
        <button class="btn btn-secondary btn-lg btn-block">Daftar</button>
    
    </div>
  
    
</template>

<script>
export default {
    data(){
        return{
            job_id: 0,
            job: {},
            kata: ''
        }
    },

     mounted() {
        this.job_id = this.$route.params.idprek;
        this.getData(this.job_id);
    },

   methods: {
            getData: function (id) {
                axios.get(this.$store.state.apiUrl + 'api/job/' + id).then(
                    response => {
                        console.log(response.data.job);
                        this.job = response.data.job;
                    });

            }
       },

    computed: {/*
        alertMisuh: function(){
            if(this.kata == 'oces' || this.kata=='arjun' || this.kata=='boy'){
                return 'Wah, Anda Misuh!!!';
            }
            else{
                return 'kalimat yang sungguh indah';
            }
        }*/
    }

}
</script>