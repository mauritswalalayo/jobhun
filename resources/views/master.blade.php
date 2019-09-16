<!DOCTYPE html>
<html>

<head>
    <!-- Partial / Head-->
    @include('partial.head')
</head>

<body class="hold-transition skin-purple sidebar-mini">
    <div id="app">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Partial / Header -->
            @include('partial.header')

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <!-- Partial / Aside -->
            @include('partial.aside')

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Content @yield('title')
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Default box -->
                    {{-- <script src="{{asset('admin/bootstrap/js/sweetalert.min.js')}}"></script> --}}


                    @yield('content')
                    <!-- /.box -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Partial / Footer -->
            {{-- @include('partial.footer') --}}

            <!-- Control Sidebar -->
            <!-- Partial / Control -->
            {{-- @include('partial.control') --}}
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
    </div>
    <!-- Partial / Foot -->
    @include('partial.foot')
</body>

</html>
