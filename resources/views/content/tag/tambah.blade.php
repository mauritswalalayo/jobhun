@extends('dashboard')
@section('cumi')
    
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tag</h3>

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

            @if (isset($tag))
            <form action="{{url ('tag/'.'update/'.$tag->id)}}" method="POST">
            <input type="hidden" name="_method" value="PATCH">

            @else
            <form action="{{route('store')}}" method="POST">
            @endif

            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group has-feedback">
                    <label>Tag</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Tag"
                    @if(isset($tag)) value="{{ $tag->name}}" @endif>
                    <span class="fa fa-plus form-control-feedback"></span>

                    
                  </div>
                  <div class="row">
                  <div class="col-xs-2">
                    <button type="submit" class="btn btn-warning btn-block btn-flat">Tambah</button>
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