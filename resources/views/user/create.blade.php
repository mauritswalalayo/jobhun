@extends('admin')
@section('isi')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                    </div>
            @endif -->
            <form role="form" method="POST" action="">
              {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" name="name" id="Name" placeholder="Enter name">
                </div>

                <div class="form-group">
                  <label for="Phone">Phone</label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                </div>
              
                <div class="form-group">
                  <label for="Email">Email address</label>
                  <input type="email" class="form-control" name="email" id="Email" placeholder="Enter email">
                </div>

                <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" class="form-control" name="password" id="Password" placeholder="Enter password">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</a></button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          
        <!-- /.box-body -->

        
    </div>
</section>
</div>
@endsection
