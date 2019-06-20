@extends('master')

@section('title', 'Form Collaborate')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('collaborate.table')}}" class="btn btn-danger">Kembali</a>
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

@if(@isset($editcollaborate))


    
@endisset

<form action="{{route('collaborate.add')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="box-body">
            <div class="form-group">
                <label for="title">Nama Perusahaan :</label>
                <input name="name" type="text" id="name" class="form-control" placeholder="Masukan Nama Perusahaan Anda......">
            </div>
        </div>

        <div class="box-footer"> 
            <button type="submit" class="btn btn-info pull-right">Submit</button>
     
        </div>
    </form>
</div>
@endsection