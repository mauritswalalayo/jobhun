@extends('master')

@section('title', 'Form User')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('user.table')}}" class="btn btn-danger">Kembali</a>
        </div>
        <div class="box-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        </div>
        
    <form action="{{route('user.add')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input name="name" type="text" id="name" class="form-control" placeholder="Masukan Nama Anda......">
                </div>
                <div class="form-group">
                    <label for="phone">No. Telp :</label>
                    <input name="phone" type="text" id="phone" class="form-control" placeholder="Masukan Nomor HP Anda......">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input name="email" type="email" id="email" class="form-control" placeholder="Masukan Email Anda......">
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input name="password" type="password" id="password" class="form-control" placeholder="Masukan Password Anda......">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>
        </form>
        <!-- /.box-footer-->
    </div>
@endsection