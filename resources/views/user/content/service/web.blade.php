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
                            <div class="job-thumb"> <img src="{{ asset ('user/images/wd-1.jpg')}}" alt="" /> </div>
                        </div><!-- Job Head -->
                        <div class="job-details">
                            <h3>Deskripsi</h3>
                            <p align="justify">Saat ini web developer menjadi salah satu profesi yang banyak dicari.
                                Menjamurnya digital startup di kalangan pebisnis membuat banyak perusahaan ingin turut
                                serta mendigitalisasi bisnisnya. Di sini, peran seorang web developer sangat besar.
                                Mulai dari membantu membangun produk hingga menciptakan berbagai website maupun program
                                untuk perusahaan. Tidak hanya perusahaan saja yang membutuhkan profesi ini, namun
                                seorang web developer juga bisa bekerja secara mandiri. Profesi yang satu ini juga bisa
                                dijalani dengan sistem kerja full time, part time, remote, hingga freelance.</p>

                            <p align="justify">Prospek karier untuk profesi ini tentu sangat cerah, apalagi seorang web
                                developer terkadang tidak harus terikat satu perusahaan saja, sehingga kesempatan untuk
                                mendapatkan penghasilan yang lebih banyak akan terbuka lebar. Seorang web developer
                                harus memiliki beberapa kemampuan agar siap bersaing di industri. Di Jobhun Academy,
                                kamu bisa belajar menjadi seorang web developer bersama dengan pakarnya langsung. Tidak
                                hanya belajar secara teori saja, namun kamu juga akan praktek, sehingga bisa
                                menghasilkan portfolio yang akan digunakan untuk mencari kerjaan nantinya. Selain itu,
                                kamu juga bisa mempersiapkan karier sebagai seorang web developer melalui program ini.
                            </p>

                            <h3>Mengapa kamu harus mengikuti Jobhun Academy : Web Developer ini ?</h3>
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
                                1. Dasar pemrograman dengan PHP <br>
                                2. Konsep Object Oriented Programming dengan PHP <br>
                                3. Standar-standar dalam penulisan kode di PHP <br>
                                4. Development PHP saat ini (Modern PHP) <br>
                                5. Konsep dasar framework Laravel <br>
                                6. Tips dan Clean Code Laravel <br>
                                7. Implementasi hasil belajar dengan studi kasus <br>
                                8. Menginstall, migration, hingga halaman awal. <br>
                                9. Melakukan setting env
                                <ul>
                                    <li>Memahami design database</li>
                                    <li>Membuat migration, run migration (Membuat migration user, post, tag, dan post
                                        tag)</li>
                                    <li>Latihan: Membuat migration biodata user lain</li>
                                </ul>
                            </p>
                            <p>10. Memahami route dan templating
                                <ul>
                                    <li>Melakukan setting route</li>
                                    <li>Melakukan setting template halaman dashboard</li>
                                    <li>Latihan : Membuat setting template halaman depan</li>
                                </ul>
                            </p>
                            <p>11. Memahami pembuatan login dan Middleware
                                <ul>
                                    <li>Login</li>
                                    <li>Middleware login</li>
                                    <li>Middleware admin</li>
                                    <li>Latihan: Middleware author</li>
                                </ul>
                            </p>
                            <p>12. CRUD Post, Relationing, Validation (Part I) <br>
                                13. CRUD Post, Relationing, Validation (part II) <br>
                                14. Melakukan update foto profil user <br>
                                15. Membuat register emailing (Simple register dan mailing) <br>
                                16. Menampilkan daftar post di depan dan masuk ke halaman single post
                            </p>
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
                                    <img src="{{ asset ('user/images/mentorweb.jpeg')}}"
                                        alt="Gambar Mentor Web Developer" />
                                    <div class="extra-job-info">
                                        <span><strong>Muhammad Amirul Ihsan</strong> <br>( Founder Kawan Koding,
                                            Programming Instructor, Programmer )</span>
                                    </div>
                                    <div class="col-lg-4 column">
                                            <div class="job-single-head style2">
                                                <a href="{{ route ('ja')}}" title="" class="viewall-jobs">Lihat Semua Kelas di Jobhun Academy</a>
                                            </div><!-- Job Head -->
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

@endsection