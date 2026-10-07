@extends('layouts.app')

@section('title', 'Sejarah TPA Al-Hidayah')

@section('content')

    <!-- Header Halaman -->
    <div class="welcome-pg" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-white fw-bold">Sejarah <em>TPA Al-Hidayah</em></h1>
                    <p class="text-white-50 mt-2">Perjalanan dan dedikasi dalam membimbing generasi Qur'ani dari masa ke masa</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Ringkasan Pendirian (Awal Mula) -->
    <section class="section py-5" id="pendirian">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/foto.png') }}" class="img-fluid rounded-4 shadow-sm" alt="Sejarah Awal TPA">
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="left-heading mb-3">
                        <h2>Latar Belakang <em>Pendirian</em></h2>
                    </div>
                    <p class="text-secondary" style="line-height: 1.8;">
                        TPA Al-Hidayah didirikan atas landasan kepedulian mendalam terhadap pentingnya pendidikan Al-Qur'an dan penanaman akidah bagi anak-anak usia dini di lingkungan masyarakat lokal.
                    </p>
                    <p class="text-secondary" style="line-height: 1.8;">
                        Berawal dari majelis mengaji sederhana, TPA Al-Hidayah secara bertahap berkembang menjadi lembaga pendidikan non-formal yang terstruktur dengan mengintegrasikan kurikulum membaca Al-Qur'an, adab harian, serta hafalan surah pendek dan Asma'ul Husna.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Timeline Perjalanan -->
    <section class="section bg-light py-5" id="timeline-sejarah">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Jejak Langkah <em>Perkembangan</em></h2>
                        <p>Fase penting perkembangan TPA Al-Hidayah dalam membimbing para santri</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline">
                        <!-- Fase 1 -->
                        <li class="timeline-item">
                            <div class="timeline-badge"><i class="fa fa-flag"></i></div>
                            <div class="timeline-panel">
                                <span class="badge bg-success mb-2">Awal Mula</span>
                                <h4 class="fw-bold mb-2 text-dark">Gagasan & Pendirian Sederhana</h4>
                                <p class="text-secondary small mb-0">
                                    Diawali dari kegiatan halqah mengaji Al-Qur'an kecil di musholla lokal dengan beberapa santri awal yang didampingi oleh pengajar berdedikasi.
                                </p>
                            </div>
                        </li>

                        <!-- Fase 2 -->
                        <li class="timeline-item">
                            <div class="timeline-badge"><i class="fa fa-book"></i></div>
                            <div class="timeline-panel">
                                <span class="badge bg-success mb-2">Pengembangan</span>
                                <h4 class="fw-bold mb-2 text-dark">Penyusunan Kurikulum Terstruktur</h4>
                                <p class="text-secondary small mb-0">
                                    Mulai menerpakan metode pengajaran yang lebih terstruktur dengan menyelaraskan materi Akidah (Aqa'id) serta pembiasaan doa-doa harian.
                                </p>
                            </div>
                        </li>

                        <!-- Fase 3 -->
                        <li class="timeline-item">
                            <div class="timeline-badge"><i class="fa fa-star"></i></div>
                            <div class="timeline-panel">
                                <span class="badge bg-success mb-2">Masa Kini</span>
                                <h4 class="fw-bold mb-2 text-dark">Penguatan Sistem & Digitalisasi</h4>
                                <p class="text-secondary small mb-0">
                                    Memperluas jangkauan bimbingan dengan dukungan pengajar berlatar belakang pendidikan agama serta penyediaan sarana informasi berbasis web untuk wali santri.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nilai Utama / Fondasi -->
    <section class="section py-5" id="fondasi">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Prinsip & <em>Pilar Utama</em></h2>
                        <p>Nilai yang terus dipegang teguh sejak awal berdirinya TPA Al-Hidayah</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
                        <div class="icon-box mb-3 text-success fs-1">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Keikhlasan</h4>
                        <p class="text-secondary small">Mendidik dan mendampingi santri dengan penuh keikhlasan demi mengharap ridha Allah SWT.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
                        <div class="icon-box mb-3 text-success fs-1">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Keteladanan</h4>
                        <p class="text-secondary small">Memberikan contoh akhlakul karimah secara langsung dalam interaksi sehari-hari bersama santri.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
                        <div class="icon-box mb-3 text-success fs-1">
                            <i class="fa fa-users"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Kebersamaan</h4>
                        <p class="text-secondary small">Membangun sinergi yang erat antara pengajar, wali santri, dan warga sekitar dalam mendidik anak.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection