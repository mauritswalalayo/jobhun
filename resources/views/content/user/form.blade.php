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

        @if (isset($edituser))
            <form action="{{url('user/'.'update/'.$edituser->id)}}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
        @else
            <form action="{{route('user.add')}}" method="POST">
        @endif
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input name="name" type="text" id="name" class="form-control" placeholder="Masukan Nama Anda......"
                    @if (isset($edituser)) value="{{$edituser->name}}"
                        @endif>
                </div>
                <div class="form-group">
                    <label for="phone">No. Telp :</label>
                    <input name="phone" type="text" id="phone" class="form-control" placeholder="Masukan Nomor HP Anda......"
                    @if (isset($edituser)) value="{{$edituser->phone}}"
                        @endif>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input name="email" type="email" id="email" class="form-control" placeholder="Masukan Email Anda......"
                    @if (isset($edituser)) value="{{$edituser->email}}"
                        @endif>
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input name="password" type="password" id="password" class="form-control" placeholder="Masukan Password Anda......"
                    @if (isset($edituser)) value="{{$edituser->password}}"
                        @endif>
                </div>
            </div>
            <div class="box-footer">
                @if (isset($edituser))
                    <button type="submit" class="btn btn-warning pull-right">Update</button>
                @else
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                @endif
            </div>
        </form>
        <!-- /.box-footer-->
    </div>
@endsection