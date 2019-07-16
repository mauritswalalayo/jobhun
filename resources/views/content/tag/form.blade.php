@extends('master')

@section('title', 'Form Tag')

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

    @if (isset($edit_tag))
        <form action="{{url('tag/'.'update/'.$edit_tag->id)}}" method="POST">
        <input type="hidden" name="_method" value="PATCH">
    @else
    <form action="{{route('tag.add')}}" method="POST">
    @endif
        <input type="hidden" name="_token" value="{{ csrf_token()}}">

        <div class="box-body">
            <div class="form-group">
                <label for="title">Nama Tag:</label>
                <input name="name" type="text" id="name" class="form-control" placeholder="Masukan Tag Anda......"
                @if (isset($edit_tag)) value="{{$edit_tag->name}}" @endif>
            </div>
        </div>

        <div class="box-footer">
        @if(isset($edit_tag))
            <button type="submit" class="btn btn-info pull-right">Update</button>
        @else
        <button type="submit" class="btn btn-info pull-right">Submit</button>
        @endif
        </div>
    </form>
</div>
@endsection