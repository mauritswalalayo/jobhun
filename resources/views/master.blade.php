<!DOCTYPE html>
<html>

<head>
    @include('partial.head')
</head>

<body class="hold-transition skin-purple sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        @include('partial.header')

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        @include('partial.aside')

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Content @yield('judul')
                    <!-- <small>it all starts here</small> -->
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                @yield('content')
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        {{-- @include('partial.footer') --}}

        <!-- Control Sidebar -->
        {{-- @include('partial.control') --}}
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    @include('partial.foot')
</body>

</html>