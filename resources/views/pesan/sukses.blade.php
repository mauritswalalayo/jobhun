@if (session('berhasil'))
    <div class="alert alert-success">
        {{session ('berhasil')}}
    </div>
@endif

@if (session('user'))
    <div class="alert alert-primary">
        {{session ('user')}}
    </div>
@endif

@if (session('update'))
    <div class="alert alert-info">
        {{session ('update')}}
    </div>
@endif

@if (session('delete'))
    <div class="alert alert-danger">
        {{session ('delete')}}
    </div>
@endif