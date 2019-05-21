<!DOCTYPE html>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<html>
<head>
    <!-- begin link -->
        @include ('partials_admin.link')
    <!-- end link -->
</head>

    <!-- begin head gusti -->
        @include('partials_admin.head')
    <!-- end begin -->


    <!-- Left side column. contains the logo and sidebar -->
        @include('partials_admin.sidebar')
    <!-- Left side column. contains the logo and sidebar -->   

    <!-- begin content -->
        @yield('isi')
    <!-- end content -->

    <!-- begin footer -->
        @include('partials_admin.footer')
    <!-- end footer -->

    <!-- Control Sidebar -->
        @include('partials_admin.control_sidebar')
    <!-- end control sidebar -->

    <!-- script -->
        @include('partials_admin.script')
    <!-- end script -->
</html>


