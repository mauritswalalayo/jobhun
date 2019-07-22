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
			<div class="container" >
				<div class="row" >
					<div class="col-lg-12">
						<div class="heading">
							<h2>Jobhun Career Hub for Company</h2>
							<br>
							<br>
							<p style="font-size:20px">Jobhun Career Hub menjadi solusi bagi perusahaan, 
								instansi, lembaga, maupun organisasi yang sedang mencari kandidat terbaik. 
								Temukan pekerja melalui Jobhun dengan cara yang mudah dan cepat.</p>
						</div><!-- Heading -->
						<div class="heading">
						<div class="row">
							<div class="blog-posthumb"> <a href="#" title=""><img src="{{asset ('image/post/konten.png')}}" alt="" /></a> </div>
						</div>
						</div>
						<div class="plans-sec">
							<div class="row"  >
								<div class="col-lg-6">
									<div class="pricetable">
										<div class="pricetable-head">
											<h3>Jobhun Career Hub Regular</h3>
											<h2><i>Rp. </i>50.000,-</h2>
										</div><!-- Price Table -->
										<ul>
											<li><h6> - Informasi lowongan kerja dipasang secara permanen<h6></li>
											<li><h6>- Informasi lowongan kerja diposting di Instagram Jobhun</h6></li>
											<li><h6>- Berlaku untuk 1 posisi pekerjaan</h6></li>
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
											<li><h6>- Informasi lowongan kerja dipasang secara permanen<h6></li>
											<li><h6>- Informasi lowongan kerja diposting di Instagram Jobhun</h6></li>
											<li><h6>- Berlaku untuk 3 posisi pekerjaan</h6></li>
											<li><h6>- Kandidat seleksi langsung oleh Tim Jobhun</h6></li>
                                            <li>• Perusahaan akan mendapatkan laporan calon pekerja yang telah dipilih oleh tim Jobhun maksimal 2 minggu setelah penayangan lowongan kerja</li>
                                            <li>• Seleksi yang dilakukan oleh tim Jobhun berdasarkan CV, portfolio, dan dokumen-dokumen lainnya yang dikirimkan oleh para kandidat. Selanjutnya, perusahaan yang akan melakukan interview maupun psikotes kepada calon pekerja.</li>
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
	</section>
@endsection
