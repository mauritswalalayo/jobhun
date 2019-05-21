@extends('master')

@section('judul', 'User')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('form.user')}}" class="btn btn-primary">Tambah User</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>No. Telp</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>Edukasi</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = $first_index;
                    @endphp
                    @foreach ($tambahuser as $user)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->sex}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->author->education}}</td>
                        <td>
                            <a href="{{url('user/'.'edit/'.$user->id)}}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil"></a>
                            <a href="{{url('user/'.'hapus/'.$user->id)}}" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{$tambahuser->links()}}
            </div>
        </div>
    </div>
@endsection