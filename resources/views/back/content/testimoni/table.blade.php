@extends('back.master')

@section('title','Testimoni')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('testimoni.form')}}" class="btn btn-primary">Tambah Testimoni</a>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Testimoni</th>
                    <th>Profesi</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @php $i = $first_index; @endphp
                @foreach($daftar_testimoni as $testimoni)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$testimoni->name}}</td>
                    <td>{{$testimoni->testimoni}}</td>
                    <td>{{$testimoni->profesi}}</td>
                    <td>
                        <a href="{{url('testimoni/'.'edit/'.$testimoni->id)}}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">Edit</a>
                        <a href="{{url('testimoni/'.'delete/'.$testimoni->id)}}" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
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