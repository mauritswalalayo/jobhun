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
            <form action="{{route('store')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Tag</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Tag">
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