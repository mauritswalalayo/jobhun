@extends('master')

@section('title','Jobhun Academy')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Status Pembayaran</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = $first_index;
                @endphp

                @foreach ($daftar_jobhunacademy as $jobhunacademy)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$jobhunacademy->name}}</td>
                    <td>{{$jobhunacademy->class_name}}</td>
                    <td>{{$jobhunacademy->payment_status}}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">View</a>
                        <a href="{{url('jobhun-academy/'.'table/'.'delete/'.$jobhunacademy->id)}}" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer">
    </div>
</div>
@endsection