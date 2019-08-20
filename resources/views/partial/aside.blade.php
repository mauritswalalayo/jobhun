<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="{{route('beranda')}}">
                    <i class="glyphicon glyphicon-home"></i> <span>Beranda</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{route('user.table')}}">
                    <i class="glyphicon glyphicon-user"></i> <span>Pengguna</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{route('post.table')}}">
                    <i class="glyphicon glyphicon-list-alt"></i> <span>Post</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{route('tag.table')}}">
                    <i class="glyphicon glyphicon-tags"></i> <span>Tag</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{route('testimoni.table')}}">
                    <i class="glyphicon glyphicon-comment"></i> <span>Testimoni</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>


            <li class="treeview">
                <a href="{{route('collaborate.table')}}">
                    <i class="glyphicon glyphicon-envelope"></i> <span>Collaborate</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            <li class="treeview">
                    <a href="#">
                      <i class="glyphicon glyphicon-briefcase"></i> <span>Loker</span>
                      <span class="pull-right-container"> 
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
    
                    <ul class="treeview-menu">
                      <li><a href="{{route('loker.table',['verified_status'=>0])}}"><i class="glyphicon glyphicon-star"></i>Loker Baru</a></li>
                      <li><a href="{{route('loker.table',['verified_status'=>1])}}"><i class="glyphicon glyphicon-check"></i>Loker Terverifikasi</a></li>
                      
                    </ul>
    
                  </li>

            


            <li class="treeview">
                <a href="{{route('mediapartner.table')}}">
                    <i class="glyphicon glyphicon-gift"></i> <span>Media Partner</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>