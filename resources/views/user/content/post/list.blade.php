@foreach ($daftar_post as $post)
<a href="{{url('post/show/'.$post->url)}}"> <strong>{{$post->title}}</strong></a>
<br>
<p>Pengarang {{$post->user->name}}</p>
<hr>

    
@endforeach

{{$filter}}