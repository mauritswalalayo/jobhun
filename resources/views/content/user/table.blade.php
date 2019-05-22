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
                        <th>Nama</th>
                        <th>No. Telp</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm glyphicon glyphicon-pencil"></a>
                            <a href="" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="box-footer">
            Footer
        </div>
    </div>
@endsection