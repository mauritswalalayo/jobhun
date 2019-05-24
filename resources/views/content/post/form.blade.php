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

    @if (isset($editpost))
        <form action="{{url('post/'.'update/'.$editpost->id)}}" method="POST">
            <input type="hidden" name="_method" value="PATCH">
    @else
        <form action="{{route('post.add')}}" method="POST">
    @endif
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="box-body">
            <div class="form-group">
                <label for="title">Judul :</label>
                <input name="title" type="text" id="title" class="form-control" placeholder="Masukan Title Anda......"
                @if (isset($editpost)) value="{{$editpost->title}}"
                        @endif>
            </div>
            <div class="form-group">
                <label for="content">Isi Konten :</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">@if (isset($editpost)) {{$editpost->content}}
                @endif</textarea>
            </div>

            <div class="form-group">
                <label>Tag</label>
                <select class="form-control select2" name="tags[]" multiple="multiple" data-placeholder="Select tag" style="width: 100%;"> 
                @foreach($tags as $tag)
                <option value="{{$tag->id}}"

                    @if(isset($editpost))

                      @if(in_array($tag->id, $chosen_tags))
                        selected="selected"
                      @endif

                    @endif

                    >{{$tag->name}}</option>
                  @endforeach
                </select>
            </div>
            

        </div>
        <div class="box-footer">
            @if (isset($editpost))
                <button type="submit" class="btn btn-warning pull-right">Perbarui Data</button>
            @else
                <button type="submit" class="btn btn-info pull-right">Tambah Data</button>
            @endif
        </div>
    </form>
    <!-- /.box-footer-->
</div>
@endsection