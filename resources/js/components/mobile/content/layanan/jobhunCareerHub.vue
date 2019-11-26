<template>
    <div>
        <div class="row">

            <div class="col-md-12 wow fadeIn" data-wow-delay="0.2s">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Jobhun Career Hub</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="container">
                        <br>
                        <h1>{{heading}}</h1>
                        <form>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <input type="text" class="form-control" id="validationDefauld01"
                                        placeholder="Posisi yang dicari...">
                                </div>
                                <div class="col-md-5 mb-3">
                                    <select class="form-control" name="make" id="make" v-model="make">
                                        <option value="null" disabled selected>Kategori pekerjaan</option>
                                        <option v-for="opt in makes_options" :key="opt.id" :value="opt.id">{{opt.text}}
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <select class="form-control" name="city" id="city" v-model="city">
                                        <option value="null" disabled selected>Kota</option>
                                        <option v-for="citys in citys_options" :key="citys.id" :value="citys.id">
                                            {{citys.text}}</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-search">
                                            Search</i></button>
                                            <p></p>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="container">
                <div v-for="job in jobs.data" :key="job.id" class="card flex-row flex-wrap">
                    <div class="card-header border-0">
                        <img :src="$store.state.apiUrl + 'image/logo_perusahaan/' + job.job_logo_url" style="width:100px;height:100px" alt="">
                    </div>
                    <div class="card-block px-2">
                        <h4 class="card-title"><b>{{job.job_company_name}}</b></h4>
                        <p class="card-text"><i class="fas fa-map-marker-alt"></i> Surabaya<br>Posisi: {{job.job_position_sought}}</p>
                        <router-link :to="'carrerHubDetail/' + job.id" class="btn btn-primary btn-sm">
                            {{job.job_type}}
                        </router-link>
                        <p></p>
                    </div>
                    <div class="w-100"></div>
                    <div class="card-footer w-100 text-muted">
                        
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <router-link to="pasang-loker"><button type="button" class="btn btn-success">Posting Loker</button>
                </router-link>
            </div>
            <br>
            <br>

        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                jobs: {},
                perpage: 9,


                //dropdown category
                heading: '',
                make: null,
                makes_options: [],

                //dropdown kota

                city: null,
                citys_options: [],



            }
        },
        mounted() {
            this.getData();
            this.init();

        },
        methods: {
            getData: function (page = 1) {
                axios.get(this.$store.state.apiUrl+'api/job/filter/' + this.perpage + '?page=' + page).then(
                    response => {
                        console.log(response.data);
                        this.jobs = response.data.jobs;
                    });
            },

            //dropdown category
            init: function () {

                this.makes_options = [{
                        text: 'Fulltime',
                        id: 1
                    },
                    {
                        text: 'Freelance',
                        id: 2
                    },
                    {
                        text: 'Volunteer',
                        id: 3
                    },
                    {
                        text: 'Internship',
                        id: 4
                    }
                ];

                this.citys_options = [{
                        text: 'surabaya',
                        id: 1
                    },
                    {
                        text: 'Jakarta',
                        id: 2
                    },
                    {
                        text: 'Bali',
                        id: 3
                    },
                    {
                        text: 'Mojokerto',
                        id: 4
                    },
                    {
                        text: 'Gresik',
                        id: 5
                    },
                    {
                        text: 'Madura',
                        id: 6
                    },


                ]

            },
        }

    }
</script>