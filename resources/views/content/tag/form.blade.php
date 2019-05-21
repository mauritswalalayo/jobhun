@extends('master')

@section('title', 'Form Post')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('post.table')}}" class="btn btn-danger">Kembali</a>
    </div>
    <div class="box-body">

    </div>
    <form action="">
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