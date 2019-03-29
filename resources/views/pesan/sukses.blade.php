@if (session('berhasil'))
    <div class="alert alert-success">
        {{session ('berhasil')}}
    </div>
@endif

@if (session('user'))
    <div class="alert alert-danger">
        {{session ('user')}}
    </div>
@endif