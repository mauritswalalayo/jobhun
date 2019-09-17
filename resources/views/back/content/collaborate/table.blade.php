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

                    @php $i = $first_index; @endphp  
                    @foreach ($datacollaborate as $collaborate)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $collaborate->name }}</td>
                    <td>
                        <a href="{{url('collaborate/'.'edit/'.$collaborate->id)}}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">Edit</a>
                        <a href="{{url('collaborate/'.'delete/'.$collaborate->id)}}" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
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