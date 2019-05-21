<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="public/assets/dist/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Jobhun</p>
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>

      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

       <li>
          <a href="">
            <i class=""></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        
         
        <li class="treeview">
          <a href="">
            <span>User</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.create')}}"><i class="fa fa-circle-o"></i> Add User</a></li>
            <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> Show User</a></li>
          </ul>
        </li> 


        <li class="treeview">
          <a href="#">
            <span>Tag</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('tag.index')}}"><i class="fa fa-circle-o"></i> Show Tag</a></li>
          </ul>
        </li> 

        <li>
          <a href="{{route('logout')}}">
            <i class=""></i><span>Logout</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
      </ul> 
    </section>
    <!-- /.sidebar -->
</aside> -->