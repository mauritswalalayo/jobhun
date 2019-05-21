@extends('master')

@section('judul','Author')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('author.table')}}" class="btn btn-danger">Kembali</a>
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

        @if (isset($editauthor))
            <form action="{{url('author/'.'update/'.$editauthor->id)}}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
        @else
            <form action="{{route('isi.author')}}" method="post">
        @endif
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="education">Education :</label>
                    <input name="education" type="text" id="education" class="form-control"
                    @if (isset($editauthor)) value="{{$editauthor->education}}"
                        @endif>
                </div>
            </div>
            <div class="box-footer">
                @if (isset($editauthor))
                    <button type="submit" class="btn btn-warning pull-right">Edit</button>
                @else
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                @endif
            </div>
        </form>
    </div>
@endsection