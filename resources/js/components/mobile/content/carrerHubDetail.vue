<template>
    <div>
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
    <div class="card-header">Informasi Pekerjaan</div>
    <div class="card-body">
         <img class="card-img-top" :src="$store.state.apiUrl + 'image/logo_perusahaan/' + job.job_logo_url" style="display: block;margin-left: auto;margin-right: auto; width:100px; height:100px">
         
         
  <table class="table text-center">
    <tr>{{job.job_company_name}}</tr>
    <tr>{{job.job_company_website}}</tr>
  </table>
        <p><i class="fas fa-briefcase"></i> {{job.job_position_sought}}</p>
        <p><i class="fas fa-business-time"></i> {{job.job_type}} </p>
        <p><i class="fas fa-phone-alt"></i> {{job.job_company_phone}}</p>
        <p><i class="fas fa-envelope"></i> {{job.job_company_email}}</p>        

    </div>
    </div>
    <br>

    <div class="card">
    <div class="card-header">Deskripsi pekeerjaan</div>
    <div class="card-body">
    <p class="card-text"><i class="fas fa-lightbulb"></i> {{job.job_company_description}}</p>
    </div>
    </div>
    <br>

    <div class="card">
    <div class="card-header">Lokasi Kerja</div>
    <div class="card-body">
    <h5 class="card-title"><i class="fas fa-map-marked-alt"></i> Alamat</h5>
    
    <p class="card-text"> {{job.job_company_address}}</p>
    </div>
    </div>
    
    <br>

        <router-link to="/jobhun-careerHub" class="btn btn-primary btn-lg btn-block"><i class="fas fa-paper-plane"></i> Lamar Sekarang</router-link>
        <router-link to="/jobhun-careerHub" class="btn btn-secondary btn-lg btn-block">Lihat Lowongan Lain</router-link>
    
    </div>
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