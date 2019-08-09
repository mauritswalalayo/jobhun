@extends('user.master')

@section('content')

<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="inner2">
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
						<h2 style="text-align:left;">Jobhun Career Hub for Company</h2>
						<br>
						<br>
						<div class="blog-posthumb"> <img width="1300" height="900"
								src="{{ asset ('user/images/jch.png')}}" alt="" />
						</div>
						<p style="font-size:20px">Jobhun Career Hub menjadi solusi bagi perusahaan,
							instansi, lembaga, maupun organisasi yang sedang mencari kandidat terbaik.
							Temukan pekerja melalui Jobhun dengan cara yang mudah dan cepat.</p>
					</div><!-- Heading -->



					<div class="heading">
						<div class="row">
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<h3>Membantu menghemat waktu dan biaya</h3>
											<p align="left">Perusahaan bisa merekrut kandidat terbaik dengan cara yang
												mudah dan cepat. meminimalkan sumber daya manusia internal serta
												menghemat biaya untuk melakukan perekrutan</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<h3>Menemukan kandidat terbaik yang potensial</h3>
											<p align="left">Khusus untuk Jobhun Career Hub Premium, tim rekrutmen
												profesional Jobhun yang akan melakukan screening terhadap para kandidat.
												Hanya kandidat potensial terbaik dan sesuai dengan kualifikasi yang akan
												dipilih. Perusahaan akan menerima database kandidat yang telah siap
												untuk diwawancara kerja.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<h3>Menggunakan <i>channel</i> yang beragam</h3>
											<p align="left">Perusahaan bisa merekrut kandidat terbaik dengan cara yang
												mudah dan cepat. meminimalkan sumber daya manusia internal serta
												menghemat biaya untuk melakukan perekrutan.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<h3>Memiliki jaringan yang luas</h3>
											<p align="left">Jobhun memiliki kerja sama dengan beragam komunitas,
												organisasi, maupun instansi, sehingga dapat memudahkan pencarian
												kandidat sesuai dengan kualifikasi yang dibutuhkan.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<h3>Memberikan garansi</h3>
											<p align="left">Ketika kandidat yang dipilih melalui layanan Jobhun Career
												Hub Premium dirasa belum sesuai, maka Jobhun akan memberikan garansi
												untuk mencari kandidat lain (dengan perpanjangan waktu), tanpa dipungut
												biaya. Syarat dan ketentuan berlaku</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="plans-sec">
						<div class="row">
							<div class="col-lg-6">
								<div class="pricetable">
									<div class="pricetable-head">
										<h3>Jobhun Career Hub Regular</h3>
										<h2><i>Rp. </i>50.000,-</h2>
									</div><!-- Price Table -->
									<ul>
										<li>
											<h6> - Informasi lowongan kerja dipasang secara permanen<h6>
										</li>
										<li>
											<h6>- Informasi lowongan kerja diposting di Instagram Jobhun</h6>
										</li>
										<li>
											<h6>- Berlaku untuk 1 posisi pekerjaan</h6>
										</li>
									</ul>
									<a href="{{route('formposting')}}" title="">Posting Loker</a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="pricetable active">
									<div class="pricetable-head">
										<h3>Jobhun Career Hub Premium</h3>
										<h2><i>Rp. </i>200.000,-</h2>
										<span>Promo</span>
									</div><!-- Price Table -->
									<ul>
										<li>
											<h6>- Informasi lowongan kerja dipasang secara permanen<h6>
										</li>
										<li>
											<h6>- Informasi lowongan kerja diposting di Instagram Jobhun</h6>
										</li>
										<li>
											<h6>- Berlaku untuk 3 posisi pekerjaan</h6>
										</li>
										<li>
											<h6>- Kandidat seleksi langsung oleh Tim Jobhun</h6>
										</li>
										<li>• Perusahaan akan mendapatkan laporan calon pekerja yang telah dipilih oleh
											tim Jobhun maksimal 2 minggu setelah penayangan lowongan kerja</li>
										<li>• Seleksi yang dilakukan oleh tim Jobhun berdasarkan CV, portfolio, dan
											dokumen-dokumen lainnya yang dikirimkan oleh para kandidat. Selanjutnya,
											perusahaan yang akan melakukan interview maupun psikotes kepada calon
											pekerja.</li>
									</ul>
									<a href="{{route('formposting')}}" title="">Posting Loker</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="heading">
		<div class="row">
			<div class="blog-posthumb"> <img src="{{ asset ('user/images/2jobhun.jpeg')}}" alt="" /></div>
		</div>
	</div>


</section>
@endsection