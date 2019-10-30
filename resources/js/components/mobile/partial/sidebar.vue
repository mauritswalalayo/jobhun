<template>
    <div>
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <img src="asset/img/jobhun_putih.png" class="wow zoomIn" data-wow-delay="0.1" alt="" srcset="" style="width: 95px; height:50px" >
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <!-- <li class="nav-item active wow fadeInLeft" data-wow-delay="0.4s">
                <router-link to="tentangJobhun">
                <a class="nav-link" href="">
                    <i class="fas  fa-address-card"></i>
                    <span>Tentang Jobhun</span></a>
                </router-link>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- <div class="sidebar-heading">
                Interface
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active wow fadeInLeft" data-wow-delay="0.6s">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-tasks"></i>
                    <span>Layanan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <router-link to="jobhun-careerHub">
                            <a class="collapse-item">Jobhun Career Hub</a>
                        </router-link>

                        <router-link to="jobhun-academy">
                            <a class="collapse-item" href="">Jobhun Academy</a>
                        </router-link>

                        <router-link to="jobhun-mediaPatner">
                            <a class="collapse-item" href="">Media Partner</a>
                        </router-link>
                        
                        <router-link to="jobhun-talentPool">
                            <a class="collapse-item" href="">Jobhun Talent Pool</a>
                        </router-link>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item active wow fadeInLeft" data-wow-delay="0.8s">
                <router-link to="pasang-loker">
                    <a class="nav-link" href="">
                    <i class="fas fa-users-cog"></i>
                    <span>Pasang Loker</span></a>
                </router-link>

            </li>

            <!-- Nav Item - Charts -->

            <!-- Nav Item - Tables -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline wow fadeInLeft" data-wow-delay="1s">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
    </div>
</template>


<script>

</script>
