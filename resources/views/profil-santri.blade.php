@extends('layouts.app')

@section('title', 'Profil Santri - TPA Al-Hidayah')

@section('content')

    <!-- Header Halaman -->
    <div class="welcome-pg" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-white fw-bold">Profil <em>Santri TPA</em></h1>
                    <p class="text-white-50 mt-2">Gambaran umum generasi penerus Qur'ani di TPA Al-Hidayah</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Ringkasan Statistik Santri -->
    <section class="section py-5" id="statistik-santri">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fa fa-users"></i></div>
                        <h3>30+</h3>
                        <p class="text-muted mb-0 fw-medium">Total Santri Aktif</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fa fa-male"></i></div>
                        <h3>15+</h3>
                        <p class="text-muted mb-0 fw-medium">Santri Putra</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fa fa-female"></i></div>
                        <h3>15+</h3>
                        <p class="text-muted mb-0 fw-medium">Santri Putri</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Jenjang & Kelompok Belajar -->
    <section class="section bg-light py-5" id="kelompok-belajar">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Kelompok & <em>Jenjang Belajar</em></h2>
                        <p>Sistem pembagian kelas santri disesuaikan dengan tingkat kemampuan bacaan Al-Qur'an</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Kelompok Iqro -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                        <div class="card-body">
                            <span class="badge badge-jenjang mb-3">Tingkat Dasar</span>
                            <h4 class="fw-bold text-dark mb-3">Kelas Iqro' (Jilid 1 - 6)</h4>
                            <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                Bimbingan pengenalan huruf Hijaiyah, makhrajul huruf dasar, serta pengenalan tajwid dasar untuk santri pemula.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kelompok Al-Qur'an -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                        <div class="card-body">
                            <span class="badge badge-jenjang mb-3">Tingkat Lanjut</span>
                            <h4 class="fw-bold text-dark mb-3">Kelas Tadarus Al-Qur'an</h4>
                            <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                Pemantapan bacaan Al-Qur'an secara fasih sesuai kaidah Tajwid, kelancaran bacaan, serta pembiasaan adab terhadap Al-Qur'an.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kelompok Tahfidz & Doa -->
                <div class="col-lg-4 col-md-12">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                        <div class="card-body">
                            <span class="badge badge-jenjang mb-3">Program Khusus</span>
                            <h4 class="fw-bold text-dark mb-3">Tahfidz Surah Pendek</h4>
                            <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                Program bimbingan hafalan Juz Amma (Juz 30), hafalan doa-doa harian, serta hafalan dan pemaknaan Asma'ul Husna.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Rutinitas Kegiatan Santri -->
    <section class="section py-5" id="rutinitas-santri">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                    <div class="left-heading">
                        <h2>Rutinitas Harian <em>Santri</em></h2>
                    </div>
                    <p class="text-secondary mt-3" style="line-height: 1.8;">
                        Pembelajaran di TPA Al-Hidayah dilaksanakan secara rutin dengan suasana yang tertib namun tetap menyenangkan bagi anak-anak.
                    </p>
                    <img src="{{ asset('assets/images/foto.png') }}" class="img-fluid rounded-4 shadow-sm mt-3" alt="Kegiatan Santri">
                </div>

                <div class="col-lg-7 col-md-12">
                    <ul class="list-group routine-list">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-bold text-dark mb-1">1. Pembukaan & Doa Bersama</h6>
                                <small class="text-muted">Membaca doa sebelum belajar, Asma'ul Husna, dan surah pendek pilihan secara jamaah.</small>
                            </div>
                            <span class="badge bg-success rounded-pill ms-2">Awal</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-bold text-dark mb-1">2. Bimbingan Privat (Iqro' / Al-Qur'an)</h6>
                                <small class="text-muted">Santri menyimak dan setoran bacaan secara tatap muka (*sorogan*) dengan ustadz / ustadzah.</small>
                            </div>
                            <span class="badge bg-success rounded-pill ms-2">Inti</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-bold text-dark mb-1">3. Materi Diniyah & Akidah</h6>
                                <small class="text-muted">Penyampaian materi klasikal tentang Rukun Iman, kisah nabi, serta adab akhlakul karimah.</small>
                            </div>
                            <span class="badge bg-success rounded-pill ms-2">Klasikal</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-bold text-dark mb-1">4. Penutup & Musafahah</h6>
                                <small class="text-muted">Doa penutup majelis (*Kaffaratul Majelis*) dan bersalaman dengan pengajar sebelum pulang.</small>
                            </div>
                            <span class="badge bg-success rounded-pill ms-2">Akhir</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection