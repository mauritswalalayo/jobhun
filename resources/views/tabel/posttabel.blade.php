  <!-- Main content -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Post</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>URL</th>
              <th>Penulis</th>
              <th>Pendidikan</th>
              <th>Created_at</th>
              <th>Updated_at</th>
              <th>Action</th>


        
              
            </tr>
            </thead>
            <tbody>

             
              @php $i = $first_index; @endphp                                            
              @foreach ($datapost as $post)
            <tr>
              <td>{{ $i++ }}</td>
              
              <td>{{ $post->title }}</td>
              <td>{{ $post->url }}</td>
              <td>{{ $post->author->user->name}}</td>
              <td>{{ $post->created_at }}</td>
              <td>{{ $post->updated_at }}</td>
              <td>
                  <a href= "{{url ('post/'.'edit/'.$post->id)}}" class="glyphicon glyphicon-pencil btn-xs btn btn-primary">Edit</a>
                  {{-- <a href="{{url ('user/'.'delete/'.$name->id)}}" class="	glyphicon glyphicon-trash btn-xs btn btn-danger">Hapus</a> --}}
              </td>

            </tr>
            @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
  </div>
</div>