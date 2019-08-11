@extends('master')

@section('title','Media Partner')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        {{-- <a href="{{route('collaborate.form')}}" class="btn btn-primary">Tambah Collaborate</a> --}}
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tipe Media Partner</th>
                    <th>Nama Acara</th>
                    <th>Penyelenggara Acara</th>
                    <th>Narahubung Acara</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                    @php $i = $first_index; @endphp  
                    @foreach ($data_mediapartner as $data_mediapartner)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$data_mediapartner->type_mediapartner}}</td>
                    <td>{{$data_mediapartner->event_name}}</td>
                    <td>{{$data_mediapartner->event_organizer}}</td>
                    <td>{{$data_mediapartner->contact_event}}</td>

                    <td>
                            {{-- {{url('mediapartner/'.'verified/'.$data_mediapartner->id)}} --}}
                        <a href="#" class="btn btn-warning btn-sm glyphicon glyphicon-eye-open">View</a>
                        <a href="{{url('mediapartner/'.'delete/'.$data_mediapartner->id)}}" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
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
@endsection