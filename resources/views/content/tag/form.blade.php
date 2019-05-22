@extends('master')

@section('title', 'Form Tag')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('tag.table')}}" class="btn btn-danger">Kembali</a>
    </div>
    <div class="box-body">

    </div>
    <form action="{{route('tag.add'))" method="POST" }}>
        <div class="box-body">
            <div class="form-group">
                <label for="title">Nama Tag:</label>
                <input name="tag" type="text" id="tag" class="form-control" placeholder="Masukan Tag Anda......">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
    </form>
    <!-- /.box-footer-->
</div>
@endsection