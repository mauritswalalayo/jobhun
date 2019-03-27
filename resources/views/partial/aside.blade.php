<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">DAFTAR MENU</li>

            <li class="treeview">
              <a href="{{route('home')}}">
                <i class="glyphicon glyphicon-home"></i> <span>Home</span>
                {{-- <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span> --}}
              </a>

              <li class="treeview">
                <a href="{{route('profil')}}">
                  <i class="glyphicon glyphicon-user"></i> <span>Profil</span>
              </a>


              {{-- <ul class="treeview-menu">
                <li><a href="{{route('tag')}}"><i class="fa fa-circle-o"></i> Tag</a></li>  

              </ul>   --}}

              <!--<ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>-->
            </li>

            <li class="treeview">
                <a href="{{route('user')}}">
                  <i class="fa fa-user"></i> <span>User</span>
                  <span class="pull-right-container"> 
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

                <ul class="treeview-menu">
                  <li><a href="{{route('user')}}"><i class="fa fa-users"></i>Data User</a></li>
                  <li><a href="{{route('tambahuser')}}"><i class="fa fa-plus"></i>Tambah User</a></li>
                  
                </ul>

              </li>

              <li class="treeview">
                  <a href="{{route('profil')}}">
                    <i class="fa fa-tag"></i> <span>Tag</span>
                    <span class="pull-right-container"> 
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu"> 
                    <li><a href="{{route('tag')}}"><i class="fa fa-tags"></i> Data Tag</a></li>
                    <li><a href="{{route('tambahtag')}}"><i class="fa fa-plus"></i> Tambah Tag</a></li>
                  </ul>
                </li>

                
              <li class="treeview">
                  <a href="{{route('setting')}}">
                    <i class="glyphicon glyphicon-cog"></i> <span>Setting</span>
                </a>
  
    
            <li class="treeview">
              <a href="{{route('login')}}">
                <i class="fa fa-share"></i> <span>Logout</span>
                
                {{-- <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span> --}}
              </a>

              {{-- <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li> --}}
    
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>