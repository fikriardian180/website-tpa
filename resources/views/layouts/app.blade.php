<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Landing Page TPA Al-Hidayah">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>@yield('title', 'TPA Al-Hidayah')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo-tpa.png') }}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-lava.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    @stack('styles')

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                        <img src="{{ asset('assets/images/logo-tpa.png') }}" alt="Logo TPA Al-Hidayah" class="logo-img me-2">
                        <span>Al-Hidayah</span>
                    </a>
                    <!-- ***** Logo End ***** -->
                        
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="submenu">
                                <a href="javascript:;">Home</a>
                                <ul>
                                    <li><a href="#welcome" class="menu-item">Home</a></li>
                                    <li><a href="#about" class="menu-item">Sejarah TPA</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Tentang Kami</a>
                                <ul>
                                    <li><a href="#about" class="menu-item">Profil Pengajar Putra</a></li>
                                    <li><a href="#about" class="menu-item">Profil Pengajar Putri</a></li>
                                    <li><a href="#about" class="menu-item">Profil Santri</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Program & Kegiatan</a>
                                <ul>
                                    <li><a href="#promotion" class="menu-item">Tadabur Alam</a></li>
                                    <li><a href="#promotion" class="menu-item">Tadarus</a></li>
                                    <li><a href="#promotion" class="menu-item">Pendidikan Agama Islam</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Galeri</a>
                                <ul>
                                    <li><a href="#testimonials" class="menu-item">Foto Kegiatan Santri</a></li>
                                    <li><a href="#testimonials" class="menu-item">Pembelajaran</a></li>
                                </ul>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Main Content Start ***** -->
    <main>
        @yield('content')
    </main>
    <!-- ***** Main Content End ***** -->


    <!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h1>Buat Foto</h1>
                    </div>
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>More About <em>Al-Hidayah</em></h2>
                        <p>Wadah pembelajaran Al-Qur'an, penanaman akidah, serta pembentukan karakter islami bagi para santri sejak dini dengan metode yang menyenangkan dan terarah.</p>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; {{ date('Y') }} TPA Al-Hidayah. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer End ***** -->

    <!-- jQuery & JS Plugins -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @stack('scripts')

</body>
</html>