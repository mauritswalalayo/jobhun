@extends('master')

@section('title','Tag')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('tag.form')}}" class="btn btn-primary">Tambah Tag</a>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name Tag</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            @php
                $i = $first_index;
            @endphp
            @foreach($daftar_tag as $tag)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$tag->name}}</td>
                    <td>
                            {{-- --}}
                        <a href="{{url('tag/'.'edit/'.$tag->id)}}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">Edit</a>
                        <a href="{{url('tag/'.'delete/'.$tag->id)}} " class="btn btn-danger btn-sm glyphicon glyphicon-trash" tag-id={{$tag->id}}>Delete</a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer">
        Footer
    </div>
</div>


    {{-- <script>

            swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
    </script> --}}


@endsection
