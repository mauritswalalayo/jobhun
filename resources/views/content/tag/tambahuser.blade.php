@extends('dashboard')
@section('cumi')
    
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">User</h3>

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

              @if (isset($user))
              <form action="{{url ('user/'.'update/'.$user->id)}}" method="POST">
              <input type="hidden" name="_method" value="PATCH">
              
              @else    
              <form action="{{route('storeuser')}}" method="post">
              @endisset

                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <form role="form">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group has-feedback">
                    <label>User</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Lengkap"
                    @if(isset($user)) value="{{ $user->name }}" @endisset>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>

                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="phone" placeholder="Masukan Nomor Hp"
                  @if(isset($user)) value="{{ $user->phone }}" @endisset>
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                  </div>

                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="sex" placeholder="Jenis Kelamin"
                  @if(isset($user)) value="{{$user->sex}}" @endisset>
                    <span class="fa-transgender form-control-feedback"></span>

                  </div>

                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="email" placeholder="E-mail"
                  @if(isset($user)) value="{{ $user->email }}" @endisset>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>

                  <div class="form-group has-feedback">
                      <input type="text" class="form-control" name="education" placeholder="Education"
                    @if(isset($user)) value="{{ $user->author->education }}" @endisset>
                      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                  <div class="row">
                  <div class="col-xs-2">
                    @if(@isset($user))
                    <button type="submit" class="btn btn-success btn-block btn-flat">Update</button>
                    @else
                    <button type="submit" class="btn btn-warning btn-block btn-flat">Tambah</button>
                    @endisset
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