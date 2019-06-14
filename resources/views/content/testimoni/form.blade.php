@extends('master')

@section('title', 'Form Testimoni')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('testimoni.table')}}" class="btn btn-danger">Kembali</a>
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

    <form action="" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="box-body">
            <div class="form-group">
                <label for="title">Nama :</label>
                <input name="name" type="text" id="name" class="form-control" placeholder="Masukan Nama Anda......">
            </div>
        </div>

        <div class="box-body">
            <div class="form-group">
                <label for="title">Testimoni :</label>
                <textarea name="testimoni" id="testimoni" cols="30" rows="10" class="form-control">
                </textarea>
            </div>
        </div>

        <div class="box-footer"> 
            <button type="submit" class="btn btn-info pull-right">Submit</button>
     
        </div>
    </form>
</div>
@endsection