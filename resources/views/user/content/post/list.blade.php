@extends('user.master')

@section('content')

<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="about-us">
						<div class="row">
							<div class="col-lg-12">
							</div>
							<div class="col-lg-7">
							</div>
							<div class="col-lg-12">
								<br><br>

								
															

								<h2 align="center">Kategori : {{$filter}}</h2>

								

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>

    
    
    <div class="block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
						@foreach ($daftar_post as $post)
                        <div class="blogpost style2">
								<div class="blog-posthumb"> <a href="#" title=""><img width="322" height="280" src="{{asset ('image/post/'.$post->feature_image)}}" 
									alt="" /></a> </div>
                                <div class="blog-postdetail">
                                    <ul class="post-metas">
                                        <li><a href="#" title=""><i class="la la-pencil"></i>{{$post->user->name}}</a></li>
									<li><a href="#" title=""><i class="la la-calendar-o"></i>{{$post->created_at}}</a></li>
                                        <li><a class="metascomment" href="#" title=""><i class="la la-comments"></i>4comments</a></li>
                                    </ul>
									<a href="{{url('post/show/'.$post->url)}}"> <h4><strong>{{$post->title}}</strong></h4></a>
									   
									<p>{!! str_limit($post->content, 300)!!}</p>
									
                                    <a class="bbutton" href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div><!-- Blog Post -->
						@endforeach
						<div class="pagination">

								{{$daftar_post->links()}}
								{{-- <ul>
									<li class="prev"><a href=""><i class="la la-long-arrow-left"></i> Prev</a></li>
									<li><a href="">1</a></li>
									<li class="active"><a href="">2</a></li>
									<li><a href="">3</a></li>
									<li><span class="delimeter">...</span></li>
									<li><a href="">14</a></li>
									<li class="next"><a href="">Next <i class="la la-long-arrow-right"></i></a></li>
								</ul> --}}
								
							</div><!-- Pagination -->
				</div>
			</div>
		</div>
	</div>

	
</section>
@endsection


{{-- @foreach ($daftar_post as $post)
<a href="{{url('post/show/'.$post->url)}}"> <strong>{{$post->title}}</strong></a>
<br>
<p>Pengarang {{$post->user->name}}</p>
<hr>

    
@endforeach

{{$filter}} --}}