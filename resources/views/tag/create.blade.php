@extends('admin')
@section('isi')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tag</h3>
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
                  <label for="Name">Name Tag</label>
                  <input type="text" class="form-control" name="name" id="Name" placeholder="Enter name">
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
