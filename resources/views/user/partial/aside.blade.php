<div class="responsive-header">
    <div class="responsive-menubar">
        <div class="res-logo"><a href="{{route('index')}}" title=""><img src="{{ asset('user/images/jobhun.png')}}"
                    height="50" alt="" /></a>
        </div>
        <div class="menu-resaction">
            <div class="res-openmenu">
                <img src="images/icon.png" alt="" /> Menu
            </div>
            <div class="res-closemenu">
                <img src="images/icon2.png" alt="" /> Close
            </div>
        </div>
    </div>
    <div class="responsive-opensec">
        <div class="btn-extars">
            <a href="{{route('typeposting')}}" title="" class="post-job-btn"><i class="la la-plus"></i>Pasang Loker</a>
            <ul class="account-btns">
                <li class="signup-popup"><a title=""><i class="la la-key"></i> Daftar</a></li>
                <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Masuk</a></li>
            </ul>
        </div><!-- Btn Extras -->
        <form class="res-search">
            <input type="text" placeholder="Job title, keywords or company name" />
            <button type="submit"><i class="la la-search"></i></button>
        </form>
        <div class="responsivemenu">
            <ul>
                <li class="">
                    <a href="{{route('about')}}" title="">Tentang Jobhun</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="" title="">Layanan</a>
                    <ul>
                        <li><a href="{{ route ('jch')}}" title=""> Jobhun Career Hub</a></li>
                        <li><a href="{{ route ('ja')}}" title="">Jobhun Academy</a></li>
                        <li><a href="{{ route ('media')}}" title="">Media Partner</a></li>
                        <li><a href="{{ route ('jtp')}}" title="">Jobhun Talent Pool</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{url('post/program')}}" title="">Program</a>
                    <ul>
                        <li><a href="{{ url ('post/jobhun-internship')}}" title="">Jobhun Internship</a></li>
                        <li><a href="{{ url ('post/jobhun-talks')}}" title="">Jobhun Talks</a></li>
                        <li><a href="{{ url ('post/jobhun-visit')}}" title="">Jobhun Visit</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{url('post/blog')}}" title="">Blog</a>
                    <ul>
                        <li><a href="{{ url ('post/cerita_karier')}}">Cerita Karier</a></li>
                        <li><a href="{{ url ('post/infografik')}}">Infografik</a></li>
                        <li><a href="{{ url ('post/karierpedia')}}">Karierpedia</a></li>
                        <li><a href="{{ url ('post/artikel')}}">Artikel</a></li>
                        <li><a href="{{ url ('post/berita')}}">Berita</a></li>
                        <li><a href="{{ url ('post/info-acara')}}">Info Acara</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<header class="stick-top forsticky new-header">
    <div class="menu-sec">
        <div class="container">
            <div class="logo">
                <a href="{{route('index')}}" title=""><img class="hidesticky" src="{{ asset('user/images/jobhun.png')}}"
                        height="50" alt="" /><img class="showsticky" src="{{ asset('user/images/jobhun.png')}}"
                        height="50" alt="" />
            </div><!-- Logo -->
            <div class="btn-extars">
                <a href="{{route('typeposting')}}" title="" class="post-job-btn"><i class="la la-plus"></i>Pasang Loker</a>
                <ul class="account-btns">
                    <li class="signup-popup"><a title=""><i class="la la-key"></i> Daftar</a></li>
                    <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Masuk</a>
                    </li>
                </ul>
            </div><!-- Btn Extras -->
            <nav>
                <ul>
                    <li class="">
                        <a href="{{route('about')}}" title="">Tentang Jobhun</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('index')}}" title="">Layanan</a>
                        <ul>
                            <li><a href="{{ route ('jch')}}" title=""> Jobhun Career Hub</a></li>
                            <li><a href="{{ route ('ja')}}" title="">Jobhun Academy</a></li>
                            <li><a href="{{ route ('media')}}" title="">Media Partner</a></li>
                            <li><a href="{{ route ('jtp')}}" title="">Jobhun Talent Pool</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{url('post/program')}}" title="">Program</a>
                        <ul>
                            <li><a href="{{ url ('post/jobhun-internship')}}" title="">Jobhun Internship</a></li>
                            <li><a href="{{ url ('post/jobhun-talks')}}" title="">Jobhun Talks</a></li>
                            <li><a href="{{ url ('post/jobhun-visit')}}" title="">Jobhun Visit</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{url('post/blog')}}" title="">Blog</a>
                        <ul>
                            <li><a href="{{ url ('post/cerita-karier')}}">Cerita Karier</a></li>
                            <li><a href="{{ url ('post/infografik')}}">Infografik</a></li>
                            <li><a href="{{ url ('post/karierpedia')}}">Karierpedia</a></li>
                            <li><a href="{{ url ('post/artikel')}}">Artikel</a></li>
                            <li><a href="{{ url ('post/berita')}}">Berita</a></li>
                            <li><a href="{{ url ('post/info-acara')}}">Info Acara</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- Menus -->
        </div>
</header>
