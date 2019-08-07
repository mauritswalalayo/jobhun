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
								
								<h2 align="center">Kategori : {{ucwords(trans($filter))}}</h2>								
									
								@if($filter=='jobhun internship')
					
								<p align="justify" style="color:black">
									Sebuah program magang dari Jobhun yang ditujukan bagi para pelajar atau mahasiswa,
									dengan rentang usia 15-22 tahun. Posisi magang yang dibuka biasanya menyesuaikan
									kebutuhan proyek Jobhun, seperti content writer, social media specialist, graphic
									designer, videographer, creative team, business development, marketing, hingga
									technical. Dalam program ini, mereka akan mendapatkan pelatihan atau mentoring
									beberapa topik (kepenulisan, desain, social media management, pembuatan acara, dll).
									Mereka juga berkesempatan untuk membantu tim inti Jobhun mengerjakan beberapa proyek
									dan pekerjaan rutin. Para pemagang juga berkesempatan untuk menjadi tim Jobhun
									setelah program selesai, apabila memenuhi kriteria. Untuk mengetahui informasi
									Jobhun Internship lebih detail, kamu bisa melihat update konten di bawah ini.
								</p>

								@elseif($filter=='jobhun talks')

								<p align="justify" style="color:black" >
									Jobhun Talks merupakan sebuah sharing session yang ditujukan untuk umum, 
									biasanya mengambil topik yang berkaitan dengan dunia kerja maupun pengembangan skill. 
									Topik dibawakan oleh orang yang ahli dalam bidangnya, sesuai dengan topik. 
									Inti pembicaraan kegiatan lebih kepada motivasi, tips dan trik, atau gambaran umum 
									sebuah profesi atau hal-hal yang berkaitan dengan dunia karier. Untuk mengetahui informasi 
									Jobhun Talks lebih detail, kamu bisa melihat update konten di bawah ini.
								</p>

								@elseif($filter=='jobhun visit')								

								<p align="justify" style="color:black">
									Jobhun Visit merupakan sebuah program kunjungan ke kantor-kantor atau instansi 
									yang dilakukan oleh tim inti Jobhun, para intern, maupun followers yang beruntung. 
									Program ini dibuat untuk memperkenalkan dunia kerja yang sesungguhnya kepada para pencari kerja. 
									Mereka akan diajak melihat secara langsung suasana kerja yang ada di perusahaan-perusahaan, 
									kemudian menggali lebih jauh tentang profesi-profesi yang ada pada perusahaan tersebut. 
									Untuk mengetahui informasi Jobhun Visit lebih detail, kamu bisa melihat update konten di bawah ini.
								</p>

								
								

								
								@endisset
								



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
									
                                    <a class="bbutton" href="{{url('post/show/'.$post->url)}}" title="">Selengkapnya <i class="la la-long-arrow-right"></i></a>
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