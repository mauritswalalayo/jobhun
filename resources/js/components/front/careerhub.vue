<template>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading">
                <h2>Jobhun Career Hub</h2>
            </div><!-- Heading -->

            <div class="heading">
                <form >
                    <div class="row">
                        <div class="col-lg-3 col-md-3"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="job-field">
                                <input type="search" id="cari_nama" placeholder="Job title, keywords or company name" />
                                <i class="la la-keyboard-o"></i>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                            <button type="submit" id="search"><i class="la la-search"></i></button>
                        </div>
                        <div class="col-lg-3 col-md-3"></div>
                    </div>
                </form>
            </div>

            <div class="job-listings-sec">
                <div class="job-grid-sec">
                    <div class="row">
                        <div class="row" v-if="jobs.data.length > 0">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" v-for="job in jobs.data" :key="job">
                                <div class="job-grid border">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img width="300" height="300" :src="'image/logo_perusahaan/' + job.job_logo_url" alt=""></div>
                                    <h3><a :href="$store.state.apiUrl + 'loker/show/' + job.id" title="">{{job.company_name}}</a></h3>
                                        <ul class="tags-jobs">
                                        <li><i class="la la-map-marker"></i>{{job.job_company_address}}</li>
                                            <li><i class="la la-calendar-o"></i> Post Date: {{job.created_at}}</li>
                                        </ul>
                                        <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    </div>
                                <span class="job-lctn">{{job.job_company_description.substring(0,200)}}</span>
                                    <a :href="$store.state.apiUrl + 'loker/show/' + job.id" title="">Selengkapnya</a>
                                </div><!-- JOB Grid -->
                            </div><br />
                            <pagination :data="jobs" @pagination-change-page="getJobs"></pagination>
                        </div>
                        <div v-else>
                            <div class="col-md-12">
                                <span>Belum ada Lowongan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12" v-if="jobs.data.length > 0">
            <div class="browse-all-cat">
                <a href="" title="">Lihat Lainnya</a>
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default{
    data(){
        return{
            jobs: {
                data: []
            },
            perPage: 10,
        }
    },
    mounted(){
        this.getJobs();
    },
    methods: {
        getJobs: function(page = 1){
            axios.get(this.$store.state.apiUrl + 'api/job/filter/' + this.perPage + '?page=' + page).then(response=>{
                this.jobs = response.data.jobs;
                console.log(this.jobs);
            });
        }
    }
}
</script>