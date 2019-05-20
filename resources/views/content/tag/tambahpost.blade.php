@extends('dashboard')
@section('cumi')
    
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Post</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

            <div class="box-body">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                        
                    </ul>
                </div>
            @endif

            @if (isset($post))
            <form action="{{url ('post/'.'update/'.$post->id)}}" method="POST">
            <input type="hidden" name="_method" value="PATCH">

            @else
            <form action="{{route('storepost')}}" method="POST">
            @endif

            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group has-feedback">
                    <label>Post</label>
                    <input type="text" class="form-control" id="name" name="title" placeholder="Masukan Nama Judul"
                    @if(isset($post)) value="{{ $post->title}}" @endif>
                    <span class="fa fa-plus form-control-feedback"></span>
                  </div>

                  {{-- <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="url" placeholder="Masukan URL"
                  @if(isset($post)) value="{{ $post->url }}" @endisset>
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                  </div> --}}

                  {{-- <div class="form-group">
                    <label>Textarea</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                   --}}

                  <div class="form-group has-feddback">
                    <textarea class="form-control" rows="3" name="content" placeholder="Konten">
                  @if(isset($post)) {{ $post->content }} @endif
                </textarea>
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                  </div>

                  <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control select2" name="tags[]" multiple="multiple" data-placeholder="Pilih Kategori"
                            style="width: 100%;">
                            @foreach($daftar_tag as $tag)
                              <option value="{{$tag->id}}"

                              @if(isset($post))

                                @if(in_array($tag->id, $chosen_tags))
                                  selected="selected"
                                @endif

                              @endif

                              >{{$tag->name}}</option>
                            @endforeach
                    </select>
                  </div>


                  {{-- <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="author_id" placeholder="Nama Penulis"
                  @if(isset($post)) value="{{ $post->author_id }}" @endisset>
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                  </div> --}}

                  <div class="row">
                  <div class="col-xs-2">
                    @if(isset($post))
                    <button type="submit" class="btn btn-success btn-block btn-flat">Update</button>
                    @else
                    <button type="submit" class="btn btn-warning btn-block btn-flat">Tambah</button>
                    @endif
                  </div>
                  </div>
                  
                  
          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>

@endsection

@section('javascriptku')
<script>
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    CKEDITOR.replace('content');
  })
</script>
@endsection