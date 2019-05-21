@extends('master')

@section('judul', 'Tambah Data')

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
            <form action="{{route('isi.user')}}" method="POST">
        @endif
                <input type="hidden" name="_token" value="{{ csrf_token()}}">

            <div class="box-body">
                <div class="form-group">
                    <label for="name">Nama :</label>
                    <input name="name" type="text" id="name" class="form-control"
                    @if (isset($edituser)) value="{{$edituser->name}}"
                        @endif>
                </div>

                <div class="form-group">
                    <label for="phone">No. Telp :</label>
                    <input name="phone" type="text" id="phone" class="form-control" @if (isset($edituser)) value="{{$edituser->phone}}"
                        @endif>
                </div>

                <div class="form-group">
                    <label for="sex">Jenis Kelamin :</label>
                    <select name="sex" id="sex" class="form-control" @if (isset($edituser)) value="{{$edituser->sex}}"
                        @endif>>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email :</label>
                    <input name="email" type="text" id="email" class="form-control" @if (isset($edituser)) value="{{$edituser->email}}"
                        @endif>
                </div>

                <div class="form-group">
                    <label for="password">Password :</label>
                    <input name="password" type="password" id="password" class="form-control" @if (isset($edituser)) value="{{$edituser->password}}"
                        @endif>
                </div>

                <div class="form-group">
                    <label for="education">Education :</label>
                    <input name="education" type="text" id="education" class="form-control" @if (isset($edituser)) value="{{$edituser->author->education}}"
                    @endif>
                </div>
            </div>
            <div class="box-footer">
                @if (isset($edituser))
                    <button type="submit" class="btn btn-warning pull-right">Edit</button>
                @else
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                @endif
            </div>
        </div>
        </form>
@endsection