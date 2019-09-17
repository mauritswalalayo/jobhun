@extends('back.master')

@section('title', 'Form Post')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('loker.table')}}" class="btn btn-danger">Kembali</a>
    </div>
    <div class="box-body">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </div>

    <form action="{{url('loker/'.'verified/'.$verified->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">


        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="box-body">

            {{-- <div class="form-group">
                <label>Kriteria</label>
                    <select class="form-control" name="criteria" data-placeholder="Pilih Kriteria" style="width: 100%;">
                        <option value="Cerita-Karier"> Cerita Karier</option>
                        <option value="Infografik"> Infografik</option>
                        <option value="Karierpedia"> karierpedia</option>
                        <option value="Artikel"> Artikel</option>
                        <option value="Berita-Acara"> Berita-Acara</option>
                        <option value="Info-Acara"> Info-Acara</option>
                        <option value="Jobhun-Internship"> Jobhun Internship</option>
                        <option value="Jobhun-Talks"> Jobhun-Talks</option>
                        <option value="Jobhun-Visit"> Jobhun-Visit</option>

                    </select>
            </div> --}}

            <div class="form-group">
                <label for="title">Layanan Media Partner :</label>
                <input name="title" type="text" id="title" class="form-control"
                @if (isset($verified)) value="{{$verified->type_mediapartner}}" @endif>
            </div>

            <div class="form-group">
                <label for="title">Nama Acara :</label>
                <input name="title" type="text" id="title" class="form-control"
                @if (isset($verified)) value="{{$verified->event_name}}" @endif>
            </div>

            <div class="form-group">
                <label for="title">Penyelenggara Acara</label>
                <input name="title" type="text" id="title" class="form-control"
                @if (isset($verified)) value="{{$verified->event_organizer}}" @endif>
            </div>

            <div class="form-group">
                <label for="title">Narahubung Acara :</label>
                <input name="title" type="text" id="title" class="form-control"
                     @if (isset($verified)) value="{{$verified->contact_event}}" @endif>
            </div>

            <div class="form-group">
                <label for="title">Tanggal Pelaksanaan Acara :</label>
                <input name="title" type="text" id="title" class="form-control"
                    @if (isset($verified)) value="{{$verified->event_date}}" @endif>
            </div>

            <div class="form-group">
                <label for="title">Tempat Pelaksanaan Acara</label>
                <input name="title" type="text" id="title" class="form-control"
                 @if (isset($verified)) value="{{$verified->event_venue}}" @endif>
            </div>

            <div class="form-group">
                <label for="content">Detail Acara :</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">
                    @if (isset($verified)) {{$verified->event_details}} @endif
                </textarea>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="title">Bukti Transfer :</label>
                    <div class="c-logo">
                    <img width="300" height="300" src="{{asset ('image/bukti_transfer/'.$verified->evidence_transfer
                    )}}" alt="">
                    </div>
                </div>
            </div>

        </div>
        <div class="box-footer">
                <button type="submit" class="btn btn-warning pull-right">Verified</button>

        </div>
    </form>
    <!-- /.box-footer-->
</div>
@endsection