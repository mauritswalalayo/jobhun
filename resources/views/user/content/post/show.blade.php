<!-- <strong>{{$post->title}}</strong>
{!! $post->content !!} -->

@extends('user.master')

@section('content')

<section class="overlape">
		<div class="block no-padding">
			<div data-velocity="-.1" style="background: url(http://placehold.it/1600x800) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-header">
							<h3>{{$post->title}}</h3>
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
				 	<div class="col-lg-12 column">
				 		<div class="blog-single">
				 			<div class="bs-thumb"><img src="http://placehold.it/834x340" alt="" /></div>
				 			<ul class="post-metas"><li><a href="#" title=""><img src="http://placehold.it/40x40" alt="" />Ali TUFAN</a></li><li><a href="#" title=""><i class="la la-calendar-o"></i>{{$post->created_at}}</a></li><li><a class="metascomment" href="#" title=""><i class="la la-comments"></i>4 comments</a></li><li><a href="#" title=""><i class="la la-file-text"></i>Travel, Skill, Jobs</a></li></ul>
				 			
                             <h1>{!! $post->content !!}</h1>
                             
                             <div class="tags-share">
						 			<div class="tags_widget">
						 				<span>Tags</span>
						 				<a href="#" title="">Adwords</a>
						 				<a href="#" title="">Sales</a>
						 				<a href="#" title="">Travel</a>
						 			</div>
						 		<div class="share-bar">
					 				<a href="#" title="" class="share-fb"><i class="fa fa-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="share-google"><i class="la la-google"></i></a><span>Share</span>
					 			</div>
				 			</div>
				 			<div class="post-navigation ">
				 				<div class="post-hist prev">
				 					<a href="#" title=""><i class="la la-arrow-left"></i><span class="post-histext">Prev Post<i>Hey Job Seeker, It’s Time</i></span></a>
				 				</div>
				 				<div class="post-hist next">
				 					<a href="#" title=""><span class="post-histext">Next Post<i>11 Tips to Help You Get New</i></span><i class="la la-arrow-right"></i></a>
				 				</div>
                             </div>
                             
                             <div class="commentform-sec">
				 				<h3>Leave a Reply</h3>
				 				<form>
				 					<div class="row">
				 						<div class="col-lg-8">
					 						<span class="pf-title">Description</span>
					 						<div class="pf-field">
					 							<textarea></textarea>
					 						</div>
					 					</div>
					 					<div class="col-lg-8">
					 						<span class="pf-title">Full Name</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="ALi TUFAN" />
					 						</div>
					 					</div>
					 					<div class="col-lg-8">
					 						<span class="pf-title">Email</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="" />
					 						</div>
					 					</div>
					 					<div class="col-lg-8">
					 						<span class="pf-title">Phone</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="" />
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<button type="submit">Post Comment</button>
					 					</div>
				 					</div>
				 				</form>
				 			</div>
				 		
				 		
				 		</div>
					</div>
				
				 </div>
			</div>
		</div>
	</section>

@endsection
