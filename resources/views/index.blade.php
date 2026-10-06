@extends('layouts.app')

@section('title', 'TPA Al-Hidayah - Home')

@section('content')

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Menumbuhkan generasi berakhlak <em>Mulia</em></h1>
                        <p>Selamat datang di <strong>TPA Al-Hidayah</strong>. Wadah pembelajaran Al-Qur'an, penanaman akidah, serta pembentukan karakter islami bagi para santri sejak dini dengan metode yang menyenangkan dan terarah.</p> 
                        <a href="#about" class="main-button-slider">PELAJARI PROGRAM KAMI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features / Keunggulan Section Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="{{ asset('assets/images/pembelajaran-icon.png') }}" alt="Pembelajaran Akidah">
                            <h4>Pembelajaran Pembiasaan & Akidah</h4>
                            <p>Menanamkan pemahaman Rukun Iman, Rukun Islam, serta pembiasaan keikhlasan dan karakter terpuji sejak dini.</p>
                            <a href="#promotion" class="main-button">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="{{ asset('assets/images/metode-icon.png') }}" alt="Metode Terstruktur">
                            <h4>Metode Pengajaran Terstruktur</h4>
                            <p>Materi disusun secara sistematis merujuk pada kurikulum standar (seperti Aqa'id KMI) yang mudah dipahami santri.</p>
                            <a href="#promotion" class="main-button">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="{{ asset('assets/images/hafalan-icon.png') }}" alt="Hafalan & Asma'ul Husna">
                            <h4>Hafalan & Asma'ul Husna</h4>
                            <p>Membimbing santri menghafal doa-doa harian, surah pendek, serta pemaknaan Asma'ul Husna secara bertahap.</p>
                            <a href="#promotion" class="main-button">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features / Keunggulan Section End ***** -->

    <!-- ***** Promotion / About Section Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row align-items-center">
                <!-- Kolom Gambar -->
                <div class="col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('assets/images/left-image.png') }}" class="rounded img-fluid d-block mx-auto" alt="Kegiatan Santri TPA Al-Hidayah">
                </div>

                <!-- Kolom Teks -->
                <div class="col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul class="promotion-list">
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="{{ asset('assets/images/.about-icon.png') }}" alt="Penanaman Akidah">
                            <div class="text">
                                <h4>Penanaman Akidah & Tauhid</h4>
                                <p>Memberikan pemahaman yang kokoh tentang dasar-dasar keimanan agar santri memiliki benteng akidah yang kuat.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="{{ asset('assets/images/.about-icon.png') }}" alt="Pembentukan Akhlak">
                            <div class="text">
                                <h4>Pembentukan Akhlakul Karimah</h4>
                                <p>Mengajarkan santri untuk mengenali dan menjauhi sifat-sifat tercela (seperti kufur, nifaq, dan riya') serta membiasakan sikap ikhlas.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="{{ asset('assets/images/.about-icon.png') }}" alt="Pengajar Sabar">
                            <div class="text">
                                <h4>Pengajar yang Membimbing & Sabar</h4>
                                <p>Didampingi oleh ustadz dan ustadzah yang berdedikasi tinggi dalam mendampingi tumbuh kembang keislaman anak.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Promotion / About Section End ***** -->

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Apa Kata Orang Tua <em>Santri Kami</em></h2>
                        <p>Apa yang mereka katakan tentang pengalaman mereka dengan santri kami.</p>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="{{ asset('assets/images/testimonial-author-1.png') }}" alt="Fariz Mishbahul"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Fariz Mishbahul</h4>
                                <p>“Kata-katanya Nanti”</p>
                                <span>Fariz Mishbahul</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="{{ asset('assets/images/testimonial-author-1.png') }}" alt="Nabil Mayda"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Nabil Mayda</h4>
                                <p>“Kata-katanya Nanti”</p>
                                <span>Nabil Mayda</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="{{ asset('assets/images/testimonial-author-1.png') }}" alt="Fauzi Muhammad"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Fauzi Muhammad</h4>
                                <p>“Kata-katanya Nanti”</p>
                                <span>Fauzi Muhammad</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="{{ asset('assets/images/testimonial-author-1.png') }}" alt="Imroatul Hasanah"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Imroatul Hasanah</h4>
                                <p>“Kata-katanya Nanti”</p>
                                <span>Imroatul Hasanah</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

@endsection