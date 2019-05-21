<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="{{route('home')}}">
                    <i class="fa fa-dashboard"></i> <span>Home</span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{route('user.table')}}">
                    <i class="fa fa-users"></i> <span>Users</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{route('author.table')}}">
                    <i class="glyphicon glyphicon-asterisk"></i> <span>Author</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{route('post.table')}}">
                    <i class="glyphicon glyphicon-list-alt"></i> <span>Posts</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{route('tag.table')}}">
                    <i class="glyphicon glyphicon-tags"></i> <span>Tags</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
        </ul>
    </section>
</aside>