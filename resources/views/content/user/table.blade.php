@extends('master')

@section('title','User')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('user.form')}}" class="btn btn-primary">Tambah User</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>No. Telp</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = $first_index;
                    @endphp
                    @foreach ($daftar_user as $user)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{url('user/'.'edit/'.$user->id)}}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">Edit</a>
                            <a href="{{url('user/'.'hapus/'.$user->id)}}" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="box-footer">
            Footer
        </div>
    </div>
@endsection