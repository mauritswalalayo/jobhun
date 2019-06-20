<!DOCTYPE html>
<html>

<head>
	@include('user_front.partial.css')
</head>

<body class="newbg">

	<div class="page-loading">
		<img src="{{asset('user/images/loader.gif')}}" alt="" />
	</div>

	<div class="theme-layout" id="scrollup">

		<div class="responsive-header">
			<div class="responsive-menubar">
				<div class="res-logo"><a href="index.html" title=""><img src="http://placehold.it/178x40" alt="" /></a>
				</div>
				<div class="menu-resaction">
					<div class="res-openmenu">
						<img src="{{asset('user/images/icon.png')}}" alt="" /> Menu
					</div>
					<div class="res-closemenu">
						<img src="{{asset('user/images/icon2.png')}}" alt="" /> Close
					</div>
				</div>
			</div>

			@include('user_front.partial.responsive')
		</div>

		<header class="stick-top forsticky new-header">
			<div class="menu-sec">
				@include('user_front.partial.header')
			</div>
		</header>

		<section>
			<div class="block no-padding">
				<div class="container fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="main-featured-sec">
								<div class="new-slide-3">
									<img src="http://placehold.it/600x550" alt="" />
								</div>
								<div class="job-search-sec">
									<div class="job-search">
										<h3>Persiapkan Dirimu untuk Karier Terbaik di Masa Depan</h3>
										<span>Dapatkan pekerjaan impianmu melalui Jobhun Career Hub dan kembangkan
											berbagai skill melalui Jobhun Academy</span>
										<form>
											<div class="row">
												<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
													<div class="job-field">
														<input type="text"
															placeholder="Job title, keywords or company name" />
														<i class="la la-keyboard-o"></i>
													</div>
												</div>
												<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
													<div class="job-field">
														<select data-placeholder="City, province or region"
															class="chosen-city">
															<option>Surabaya </option>
															<option>Jakarta</option>
															<option>Bandung</option>
															<option>Yogyakarta</option>
														</select>
														<i class="la la-map-marker"></i>
													</div>
												</div>
												<div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
													<button type="submit"><i class="la la-search"></i></button>
												</div>
											</div>
										</form>
										<div class="or-browser">
											<span>Browse job offers by</span>
											<a href="#" title="">Category</a>
										</div>
									</div>
								</div>
								<div class="scroll-to">
									<a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="block double-gap-top double-gap-bottom">
				<div data-velocity="-.1"
					style="background: url(http://placehold.it/1920x1000) repeat scroll 50% 422.28px transparent;"
					class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="simple-text-block">
								<h3>Belajar kemampuan baru untuk karier impian di Jobhun Academy</h3>
								<span>Materi sesuai dengan persiapan karier dan biaya bisa dicicil!</span>
								<a href="#" title="">Lihat Kelas</a>
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
							<div class="heading">
								<h2>Jobhun Career Hub</h2>
							</div><!-- Heading -->
							<div class="job-listings-sec">
								<div class="job-listing">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
										<h3><a href="#" title="">Web Designer / Developer</a></h3>
										<span>Surabaya</span>
									</div>
									<span class="job-lctn"><i class="la la-map-marker"></i>Jl. Nganggel 16</span>
									<span class="fav-job"><i class="la la-heart-o"></i></span>
									<span class="job-is ft">FULL TIME</span>
								</div><!-- Job -->
								<div class="job-listing">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
										<h3><a href="#" title="">Marketing Director</a></h3>
										<span>Jakarta</span>
									</div>
									<span class="job-lctn"><i class="la la-map-marker"></i>Senayan</span>
									<span class="fav-job"><i class="la la-heart-o"></i></span>
									<span class="job-is pt">PART TIME</span>
								</div><!-- Job -->
								<div class="job-listing">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
										<h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
										<span>Yogyakarta</span>
									</div>
									<span class="job-lctn"><i class="la la-map-marker"></i>Yogyakarta</span>
									<span class="fav-job"><i class="la la-heart-o"></i></span>
									<span class="job-is ft">FULL TIME</span>
								</div><!-- Job -->
								<div class="job-listing">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
										<h3><a href="#" title="">Application Developer For Android</a></h3>
										<span>Bandung</span>
									</div>
									<span class="job-lctn"><i class="la la-map-marker"></i>Bandung</span>
									<span class="fav-job"><i class="la la-heart-o"></i></span>
									<span class="job-is fl">FREELANCE</span>
								</div><!-- Job -->
								<div class="job-listing">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
										<h3><a href="#" title="">Web Developer</a></h3>
										<span>Cirebon</span>
									</div>
									<span class="job-lctn"><i class="la la-map-marker"></i>Cirebon</span>
									<span class="fav-job"><i class="la la-heart-o"></i></span>
									<span class="job-is tp">TEMPORARY</span>
								</div><!-- Job -->
								<div class="job-listing">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
										<h3><a href="#" title="">Social Media and Public Relation Executive </a></h3>
										<span>Surabaya</span>
									</div>
									<span class="job-lctn"><i class="la la-map-marker"></i>Surabaya</span>
									<span class="fav-job"><i class="la la-heart-o"></i></span>
									<span class="job-is ft">FULL TIME</span>
								</div><!-- Job -->
							</div>
						</div>
						<div class="col-lg-12">
							<div class="browse-all-cat">
								<a href="#" title="">Lihat lainnya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="block">
				<div data-velocity="-.1"
					style="background: url(http://placehold.it/1920x1000) repeat scroll 50% 422.28px transparent;"
					class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="heading light">
								<h2>Testimoni</h2>
								<span>Kami mempertemukan perusahaan dan pencari kerja, sekaligus membantu pekerja
									mengembangkan skill.</span>
							</div><!-- Heading -->
							<div class="reviews-sec" id="reviews-carousel">
								<div class="col-lg-6">
									<div class="reviews">
										<img src="http://placehold.it/101x101" alt="" />
										<h3>Augusta Silva <span>Web designer</span></h3>
										<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out
											quickly with everything! Can’t quite believe the service</p>
									</div><!-- Reviews -->
								</div>
								<div class="col-lg-6">
									<div class="reviews">
										<img src="http://placehold.it/101x101" alt="" />
										<h3>Ali Tufan <span>Web designer</span></h3>
										<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out
											quickly with everything! Can’t quite believe the service</p>
									</div><!-- Reviews -->
								</div>
								<div class="col-lg-6">
									<div class="reviews">
										<img src="http://placehold.it/101x101" alt="" />
										<h3>Augusta Silva <span>Web designer</span></h3>
										<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out
											quickly with everything! Can’t quite believe the service</p>
									</div><!-- Reviews -->
								</div>
								<div class="col-lg-6">
									<div class="reviews">
										<img src="http://placehold.it/101x101" alt="" />
										<h3>Ali Tufan <span>Web designer</span></h3>
										<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out
											quickly with everything! Can’t quite believe the service</p>
									</div><!-- Reviews -->
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
							<div class="heading">
								<h2>Pernah diliput di</h2>
								<span>Beberapa perusahaan telah membantu merekrut pelamar yang sangat baik selama
									bertahun-tahun.</span>
							</div><!-- Heading -->
							<div class="comp-sec">
								<div class="company-img">
									<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
								</div><!-- Client  -->
								<div class="company-img">
									<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
								</div><!-- Client  -->
								<div class="company-img">
									<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
								</div><!-- Client  -->
								<div class="company-img">
									<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
								</div><!-- Client  -->
								<div class="company-img">
									<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
								</div><!-- Client  -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="block">
				<div data-velocity="-.1"
					style="background: url(http://placehold.it/1920x655) repeat scroll 50% 422.28px transparent;"
					class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="heading">
								<h2>Blog</h2>
								<span>Baca berbagai konten seputar karier yang dapat menambah pengetahuanmu dalam dunia
									kerja</span>
							</div><!-- Heading -->
							<div class="blog-sec">
								<div class="row">
									<div class="col-lg-4">
										<div class="my-blog">
											<div class="blog-thumb">
												<a href="#" title=""><img src="http://placehold.it/360x200"
														alt="" /></a>
												<div class="blog-metas">
													<a href="#" title="">March 29, 2017</a>
													<a href="#" title="">0 Comments</a>
												</div>
											</div>
											<div class="blog-details">
												<h3><a href="#" title="">Attract More Attention Sales And Profits</a>
												</h3>
												<p>A job is a regular activity performed in exchange becoming an
													employee, volunteering, </p>
												<a href="#" title="">Read More <i
														class="la la-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="my-blog">
											<div class="blog-thumb">
												<a href="#" title=""><img src="http://placehold.it/360x200"
														alt="" /></a>
												<div class="blog-metas">
													<a href="#" title="">March 29, 2017</a>
													<a href="#" title="">0 Comments</a>
												</div>
											</div>
											<div class="blog-details">
												<h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
												<p>A job is a regular activity performed in exchange becoming an
													employee, volunteering, </p>
												<a href="#" title="">Read More <i
														class="la la-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="my-blog">
											<div class="blog-thumb">
												<a href="#" title=""><img src="http://placehold.it/360x200"
														alt="" /></a>
												<div class="blog-metas">
													<a href="#" title="">March 29, 2017</a>
													<a href="#" title="">0 Comments</a>
												</div>
											</div>
											<div class="blog-details">
												<h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
												<p>A job is a regular activity performed in exchange becoming an
													employee, volunteering, </p>
												<a href="#" title="">Read More <i
														class="la la-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 column">
							<div class="widget">
								<div class="about_widget">
									<div class="logo">
										<a href="#" title=""><img src="http://placehold.it/178x40" alt="" /></a>
									</div>
									<h1>Jobhun</h1>
									<span>Semua hal yang dibutuhkan para pencari kerja maupun perusahaan yang sedang
										mencari pekerja ada di Jobhun. Pencari kerja dapat menemukan pekerjaan,
										sekaligus mengembangkan kemampuannya. Sedangkan perusahaan bisa mencari pekerja
										dengan cara yang cepat dan mudah.</span>
									<div class="social">
										<a href="#" title=""><i class="fa fa-facebook"></i></a>
										<a href="#" title=""><i class="fa fa-twitter"></i></a>
										<a href="#" title=""><i class="fa fa-linkedin"></i></a>
										<a href="#" title=""><i class="fa fa-pinterest"></i></a>
										<a href="#" title=""><i class="fa fa-behance"></i></a>
									</div>
								</div><!-- About Widget -->
							</div>
						</div>
						<div class="col-lg-3 column">
							<div class="widget">
								<h3 class="footer-title">Jobhun</h3>
								<div class="link_widgets">
									<div class="row">
										<div class="col-lg-6">
											<a href="#" title="">Kerja Sama Media Partner </a>
											<a href="#" title="">Syarat dan Ketentuan</a>
											<a href="#" title="">Kebijakan Privasi </a>
											<a href="#" title="">Karier di Jobhun </a>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 column">
							<div class="widget">
								<h3 class="footer-title">Hubungi Kamu</h3>
								<div class="link_widgets">
									<div class="row">
										<div class="col-lg-12">
											<a href="#" title="">Jobhun – CV Sindikat Kreasi Digital</a>
											<a href="#" title="">Geco Coworking Space, Kompleks AJBS, Jl. Ratna 14,
												Ngagel, Wonokromo, Surabaya, Jawa Timur, Indonesia 60246</a>
											<a href="#" title="">E-mail: info@jobhun.id</a>
											<a href="#" title="">Telp. & WA: 08113235533</a>
											<a href="#" title="">Jobs in Deuts</a>
											<a href="#" title="">Vacatures China</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 column">
							<div class="widget">
								<div class="download_widget">
									<a href="#" title=""><img src="http://placehold.it/230x65" alt="" /></a>
									<a href="#" title=""><img src="http://placehold.it/230x65" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-line">
				<span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
				<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
			</div>
		</footer>

	</div>

	<div class="account-popup-area signin-popup-box">
		<div class="account-popup">
			<span class="close-popup"><i class="la la-close"></i></span>
			<h3>User Login</h3>
			<span>Click To Login With Demo User</span>
			<div class="select-user">
				<span>Candidate</span>
				<span>Employer</span>
			</div>
			<form>
				<div class="cfield">
					<input type="text" placeholder="Username" />
					<i class="la la-user"></i>
				</div>
				<div class="cfield">
					<input type="password" placeholder="********" />
					<i class="la la-key"></i>
				</div>
				<p class="remember-label">
					<input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
				</p>
				<a href="#" title="">Forgot Password?</a>
				<button type="submit">Login</button>
			</form>
			<div class="extra-login">
				<span>Or</span>
				<div class="login-social">
					<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
					<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</div><!-- LOGIN POPUP -->

	<div class="account-popup-area signup-popup-box">
		<div class="account-popup">
			<span class="close-popup"><i class="la la-close"></i></span>
			<h3>Sign Up</h3>
			<div class="select-user">
				<span>Candidate</span>
				<span>Employer</span>
			</div>
			<form>
				<div class="cfield">
					<input type="text" placeholder="Username" />
					<i class="la la-user"></i>
				</div>
				<div class="cfield">
					<input type="password" placeholder="********" />
					<i class="la la-key"></i>
				</div>
				<div class="cfield">
					<input type="text" placeholder="Email" />
					<i class="la la-envelope-o"></i>
				</div>
				<div class="dropdown-field">
					<select data-placeholder="Please Select Specialism" class="chosen">
						<option>Web Development</option>
						<option>Web Designing</option>
						<option>Art & Culture</option>
						<option>Reading & Writing</option>
					</select>
				</div>
				<div class="cfield">
					<input type="text" placeholder="Phone Number" />
					<i class="la la-phone"></i>
				</div>
				<button type="submit">Signup</button>
			</form>
			<div class="extra-login">
				<span>Or</span>
				<div class="login-social">
					<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
					<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</div><!-- SIGNUP POPUP -->

	@include('user_front.partial.js')

</body>

</html>