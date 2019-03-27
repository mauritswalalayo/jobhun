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
                
              </tr>
              </thead>
              <tbody>

                @foreach ($data as $tag)
              <tr>
                <td>{{ $tag ['id'] }}</td>
                <td>{{ $tag ['name'] }}</td>
                <td>{{ $tag ['created_at'] }}</td>
                <td>{{ $tag ['updated_at'] }}</td>

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