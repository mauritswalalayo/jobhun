@extends('master')

@section('judul','Tags')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('tag.table')}}" class="btn btn-danger">Kembali</a>
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
        @if (isset($edittag))
                <form action="{{url('tag/'.'update/'.$edittag->id)}}" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
            @else
                <form action="{{route('isi.tag')}}" method="POST">
        @endif
            <input type="hidden" name="_token" value="{{ csrf_token()}}">

            <div class="box-body">
                <div class="form-group">
                    <label for="name">Nama :</label>
                    <input name="name" type="text" id="name" class="form-control"
                    @if (isset($edittag)) value="{{$edittag->name}}"
                        @endif>
                </div>
            </div>
            <div class="box-footer">
                @if (isset($edittag))
                        <button type="submit" class="btn btn-warning pull-right">Edit</button>
                    @else
                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                @endif
            </div>
        </form>
    </div>
@endsection