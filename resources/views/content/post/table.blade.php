@extends('master')

@section('title','Post')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('post.form')}}" class="btn btn-primary">Tambah Post</a>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Url</th>
                    <th>Isi Konten</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = $first_index;
                @endphp

                @foreach ($daftar_post as $post)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$post->title}}</td>
                    <td></td>
                    <td>{{$post->content}}</td>
                    <td>
                        <a href="{{url('post/'.'edit/'.$post->id)}}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil"></a>
                        <a href="" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer">
    </div>
</div>
@endsection