@extends('master')

@section('judul', 'Post')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('post.table')}}" class="btn btn-danger">Kembali</a>
        </div>
        <div class="box-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        @if (isset($editpost))
            <form action="{{url('post/'.'update/'.$editpost->id)}}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
        @else
            <form action="{{route('isi.post')}}" method="POST">
        @endif
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="title">Title :</label>
                    <input name="title" type="text" id="title" class="form-control"
                    @if (isset($editpost)) value="{{$editpost->title}}"
                        @endif>
                </div>
                <div class="form-group">
                    <label for="content">Content :</label>
                    <textarea name="content" id="content" class="form-control" cols="30" rows="10">@if (isset($editpost)) {{$editpost->content}}
                    @endif</textarea>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Simpan Data</button>
            </div>
        </form>
    </div>
@endsection