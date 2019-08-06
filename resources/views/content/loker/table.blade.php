@extends('master')

@section('title','Loker')

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
                    <th>Tipe Loker</th>
                    <th>Nama Perusahaan</th>
                    <th>Alamat Perusahaan</th>
                    <th>No.Telpon Perusahaan</th>
                    <th>Logo Perusahaan</th>
                    <th>Bukti Transfer</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                    @php $i = $first_index; @endphp  
                    @foreach ($datajob as $job)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$job->type_loker}}</td>
                    <td>{{$job->company_name}}</td>
                    <td>{{$job->company_address}}</td>
                    <td>{{$job->company_phone}}</td>
                    <td><img width="211" height="180" src="{{asset ('image/logo_perusahaan/'.$job->logo_url)}}" alt=""></td>
                    <td><img width="211" height="180" src="{{asset ('image/bukti_transfer/'.$job->evidence_transfer)}}" alt=""></td>

                    <td>
                        <a href="#" class="btn btn-warning btn-sm 	glyphicon glyphicon-eye-open">View</a>
                        <a href="#" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
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