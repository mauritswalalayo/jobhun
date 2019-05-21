@extends('master')

@section('judul', 'Post')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('form.post')}}" class="btn btn-primary">Tambah User</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Url</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = $first_index;
                    @endphp
                    @foreach ($tambahpost as $post)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->url}}</td>
                        <td>{{$post->content}}</td>
                        <td>
                            <a href="{{url('post/'.'edit/'.$post->id)}}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil"></a>
                            <a href="{{url('post/'.'hapus/'.$post->id)}}" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{$tambahpost->links()}}
            </div>
        </div>
    </div>
@endsection