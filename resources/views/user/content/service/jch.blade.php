@extends('user.master')

@section('content')
<section class="overlape">
	<div class="block no-padding">
		<div data-velocity="-.1"
			style="background: url({{ asset ('user/images/depan.jpg')}});"
			class="parallax scrolly-invisible no-parallax">
		</div><!-- PARALLAX BACKGROUND IMAGE -->
		<div class="container fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="inner-header wform">
						<div class="job-search-sec">
							<div class="job-search">
								<h4>Jobhun Career Hub</h4>
								<form>
									<div class="row">
										<div class="col-lg-7">
											<div class="job-field">
												<input type="text" placeholder="Job title, keywords or company name" />
												<i class="la la-keyboard-o"></i>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="job-field">
												<select data-placeholder="City, province or region" class="chosen-city">
													<option>Istanbul</option>
													<option>New York</option>
													<option>London</option>
													<option>Russia</option>
												</select>
												<i class="la la-map-marker"></i>
											</div>
										</div>
										<div class="col-lg-1">
											<button type="submit"><i class="la la-search"></i></button>
										</div>
									</div>
								</form>
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
					<span class="emlthis"><a href="mailto:example.com" title=""><i class="la la-envelope-o"></i> Email
							me Jobs Like These</a></span>
					<div class="filterbar">
						<h5>98 Jobs & Vacancies</h5>
						<div class="sortby-sec">
							<span>Sort by</span>
							<select data-placeholder="Most Recent" class="chosen">
								<option>Most Recent</option>
								<option>Most Recent</option>
								<option>Most Recent</option>
								<option>Most Recent</option>
							</select>
							<select data-placeholder="20 Per Page" class="chosen">
								<option>30 Per Page</option>
								<option>40 Per Page</option>
								<option>50 Per Page</option>
								<option>60 Per Page</option>
							</select>
						</div>
					</div>
					<div class="job-grid-sec">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="job-grid border">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="{{ asset ('user/images/job1.jpg')}}" height="150" alt="" /> </div>
										<h3><a href="#" title="">Magang di Tuupai | PT Ilios Studio Teknologi - Tuupai App</a></h3>
										<ul class="tags-jobs">
											<li><i class="la la-map-marker"></i> Surabaya</li>
											<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
										</ul>
										{{-- <span>Massimo Artemisis</span> --}}
										<span class="fav-job"><i class="la la-heart-o"></i></span>
									</div>
									<span class="job-lctn">Tuupai adalah cara baru dan praktis untuk mencari segala macam penyedia jasa profesional di sekitar Anda. Tuupai berbasismobile service marketplace yang mana secara langsung bisa menghubungkan ...... </span>
									<a href="{{ route ('spek_jch')}}" title="">Read More</a>
								</div><!-- JOB Grid -->
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="job-grid border">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="{{ asset ('user/images/job1.jpg')}}" height="150" alt="" /> </div>
										<h3><a href="#" title="">Magang di Tuupai | PT Ilios Studio Teknologi - Tuupai App</a></h3>
										<ul class="tags-jobs">
											<li><i class="la la-map-marker"></i> Surabaya</li>
											<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
										</ul>
										{{-- <span>Massimo Artemisis</span> --}}
										<span class="fav-job"><i class="la la-heart-o"></i></span>
									</div>
									<span class="job-lctn">Tuupai adalah cara baru dan praktis untuk mencari segala macam penyedia jasa profesional di sekitar Anda. Tuupai berbasismobile service marketplace yang mana secara langsung bisa menghubungkan ...... </span>
									<a href="{{ route ('spek_jch')}}" title="">Read More</a>
								</div><!-- JOB Grid -->
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="job-grid border">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="{{ asset ('user/images/job1.jpg')}}" height="150" alt="" /> </div>
										<h3><a href="#" title="">Magang di Tuupai | PT Ilios Studio Teknologi - Tuupai App</a></h3>
										<ul class="tags-jobs">
											<li><i class="la la-map-marker"></i> Surabaya</li>
											<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
										</ul>
										{{-- <span>Massimo Artemisis</span> --}}
										<span class="fav-job"><i class="la la-heart-o"></i></span>
									</div>
									<span class="job-lctn">Tuupai adalah cara baru dan praktis untuk mencari segala macam penyedia jasa profesional di sekitar Anda. Tuupai berbasismobile service marketplace yang mana secara langsung bisa menghubungkan ...... </span>
									<a href="{{ route ('spek_jch')}}" title="">Read More</a>
								</div><!-- JOB Grid -->
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="job-grid border">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="{{ asset ('user/images/job1.jpg')}}" height="150" alt="" /> </div>
										<h3><a href="#" title="">Magang di Tuupai | PT Ilios Studio Teknologi - Tuupai App</a></h3>
										<ul class="tags-jobs">
											<li><i class="la la-map-marker"></i> Surabaya</li>
											<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
										</ul>
										{{-- <span>Massimo Artemisis</span> --}}
										<span class="fav-job"><i class="la la-heart-o"></i></span>
									</div>
									<span class="job-lctn">Tuupai adalah cara baru dan praktis untuk mencari segala macam penyedia jasa profesional di sekitar Anda. Tuupai berbasismobile service marketplace yang mana secara langsung bisa menghubungkan ...... </span>
									<a href="{{ route ('spek_jch')}}" title="">Read More</a>
								</div><!-- JOB Grid -->
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="job-grid border">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="{{ asset ('user/images/job1.jpg')}}" height="150" alt="" /> </div>
										<h3><a href="#" title="">Magang di Tuupai | PT Ilios Studio Teknologi - Tuupai App</a></h3>
										<ul class="tags-jobs">
											<li><i class="la la-map-marker"></i> Surabaya</li>
											<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
										</ul>
										{{-- <span>Massimo Artemisis</span> --}}
										<span class="fav-job"><i class="la la-heart-o"></i></span>
									</div>
									<span class="job-lctn">Tuupai adalah cara baru dan praktis untuk mencari segala macam penyedia jasa profesional di sekitar Anda. Tuupai berbasismobile service marketplace yang mana secara langsung bisa menghubungkan ...... </span>
									<a href="{{ route ('spek_jch')}}" title="">Read More</a>
								</div><!-- JOB Grid -->
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="job-grid border">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="{{ asset ('user/images/job1.jpg')}}" height="150" alt="" /> </div>
										<h3><a href="#" title="">Magang di Tuupai | PT Ilios Studio Teknologi - Tuupai App</a></h3>
										<ul class="tags-jobs">
											<li><i class="la la-map-marker"></i> Surabaya</li>
											<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
										</ul>
										{{-- <span>Massimo Artemisis</span> --}}
										<span class="fav-job"><i class="la la-heart-o"></i></span>
									</div>
									<span class="job-lctn">Tuupai adalah cara baru dan praktis untuk mencari segala macam penyedia jasa profesional di sekitar Anda. Tuupai berbasismobile service marketplace yang mana secara langsung bisa menghubungkan ...... </span>
									<a href="{{ route ('spek_jch')}}" title="">Read More</a>
								</div><!-- JOB Grid -->
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="job-grid border">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="{{ asset ('user/images/job1.jpg')}}" height="150" alt="" /> </div>
										<h3><a href="#" title="">Magang di Tuupai | PT Ilios Studio Teknologi - Tuupai App</a></h3>
										<ul class="tags-jobs">
											<li><i class="la la-map-marker"></i> Surabaya</li>
											<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
										</ul>
										{{-- <span>Massimo Artemisis</span> --}}
										<span class="fav-job"><i class="la la-heart-o"></i></span>
									</div>
									<span class="job-lctn">Tuupai adalah cara baru dan praktis untuk mencari segala macam penyedia jasa profesional di sekitar Anda. Tuupai berbasismobile service marketplace yang mana secara langsung bisa menghubungkan ...... </span>
									<a href="{{ route ('spek_jch')}}" title="">Read More</a>
								</div><!-- JOB Grid -->
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="job-grid border">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="{{ asset ('user/images/job1.jpg')}}" height="150" alt="" /> </div>
										<h3><a href="#" title="">Magang di Tuupai | PT Ilios Studio Teknologi - Tuupai App</a></h3>
										<ul class="tags-jobs">
											<li><i class="la la-map-marker"></i> Surabaya</li>
											<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
										</ul>
										{{-- <span>Massimo Artemisis</span> --}}
										<span class="fav-job"><i class="la la-heart-o"></i></span>
									</div>
									<span class="job-lctn">Tuupai adalah cara baru dan praktis untuk mencari segala macam penyedia jasa profesional di sekitar Anda. Tuupai berbasismobile service marketplace yang mana secara langsung bisa menghubungkan ...... </span>
									<a href="{{ route ('spek_jch')}}" title="">Read More</a>
								</div><!-- JOB Grid -->
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="job-grid border">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="{{ asset ('user/images/job1.jpg')}}" height="150" alt="" /> </div>
										<h3><a href="#" title="">Magang di Tuupai | PT Ilios Studio Teknologi - Tuupai App</a></h3>
										<ul class="tags-jobs">
											<li><i class="la la-map-marker"></i> Surabaya</li>
											<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
										</ul>
										{{-- <span>Massimo Artemisis</span> --}}
										<span class="fav-job"><i class="la la-heart-o"></i></span>
									</div>
									<span class="job-lctn">Tuupai adalah cara baru dan praktis untuk mencari segala macam penyedia jasa profesional di sekitar Anda. Tuupai berbasismobile service marketplace yang mana secara langsung bisa menghubungkan ...... </span>
									<a href="{{ route ('spek_jch')}}" title="">Read More</a>
								</div><!-- JOB Grid -->
							</div>
						</div>
					</div>
					<div class="pagination">
						<ul>
							<li class="prev"><a href=""><i class="la la-long-arrow-left"></i> Prev</a></li>
							<li><a href="">1</a></li>
							<li class="active"><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><span class="delimeter">...</span></li>
							<li><a href="">14</a></li>
							<li class="next"><a href="">Next <i class="la la-long-arrow-right"></i></a></li>
						</ul>
					</div><!-- Pagination -->
				</div>
			</div>
		</div>
	</div>
</section>
@endsection