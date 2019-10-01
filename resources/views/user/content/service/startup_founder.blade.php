@extends('user.master')

@section('content')

<section>
    <div class="block"></div>
</section>

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 column">
                    <div class="job-single-sec">
                        <div class="job-single-head">
                            <div class="job-thumb"> <img src="{{ asset ('user/images/startup.jpeg')}}" alt="" /> </div>
                        </div><!-- Job Head -->
                        <div class="job-details">
                            <h3>Deskripsi</h3>
                            <p align="justify">Saat ini membangun startup sedang booming dilakukan oleh masyarakat.
                                Banyak milenial yang mulai tertarik untuk terjun ke dunia startup. Tak heran, karena
                                selain bisa mencetak penghasilan — bagaimana layaknya sebuah bisnis dibangun, startup
                                juga dapat memberikan sebuah impact bagi permasalahan yang ada di sebuah negara. Startup
                                bukan sekadar membangun bisnis biasa, namun juga bisa menjadi sebuah kunci atau solusi
                                dari hal-hal yang meresahkan di sekitar kita. Prospek karier untuk profesi ini tentu
                                sangat cerah, karena Indonesia masih memiliki banyak peluang yang bisa digarap oleh para
                                startup founder. Seorang startup founder harus memiliki beberapa kemampuan agar siap
                                bersaing di industri. Di Jobhun Academy, kamu bisa belajar menjadi seorang startup
                                founder bersama dengan pakarnya langsung. Tidak hanya belajar secara teori saja, namun
                                kamu juga akan praktek, sehingga setelah selesai program ini maka kamu bisa menghasilkan
                                sebuah produk startup yang siap dirilis. Kamu bisa mempersiapkan karier sebagai seorang
                                Startup Founder melalui program ini.</p>

                            <h3>Mengapa kamu harus mengikuti Jobhun Academy : Startup Founder ini ?</h3>
                            <p>
                                1. Belajar dengan formula khusus untuk persiapan karier <br>

                                Di Jobhun Academy, kamu tidak hanya belajar secara teori saja. Namun juga akan praktek
                                secara langsung untuk menghasilkan portfolio penunjang karier. Kamu juga bisa sharing
                                bersama mentor untuk membahas persiapan karier. <br>

                                2. Berkesempatan untuk mendapatkan pekerjaan <br>

                                Jobhun bekerjasama dengan berbagai perusahaan dalam mencari kandidat terbaik. Apabila
                                kamu berhasil menyelesaikan program di Jobhun Academy dengan baik dan sesuai dengan
                                kriteria yang sedang dicari oleh perusahaan, maka Jobhun akan merekomendasikan kamu agar
                                bisa bekerja di beberapa company partner Jobhun tersebut. <br>

                                3. Dibimbing oleh mentor-mentor berkualitas dan berpengalaman <br>

                                Jobhun selalu berupaya menghadirkan mentor berkualitas dan berpengalaman dibidangnya,
                                serta memiliki prestasi di bidang tersebut. <br>

                                4. Belajar secara optimal dan kondusif <br>

                                Agar belajar bisa lebih optimal dan kondusif, Jobhun Academy hanya bisa diikuti 3-5
                                orang setiap kelas. Kami percaya bahwa kapasitas kelas yang sedikit akan membuat
                                interaksi antara mentor dan mentee menjadi lebih intens. <br>

                                5. Menghasilkan portfolio yang berguna untuk karier <br>

                                Setelah program Jobhun Academy ini berakhir, mentee akan mendapatkan hasil tes,
                                penilaian secara keseluruhan, sertifikat, dan portfolio atau karya di masing-masing
                                bidang yang telah dilakukan selama pembelajaran dilakukan. <br>

                                6. Biaya terjangkau dan bisa dicicil <br>

                                Kamu tidak perlu pusing masalah biaya. Program-program yang ada di Jobhun Academy
                                dipatok dengan harga yang terjangkau dan bisa kamu cicil dengan skema cicilan yang
                                sangat membantu. <br>
                            </p>

                            <h3>Materi yang akan kamu pelajari :</h3>
                            <p>
                                <ul>
                                    <li>Mengenal tentang startup secara mendasar dan prospeknya di Indonesia</li>
                                    <li>Memahami cara mencari ide/solusi dari sebuah permasalahan</li>
                                    <li>Membuat <i>business plan</i></li>
                                    <li>Melakukan tahap ideation dan langkah-langkah membangun startup tahap awal</li>
                                    <li>Kiat membangun tim yang ideal dalam startup</li>
                                    <li>Memahami lean startup dan lean canvas</li>
                                    <li>Strategi mencari dan menargetkan market</li>
                                    <li>Membuat BMC (Business Model Canvas)</li>
                                    <li>Melakukan Agile Development dengan Scrum</li>
                                    <li>Mengenal brand identity</li>
                                    <li>Melakukan Design Sprint</li>
                                    <li>Melakukan User Research</li>
                                    <li>Melakukan Design Thinking</li>
                                    <li>Membuat MVP (Minimum Viable Product)</li>
                                    <li>Merilis produk versi beta, kemudian mengevaluasi produk tersebut.</li>
                                    <li>Membuktikan model bisnis</li>
                                    <li>Memahami pendanaan yang ada di startup, baik bootstrapping maupun investor.</li>
                                    <li>Memahami legalitas yang harus ada di startup</li>
                                    <li>Memahami teknologi-teknologi minimal yang harus ada di startup</li>
                                    <li>Memahami istilah-istilah yang ada di startup</li>
                                    <li>Cara mencari relasi di ekosistem startup (Partner bisnis, inkubator, coworking
                                        space, investor, dll)</li>
                                </ul>
                            </p>
                        </div>
                        <div class="share-bar">
                            <span>Share</span><a href="https://id-id.facebook.com/login/" target="_blank" title=""
                                class="share-fb"><i class="fa fa-facebook"></i></a><a
                                href="https://twitter.com/login?lang=id" target="_blank" title=""
                                class="share-twitter"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 column">
                    <a class="apply-thisjob" href="{{route('form.jobhunacademy')}}" title=""><i class="la la-paper-plane"></i>Daftar</a>
                    <div class="job-overview">
                        <h3>Keterangan : </h3>
                        <ul>
                            <li><i class="la la-money"></i>
                                <h3>Rp. 1.500.000,- (Apabila dibayar lunas)</h3>
                                <span>Bisa dibayar lunas atau dicicil. Jika dicicil, menggunakan skema cicilan sebagai
                                    berikut : <br>
                                    1. DP Rp. 750.000,- (Dibayar sebelum kelas dimulai) <br>
                                    2. Pembayaran ke-1 Rp. 280.000,- (Dibayar saat pertemuan kedua) <br>
                                    3. Pembayaran ke-2 Rp. 280.000,- (Dibayar saat pertemuan keempat) <br>
                                    4. Pembayaran ke-3 Rp. 280.000,-. (Dibayar saat pertemuan keenam)</span>
                            </li>
                            <li><i class="la la-clock-o"></i>
                                <h3>Waktu Pelaksanaan</h3>
                                <span>Total 8 kali pertemuan (Jadwal pelaksanaan akan disesuaikan dengan kesepakatan
                                    antara mentor dan seluruh peserta yang nantinya sudah mendaftar)</span>
                            </li>
                            <li><i class="la la-map-marker"></i>
                                <h3>Tempat Pelaksanaan</h3>
                                <span>Jobhun Office, Geco Coworking Space, Kompleks AJBS, Jl. Ratna 14, Ngagel,
                                    Wonokromo, Surabaya 60246
                                </span>
                            </li>
                            <li><i class="la la-graduation-cap"></i>
                                <h3>Apa yang wajib dibawa saat Jobhun Academy berlangsung ?</h3>
                                <span>
                                    1. Laptop <br>
                                    2. Alat tulis <br>
                                    3. MS Office yang sudag ter-install di laptop
                                </span>
                            </li>
                            <li><i class="la la-briefcase"></i>
                                <h3>Fasilitas</h3>
                                <span>
                                    1. Makan setiap pertemuan <br>
                                    2. Materi dan modul <br>
                                    3. Certificate of Completion <br>
                                    4. Form penilaian yang menunjukkan perkembangan skill mentee <br>
                                    5. Konsultasi dengan mentor <br>
                                    6. Ruangan ber-AC, LCD & proyektor, papan tulis, dan Wi-Fi
                                </span>
                            </li>
                        </ul>
                    </div><!-- Job Overview -->
                    <div class="job-location">
                        <h3>Mentor yang akan mengajar</h3>
                        <div class="col-lg-12 column">
                            <div class="blog-single">
                                <div class="bs-thumb">
                                    <img src="{{ asset ('user/images/mentor_startup.jpg')}}"
                                        alt="Gambar Mentor Content Writer" />
                                    <div class="extra-job-info">
                                        <span><strong> Cynthia Cecilia</strong> <br>( Founder & CEO of Jobhun, Manager
                                            of DILo Surabaya, Lead Facebook Developer Circles Surabaya, dan Tech In Asia
                                            Chapter City Surabaya )</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Beberapa materi akan diisi dengan mentor-mentor lain yang berasal dari partner Jobhun, yaitu IDSF (ID Startup Founder Indonesia) dan DILo Surabaya</p>
                    <div class="col-lg-12 column">
                        <div class="blog-single">
                            <div class="bs-thumb">
                                <img src="{{ asset ('user/images/IDSF.png')}}"
                                    alt="Gambar Mentor Content Writer" />
                            </div>
                            <div class="bs-thumb">
                                <img src="{{ asset ('user/images/DILO.png')}}"
                                    alt="Gambar Mentor Content Writer" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 column">
                            <div class="job-single-head style2">
                                <a href="{{ route ('ja')}}" title="" class="viewall-jobs">Lihat Semua Akademi</a>
                            </div><!-- Job Head -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection