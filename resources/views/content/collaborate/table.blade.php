@extends('master')

@section('title','Collaborate')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('collaborate.form')}}" class="btn btn-primary">Tambah Collaborate</a>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>TVRI</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">Edit</a>
                        <a href="" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
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