@extends('layouts.app')

@section('title', 'Foto Kegiatan Santri - TPA Al-Hidayah')

@section('content')

    <!-- Header Halaman -->
    <div class="welcome-pg" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-white fw-bold">Dokumentasi <em>Kegiatan Santri</em></h1>
                    <p class="text-white-50 mt-2">Merekam kebersamaan, semangat belajar, dan kebahagiaan para santri TPA Al-Hidayah</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Galeri Foto -->
    <section class="section py-5" id="galeri-foto">
        <div class="container">
            
            <!-- Tombol Filter Kategori (Opsional Filter Visual) -->
            <div class="row mb-4">
                <div class="col-lg-12 text-center">
                    <button class="gallery-filter-btn active" data-filter="all">Semua Foto</button>
                    <button class="gallery-filter-btn" data-filter="belajar">Pembelajaran</button>
                    <button class="gallery-filter-btn" data-filter="outdoor">Tadabur & Outbound</button>
                    <button class="gallery-filter-btn" data-filter="pemberian">Acara & PHBI</button>
                </div>
            </div>

            <!-- Grid Foto -->
            <div class="row g-4">
                
                <!-- Foto 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="belajar">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/foto.png') }}" alt="Setoran Hafalan Santri">
                        <div class="gallery-overlay">
                            <span class="badge-kat">Pembelajaran</span>
                            <h5 class="text-white fw-bold fs-6 mb-1">Setoran Bacaan Al-Qur'an</h5>
                            <small class="text-white-50">Bimbingan privat bersama Ustadz</small>
                        </div>
                    </div>
                </div>

                <!-- Foto 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="outdoor">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/foto.png') }}" alt="Tadabur Alam">
                        <div class="gallery-overlay">
                            <span class="badge-kat">Tadabur & Outbound</span>
                            <h5 class="text-white fw-bold fs-6 mb-1">Jalan Sehat & Dzikir Alam</h5>
                            <small class="text-white-50">Kegiatan luar ruangan santri</small>
                        </div>
                    </div>
                </div>

                <!-- Foto 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="belajar">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/foto.png') }}" alt="Praktek Shalat">
                        <div class="gallery-overlay">
                            <span class="badge-kat">Pembelajaran</span>
                            <h5 class="text-white fw-bold fs-6 mb-1">Praktek Shalat Berjamaah</h5>
                            <small class="text-white-50">Bimbingan Fiqih ibadah santri</small>
                        </div>
                    </div>
                </div>

                <!-- Foto 4 -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="pemberian">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/foto.png') }}" alt="Peringatan Hari Besar">
                        <div class="gallery-overlay">
                            <span class="badge-kat">Acara & PHBI</span>
                            <h5 class="text-white fw-bold fs-6 mb-1">Peringatan Tahun Baru Islam</h5>
                            <small class="text-white-50">Lomba hafalan dan pentas santri</small>
                        </div>
                    </div>
                </div>

                <!-- Foto 5 -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="outdoor">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/foto.png') }}" alt="Outbound Santri">
                        <div class="gallery-overlay">
                            <span class="badge-kat">Tadabur & Outbound</span>
                            <h5 class="text-white fw-bold fs-6 mb-1">Games Edukasi Islami</h5>
                            <small class="text-white-50">Melatih kedisiplinan dan kebersamaan</small>
                        </div>
                    </div>
                </div>

                <!-- Foto 6 -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="belajar">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/foto.png') }}" alt="Kajian Doa Harian">
                        <div class="gallery-overlay">
                            <span class="badge-kat">Pembelajaran</span>
                            <h5 class="text-white fw-bold fs-6 mb-1">Hafalan Asma'ul Husna</h5>
                            <small class="text-white-50">Pembiasaan doa sebelum mengaji</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Script Sederhana untuk Filter Kategori Foto
        $('.gallery-filter-btn').click(function() {
            var filter = $(this).attr('data-filter');

            $('.gallery-filter-btn').removeClass('active');
            $(this).addClass('active');

            if (filter === 'all') {
                $('.gallery-item-box').fadeIn(300);
            } else {
                $('.gallery-item-box').hide();
                $('.gallery-item-box[data-category="' + filter + '"]').fadeIn(300);
            }
        });
    });
</script>
@endpush