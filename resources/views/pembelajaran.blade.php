@extends('layouts.app')

@section('title', 'Foto Pembelajaran - TPA Al-Hidayah')

@section('content')

    <!-- Header Halaman -->
    <div class="welcome-pg" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-white fw-bold">Dokumentasi <em>Pembelajaran</em></h1>
                    <p class="text-white-50 mt-2">Momen aktivitas belajar mengaji dan bimbingan keislaman santri TPA Al-Hidayah</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Galeri Foto Pembelajaran -->
    <section class="section py-5" id="galeri-pembelajaran">
        <div class="container">
            
            <!-- Filter Kategori Kustom -->
            <div class="row mb-4">
                <div class="col-lg-12 text-center">
                    <button class="gallery-filter-btn active" data-filter="all">Semua Kategori</button>
                    <button class="gallery-filter-btn" data-filter="iqro">Iqro' & Al-Qur'an</button>
                    <button class="gallery-filter-btn" data-filter="diniyah">Materi Diniyah</button>
                    <button class="gallery-filter-btn" data-filter="praktek">Praktek Ibadah</button>
                </div>
            </div>

            <!-- Grid Foto Pembelajaran -->
            <div class="row g-4">
                
                <!-- Card 1: Bimbingan Iqro -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="iqro">
                    <div class="learning-card">
                        <div class="learning-img-wrapper">
                            <span class="learning-badge">Iqro' & Al-Qur'an</span>
                            <img src="{{ asset('assets/images/foto.png') }}" alt="Bimbingan Iqro Privat">
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-2">Bimbingan Privat Iqro'</h5>
                            <p class="text-secondary small mb-0">Ustadz membimbing santri secara tatap muka (*sorogan*) untuk pemantapan makhrajul huruf.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Bimbingan Sorogan Al-Qur'an -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="iqro">
                    <div class="learning-card">
                        <div class="learning-img-wrapper">
                            <span class="learning-badge">Iqro' & Al-Qur'an</span>
                            <img src="{{ asset('assets/images/foto.png') }}" alt="Sorogan Al-Qur'an">
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-2">Tadarus & Sorogan Al-Qur'an</h5>
                            <p class="text-secondary small mb-0">Penyemakan bacaan Al-Qur'an santri tingkat lanjut dengan penerapan hukum tajwid yang presisi.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Kajian Klasikal Diniyah -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="diniyah">
                    <div class="learning-card">
                        <div class="learning-img-wrapper">
                            <span class="learning-badge">Materi Diniyah</span>
                            <img src="{{ asset('assets/images/foto.png') }}" alt="Kajian Diniyah Klasikal">
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-2">Pembelajaran Akidah & Akhlak</h5>
                            <p class="text-secondary small mb-0">Sesi kelas bersama membahas pemahaman Rukun Iman, Rukun Islam, serta adab harian santri.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Praktek Wudhu -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="praktek">
                    <div class="learning-card">
                        <div class="learning-img-wrapper">
                            <span class="learning-badge">Praktek Ibadah</span>
                            <img src="{{ asset('assets/images/foto.png') }}" alt="Praktek Wudhu">
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-2">Bimbingan Tata Cara Wudhu</h5>
                            <p class="text-secondary small mb-0">Simulasi bersuci (*thaharah*) secara urut dan tertib didampingi oleh pengajar.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Praktek Shalat -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="praktek">
                    <div class="learning-card">
                        <div class="learning-img-wrapper">
                            <span class="learning-badge">Praktek Ibadah</span>
                            <img src="{{ asset('assets/images/foto.png') }}" alt="Praktek Shalat Berjamaah">
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-2">Simulasi Shalat Berjamaah</h5>
                            <p class="text-secondary small mb-0">Pembiasaan gerakan dan bacaan shalat fardhu secara teratur dan khusyuk.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 6: Hafalan Doa & Asma'ul Husna -->
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item-box" data-category="diniyah">
                    <div class="learning-card">
                        <div class="learning-img-wrapper">
                            <span class="learning-badge">Materi Diniyah</span>
                            <img src="{{ asset('assets/images/foto.png') }}" alt="Hafalan Doa Bersama">
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-2">Hafalan Doa & Asma'ul Husna</h5>
                            <p class="text-secondary small mb-0">Pembiasaan melantunkan Asma'ul Husna dan doa harian secara bersama-sama sebelum kelas dimulai.</p>
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
        // Filter Kategori Foto Pembelajaran
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