  <!-- Main content -->
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
                <th>Nama</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Konten</th>
                <th>Education</th>                
                <th>Action</th>
          
                
              </tr>
              </thead>
              <tbody>

                @php $i = $first_index; @endphp                
                @foreach ($namaku as $user)
              <tr>
                <td>{{ $i++ }}</td>
                
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->sex}}</td>
                <td><ul>
                  @foreach($user->author->posts as $post)
                    <li>{{$post->title}}</li>
                  @endforeach
                  </ul>
                </td>
                @if ($user->author==null)
                <td>-</td> --}}
                @else
                <td>{{$user->author->education}}</td>
                @endif

                <td>
                    <a href= "{{url ('user/'.'edit/'.$user->id)}}" class="	glyphicon glyphicon-pencil btn-xs btn btn-primary">Edit</a>
                    
                    <a href="{{url ('user/'.'delete/'.$user->id)}}" class="	glyphicon glyphicon-trash btn-xs btn btn-danger">Hapus</a>
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
</div>
  </section>