@extends('master')

@section('title', 'Form Post')

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
    <form action="{{route('user.add')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="box-body">
            <div class="form-group">
                <label for="title">Judul :</label>
                <input name="title" type="text" id="title" class="form-control" placeholder="Masukan Title Anda......">
            </div>
            <div class="form-group">
                <label for="content">Isi Konten :</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
    </form>
    <!-- /.box-footer-->
</div>
@endsection