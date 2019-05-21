@extends('master')

@section('judul', 'Tag')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('form.tag')}}" class="btn btn-primary">Tambah User</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Tag</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = $first_index;
                    @endphp
                    @foreach ($tambahtag as $tag)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$tag->name}}</td>
                        <td>
                            <a href="{{url('tag/'.'edit/'.$tag->id)}}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil"></a>
                            <a href="{{url('tag/'.'hapus/'.$tag->id)}}" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{$tambahtag->links()}}
            </div>
        </div>
    </div>
@endsection