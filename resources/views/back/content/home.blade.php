@extends('master')

@section('title', 'Dashboard Admin')

@section('content')
    <!-- Default box -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Selamat Datang</h3>
        </div>
        <div class="box-body">
            @if(session('pesan'))
                <div class="alert alert-danger">{{session('pesan')}}</div>
            @endif
            Dashboard Aplikasi Jobhun. Silahkan melakkukan operasi dimenu sebelah kiri.
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
@endsection