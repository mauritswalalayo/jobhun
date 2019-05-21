@extends('master')

@section('judul', 'Author')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('form.author')}}" class="btn btn-primary">Tambah Author</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Education</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = $first_index;
                    @endphp
                    @foreach ($tambahauthor as $author)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$author->education}}</td>
                        <td>
                            <a href="{{url('author/'.'edit/'.$author->id)}}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil"></a>
                            <a href="{{url('author/'.'hapus/'.$author->id)}}" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{$tambahauthor->links()}}
            </div>
        </div>
    </div>
@endsection