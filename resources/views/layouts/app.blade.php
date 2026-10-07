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
                                    <li><a href="{{ url('/') }}" class="menu-item">Home</a></li>
                                    <li><a href="{{ url('/sejarah') }}" class="menu-item">Sejarah TPA</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Tentang Kami</a>
                                <ul>
                                    <li><a href="{{ url('/pengajar-putra') }}" class="menu-item">Profil Pengajar TPA</a></li>
                                    <li><a href="{{ url('/profil-santri') }}" class="menu-item">Profil Santri</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Program & Kegiatan</a>
                                <ul>
                                    <li><a href="{{ url('/tadabbur-alam') }}" class="menu-item">Tadabur Alam</a></li>
                                    <li><a href="{{ url('/tadarus') }}" class="menu-item">Tadarus</a></li>
                                    <li><a href="{{ url('/pendidikan-agama-islam') }}" class="menu-item">Pendidikan Agama Islam</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Galeri</a>
                                <ul>
                                    <li><a href="{{ url('/foto-kegiatan-santri') }}" class="menu-item">Foto Kegiatan Santri</a></li>
                                    <li><a href="{{ url('/pembelajaran') }}" class="menu-item">Pembelajaran</a></li>
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

    <script>
        $(document).ready(function() {
            // 1. Toggle Menu Utama Mobile
            $('.menu-trigger').on('click', function(e) {
                e.preventDefault();
                $(this).toggleClass('active');
                $('.header-area .main-nav .nav').toggleClass('mobile-active');
            });

            // 2. Toggle Submenu Accordion di Mobile
            $('.header-area .main-nav .nav li.submenu > a').on('click', function(e) {
                if ($(window).width() <= 991) {
                    e.preventDefault();
                    var $parentLi = $(this).parent('li.submenu');
                    $parentLi.toggleClass('active');
                    $('.header-area .main-nav .nav li.submenu').not($parentLi).removeClass('active');
                }
            });

            // 3. PAKSA LINK NAVIGASI AGAR BISA PINDAH HALAMAN (BYPASS PREVENTDEFAULT TEMPLATE)
            $('.header-area .main-nav .nav li ul li a').off('click').on('click', function(e) {
                var href = $(this).attr('href');
                
                // Jika href tidak kosong, bukan '#', dan bukan 'javascript:;'
                if (href && href !== '#' && href !== 'javascript:;') {
                    e.stopPropagation(); // Hentikan script custom.js bawaan template
                    window.location.href = href; // Paksa pindah halaman ke URL link tersebut
                }
            });
        });
    </script>

    @stack('scripts')

</body>
</html>