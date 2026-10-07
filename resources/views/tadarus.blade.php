@extends('layouts.app')

@section('title', 'Tadarus Al-Qur\'an - TPA Al-Hidayah')

@section('content')

    <!-- Header Halaman -->
    <div class="welcome-pg" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-white fw-bold">Program <em>Tadarus Al-Qur'an</em></h1>
                    <p class="text-white-50 mt-2">Membimbing santri membaca, menyimak, dan mengkaji Al-Qur'an sesuai kaidah Tajwid</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Ringkasan Program -->
    <section class="section py-5" id="tentang-tadarus">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/foto.png') }}" class="img-fluid rounded-4 shadow-sm" alt="Kegiatan Tadarus Santri">
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="left-heading mb-3">
                        <h2>Membiasakan Interaksi Bersama <em>Al-Qur'an</em></h2>
                    </div>
                    <p class="text-secondary" style="line-height: 1.8;">
                        Kegiatan <strong>Tadarus Al-Qur'an</strong> di TPA Al-Hidayah merupakan wadah bimbingan rutin bagi para santri untuk melancarkan bacaan, memperbaiki makhrajul huruf, serta menerapkan hukum-hukum tajwid secara benar.
                    </p>
                    <p class="text-secondary" style="line-height: 1.8;">
                        Melalui metode *Sima'i* (menyimak) dan *Sorogan* (membaca langsung di depan pengajar), santri dilatih untuk memiliki percaya diri dalam membaca Al-Qur'an serta menumbuhkan rasa cinta terhadap kitab suci sejak usia dini.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Metode & Fokus Bimbingan -->
    <section class="section bg-light py-5" id="metode-tadarus">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Metode Pembelajaran <em>Tadarus</em></h2>
                        <p>Pendekatan terstruktur dalam membimbing kelancaran dan pemahaman bacaan santri</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="tadarus-card text-center">
                        <div class="icon-wrapper">
                            <i class="fa fa-book"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">Bimbingan Sorogan</h4>
                        <p class="text-secondary small mb-0">Santri membaca halaman Al-Qur'an secara individu di hadapan ustadz/ustadzah untuk dikoreksi makhraj dan panjang pendeknya secara mendetail.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="tadarus-card text-center">
                        <div class="icon-wrapper">
                            <i class="fa fa-users"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">Tadarus Klasikal (Sima'i)</h4>
                        <p class="text-secondary small mb-0">Membaca ayat Al-Qur'an secara bergantian dalam kelompok, di mana santri lain menyimak dan ikut membetulkan jika ada kekeliruan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="tadarus-card text-center">
                        <div class="icon-wrapper">
                            <i class="fa fa-star"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">Penerapan Tajwid Praktis</h4>
                        <p class="text-secondary small mb-0">Pengenalan hukum-hukum tajwid dasar seperti Nun Mati/Tanwin, Mad, dan Idgham secara langsung pada ayat yang sedang dibaca.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Adab & Target Pembacaan -->
    <section class="section py-5" id="adab-target">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="left-heading mb-3">
                        <h2>Pembiasaan Adab <em>Membaca Al-Qur'an</em></h2>
                    </div>
                    <p class="text-secondary mb-4" style="line-height: 1.8;">
                        Selain ketepatan bacaan, TPA Al-Hidayah senantiasa menekankan pentingnya menjaga adab-adab mulia ketika berinteraksi dengan Al-Qur'an:
                    </p>

                    <ul class="list-group target-list">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fa fa-check-circle text-success fs-5 me-3"></i>
                            <span class="text-dark font-weight-medium">Bersuci (Wudhu) sebelum memegang dan membaca Al-Qur'an</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fa fa-check-circle text-success fs-5 me-3"></i>
                            <span class="text-dark font-weight-medium">Duduk dengan rapi dan menghadap kiblat saat majelis</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fa fa-check-circle text-success fs-5 me-3"></i>
                            <span class="text-dark font-weight-medium">Mengawali dengan Ta'awwudz dan Basmalah secara khusyuk</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fa fa-check-circle text-success fs-5 me-3"></i>
                            <span class="text-dark font-weight-medium">Menjaga ketenangan dan tidak bergurau saat menyimak bacaan</span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="bg-light p-4 rounded-4 shadow-sm border-start border-4 border-success">
                        <h4 class="fw-bold text-dark mb-3"><i class="fa fa-bullseye text-success me-2"></i>Target Capaian Santri</h4>
                        <div class="mb-3">
                            <h6 class="fw-bold text-dark mb-1">1. Kelancaran Bacaan</h6>
                            <p class="text-secondary small mb-0">Santri mampu membaca Al-Qur'an tanpa terbata-bata dengan hukum Mad yang konsisten.</p>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <h6 class="fw-bold text-dark mb-1">2. Ketepatan Makhraj & Tajwid</h6>
                            <p class="text-secondary small mb-0">Menguasai pengeluaran bunyi huruf Hijaiyah sesuai dengan tempatnya (*Makharijul Huruf*).</p>
                        </div>
                        <hr>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">3. Khatam Bertahap</h6>
                            <p class="text-secondary small mb-0">Menuntaskan bacaan Al-Qur'an 30 Juz secara bertahap bersama kelompok dan ustadz/ustadzah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection