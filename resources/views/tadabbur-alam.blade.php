@extends('layouts.app')

@section('title', 'Tadabur Alam - TPA Al-Hidayah')

@section('content')

    <!-- Header Halaman -->
    <div class="welcome-pg" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-white fw-bold">Kegiatan <em>Tadabur Alam</em></h1>
                    <p class="text-white-50 mt-2">Mengenal keagungan ciptaan Allah SWT melalui pembelajaran outdoor yang menyenangkan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Ringkasan Program -->
    <section class="section py-5" id="tentang-tadabur">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/foto.png') }}" class="img-fluid rounded-4 shadow-sm" alt="Tadabur Alam Santri">
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="left-heading mb-3">
                        <h2>Mengenal Allah Melalui <em>Alam Semesta</em></h2>
                    </div>
                    <p class="text-secondary" style="line-height: 1.8;">
                        <strong>Tadabur Alam</strong> merupakan salah satu program luar ruangan unggulan TPA Al-Hidayah yang mengajak para santri untuk merenungi keindahan dan keagungan ciptaan Allah SWT di alam terbuka.
                    </p>
                    <p class="text-secondary" style="line-height: 1.8;">
                        Melalui kegiatan ini, santri tidak hanya belajar menghafal ayat-ayat Al-Qur'an, tetapi juga mengamati langsung bukti kekuasaan-Nya di alam sekitar, memupuk rasa syukur, serta mempererat tali ukhuwah antar-santri dan pengajar.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tujuan & Manfaat -->
    <section class="section bg-light py-5" id="manfaat-tadabur">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Manfaat & <em>Tujuan Kegiatan</em></h2>
                        <p>Nilai-nilai positif yang ditanamkan kepada para santri selama kegiatan luar ruangan</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                        <div class="icon-box mb-3 text-success fs-1">
                            <i class="fa fa-tree"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">Tafakur Ciptaan Allah</h4>
                        <p class="text-secondary small mb-0">Menanamkan kesadaran dan keimanan mendalam melalui pengamatan keindahan alam semesta secara langsung.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                        <div class="icon-box mb-3 text-success fs-1">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">Mempererat Ukhuwah</h4>
                        <p class="text-secondary small mb-0">Membangun kebersamaan, rasa saling peduli, dan kerjasama antar-santri lewat permainan edukatif.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                        <div class="icon-box mb-3 text-success fs-1">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">Peduli Lingkungan</h4>
                        <p class="text-secondary small mb-0">Mengajarkan adab terhadap alam sekitar, menjaga kebersihan, dan mencintai kelestarian lingkungan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Rangkaian Agenda Kegiatan -->
    <section class="section py-5" id="agenda-tadabur">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Rangkaian <em>Kegiatan</em></h2>
                        <p>Susunan acara yang diikuti para santri dalam program Tadabur Alam</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="agenda-card">
                        <span class="time-badge">Sesi 1</span>
                        <h5 class="fw-bold text-dark mb-2">Jalan Sehat & Dzikir Alam</h5>
                        <p class="text-secondary small mb-0">Menyusuri rute alam terbuka sambil membaca doa dan dzikir pagi bersama ustadz/ustadzah.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="agenda-card">
                        <span class="time-badge">Sesi 2</span>
                        <h5 class="fw-bold text-dark mb-2">Outbound & Games Edukasi</h5>
                        <p class="text-secondary small mb-0">Permainan kelompok islami yang melatih kedisiplinan, kekompakan, dan ketangkasan santri.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="agenda-card">
                        <span class="time-badge">Sesi 3</span>
                        <h5 class="fw-bold text-dark mb-2">Materi Diniyah Terbuka</h5>
                        <p class="text-secondary small mb-0">Penyampaian pesan moral singkat mengenai tadabur ayat-ayat Al-Qur'an tentang alam semesta.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="agenda-card">
                        <span class="time-badge">Sesi 4</span>
                        <h5 class="fw-bold text-dark mb-2">Makan Bersama & Operasi Semut</h5>
                        <p class="text-secondary small mb-0">Makan bersama di alam terbuka dan aksi pembersihan area dari sampah sebagai wujud adab pada alam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Galeri Dokumentasi -->
    <section class="section bg-light py-5" id="galeri-tadabur">
        <div class="container">
            <div class="row mb-4 text-center">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Dokumentasi <em>Kegiatan</em></h2>
                        <p>Momen keceriaan para santri TPA Al-Hidayah saat pelaksanaan Tadabur Alam</p>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('assets/images/foto.png') }}" alt="Dokumentasi 1">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('assets/images/foto.png') }}" alt="Dokumentasi 2">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="gallery-item">
                        <img src="{{ asset('assets/images/foto.png') }}" alt="Dokumentasi 3">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection