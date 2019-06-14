@extends('master')

@section('title','Testimoni')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="" class="btn btn-primary">Tambah Testimoni</a>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Testimoni</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
         
                <tr>
                    <td>1</td>
                    <td>Gusti Adistriani</td>
                    <td>Jobhun memang top banget</td>
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