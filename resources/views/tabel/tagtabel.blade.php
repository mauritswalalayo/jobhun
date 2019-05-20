  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Tag</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                
                <th>Id</th>
                <th>Name</th>
                <th>Waktu buat</th>
                <th>Waktu Edit</th>
                <th>Action</th>
                
              </tr>
              </thead>
              <tbody>
                <!-- jadi, pertama variable i kita kasih angkat first index tadi
                -->
                @php $i = $first_index; @endphp
                @foreach ($data as $tag)
               
              <tr>
                <td>{{ $i++ }}</td><!-- lalu disetiap foreachnya, kita tambah 1 sekalian di echo -->
                <!-- kode di atas ini artinya echo dulu i baru i ditambah 1 untuk row berikutnya -->
                <td>{{ $tag ['name'] }}</td>
                <td>{{ $tag ['created_at'] }}</td>
                <td>{{ $tag ['updated_at'] }}</td>
                <td>
                <a href="{{url ('tag/'.'edit/'.$tag->id)}}" class="glyphicon glyphicon-pencil btn-xs btn btn-primary">Edit</a>
                <a href="{{url ('tag/'.'delete/'.$tag->id)}}" class="	glyphicon glyphicon-trash btn-xs btn btn-danger">Hapus</a>
              </td>

              </tr>
              @endforeach

              </tbody>
            </table>
            <div class="pull-right">{{$data -> links ()}}</span>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
</div>
  </section>