@extends('master')

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

    <form action="{{url('loker/'.'verified-loker/'.$verified->id)}}" method="POST" enctype="multipart/form-data">
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
                <label for="title">Nama Perusahaan :</label>
                <input name="title" type="text" id="title" class="form-control" 
                @if (isset($verified)) value="{{$verified->company_name}}" @endif>
            </div>

            <div class="form-group">
                <label for="title">Tagline Perusahaan :</label>
                <input name="title" type="text" id="title" class="form-control" 
                @if (isset($verified)) value="{{$verified->company_tagline}}" @endif>
            </div>

            <div class="form-group">
                <label for="content">Deskripsi Perusahaan :</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">
                    @if (isset($verified)) {{$verified->description_company}} @endif
                </textarea>
            </div>

            <div class="form-group">
                <label for="title">Alamat Perusahaan :</label>
                <input name="title" type="text" id="title" class="form-control" 
                     @if (isset($verified)) value="{{$verified->company_address}}" @endif>
            </div>

            <div class="form-group">
                <label for="title">Tagline Perusahaan :</label>
                <input name="title" type="text" id="title" class="form-control" 
                    @if (isset($verified)) value="{{$verified->company_tagline}}" @endif>
            </div>

            <div class="form-group">
                <label for="title">Website Perusahaan :</label>
                <input name="title" type="text" id="title" class="form-control" 
                 @if (isset($verified)) value="{{$verified->company_website}}" @endif>
            </div>

            <div class="form-group">
                <label for="title">Email Perusahaan :</label>
                <input name="title" type="text" id="title" class="form-control" 
                 @if (isset($verified)) value="{{$verified->company_email}}" @endif>
            </div>

            <div class="form-group">
                <label for="title">No. Telpon Perusahaan :</label>
                <input name="title" type="text" id="title" class="form-control" 
                 @if (isset($verified)) value="{{$verified->company_phone}}" @endif>
            </div>

            <div class="form-group">
                <label for="title">Posisi Yang Dicari :</label>
                <input name="title" type="text" id="title" class="form-control" 
                 @if (isset($verified)) value="{{$verified->position_sought}}" @endif>
                </div>

            <div class="form-group">
                <label for="title">Jenis Pekerjaan :</label>
                <input name="title" type="text" id="title" class="form-control" 
                 @if (isset($verified)) value="{{$verified->type_work}}" @endif>
            </div>

            <div class="form-group">
                <label for="content">Deskripsi Masing-masing Pekerjaan :</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">
                    @if (isset($verified)) {{$verified->description_job}} @endif
                </textarea>
            </div>

            <div class="form-group">
                <label for="content">Deskripsi Masing-masing Pekerjaan :</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">
                    @if (isset($verified)) {{$verified->recruit_process}} @endif
                </textarea>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="title">Logo Perusahaan :</label>
                    <div class="c-logo">
                    <img width="300" height="300" src="{{asset ('image/logo_perusahaan/'.$verified->logo_url)}}" alt="">
                    </div>
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="title">Poster :</label>
                    <div class="c-logo">
                    <img width="300" height="300" src="{{asset ('image/poster/'.$verified->upload_poster)}}" alt="">
                    </div>
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="title">Bukti Transfer :</label>
                    <div class="c-logo">
                    <img width="300" height="300" src="{{asset ('image/bukti_transfer/'.$verified->evidence_transfer)}}" alt="">
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