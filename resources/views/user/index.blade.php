@extends('admin')
@section('isi')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Table User
        <small>Data user was registered</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

     <div class="box-footer">
        <a type='button' class ="btn btn-primary" href="{{route('user.create')}}">Add User</a>
        
        <!-- <button type="submit" class="btn btn-primary">Tambah User</a></button> -->
      </div>

     <!-- @if (session('pesan_sukses'))
      <div class="alert alert-succes">
        {{session('pesan_sukses')}}
      </div>
      @endif -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>

                <tbody>
              
                <tr>
                  <td>1</td>
                  <td>Gusti</td>
                  <td>adistriani@gmail.com</td>
                  <td>08998111648</td>
                  <td>
                    <form method="POST" action="" style="display: inline;">
                      {{method_field('DELETE')}}
                      {!! csrf_field() !!}
                      <button type="submit" class="btn btn-danger btn-sm">
                        <span class="pe-7s-trash"></span>Delete
                      </button>
                    </form>

                    <form method="PUT" action="" style="display: inline;">
                      {{method_field('UPDATE')}}
                      {!! csrf_field() !!}
                      <button type="submit" class="btn btn-primary btn-sm">
                        <span class="pe-7s-trash"></span>Edit
                      </button>
                    </form>
                </td>
                </tr>
            
               
                </tbody>


             

                
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->

                
              </table>

                 


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         
        </div>
       
        <!-- /.col -->
      </div>
    
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
  </div>
  <!-- /.content-wrapper -->


<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
@endsection
