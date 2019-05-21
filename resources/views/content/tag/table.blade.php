@extends('master')

@section('title','Tag')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('tag.form')}}" class="btn btn-primary">Tambah Tag</a>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name Tag</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kariepedia</td>
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