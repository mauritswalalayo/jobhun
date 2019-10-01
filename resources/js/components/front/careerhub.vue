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
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="job-field">
                                <input type="search" id="cari_nama" placeholder="Job title, keywords or company name" />
                                <i class="la la-keyboard-o"></i>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                            <button type="submit" id="search"><i class="la la-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="job-listings-sec">
                <div class="job-grid-sec">
                    <div class="row">
                        <div id="data_loker"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="browse-all-cat">
                <a href="{{ route ('jch')}}" title="">Lihat Lainnya</a>
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default{
    data(){
        return{

        }
    }
}
</script>