@extends('layouts.app')

@section('title', 'Profil Pengajar Putra - TPA Al-Hidayah')

@section('content')

    <!-- Header Halaman -->
    <div class="welcome-pg" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-white fw-bold">Profil <em>Pengajar Putra</em></h1>
                    <p class="text-white-50 mt-2">Mengenal lebih dekat para ustadz dan pembimbing santri TPA Al-Hidayah</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Daftar Pengajar Putra -->
    <section class="section py-5" id="pengajar-putra">
        <div class="container">
            <div class="row g-4">
                
                <!-- Card Pengajar 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="{{ asset('assets/images/ustadz-1.jpg') }}" class="card-img-top" alt="Ustadz Achmad Nabil Mayda" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <span class="badge badge-tpa mb-2">Penanggung Jawab TPA AL-Hidayah</span>
                            <h4 class="fw-bold mb-1 text-dark">Ustadz Achmad Nabil Mayda</h4>
                            <p class="text-muted small mb-3">Pengajar TPA</p>
                            <p class="card-text text-secondary small">
                                Di TPA kita tidak hanya belajar membaca Al-Qur'an, tetapi juga sedang menanam benih kebaikan yang akan kita tuai di akhirat kelak."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card Pengajar 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="{{ asset('assets/images/ustadz-2.jpg') }}" class="card-img-top" alt="Ustadz Fariz Mishbahul" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <span class="badge badge-tpa mb-2">Pengajar TPA</span>
                            <h4 class="fw-bold mb-1 text-dark">Ustadz Fariz Mishbahul</h4>
                            <p class="text-muted small mb-3">Pengajar TPA</p>
                            <p class="card-text text-secondary small">
                                "Membimbing pembiasaan doa-doa harian, adab sehari-hari, serta pemaknaan Asma'ul Husna."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card Pengajar 3  -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="{{ asset('assets/images/ustadz-3.jpg') }}" class="card-img-top" alt="Ustadzah Citra Imaningrus" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <span class="badge badge-tpa mb-2">Pengajar TPA</span>
                            <h4 class="fw-bold mb-1 text-dark">Ustadzah Citra Imaningrus</h4>
                            <p class="text-muted small mb-3">Pengajar TPA</p>
                            <p class="card-text text-secondary small">
                                "Mengkoordinasi kegiatan pembelajaran dan memastikan kurikulum berjalan dengan nyaman bagi para santri."
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Card Pengajar 4  -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="{{ asset('assets/images/ustadz-3.jpg') }}" class="card-img-top" alt="Ustadzah Imroatul Hasanah" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <span class="badge badge-tpa mb-2">Pengajar TPA</span>
                            <h4 class="fw-bold mb-1 text-dark">Ustadzah Imroatul Hasanah</h4>
                            <p class="text-muted small mb-3">Pengajar TPA</p>
                            <p class="card-text text-secondary small">
                                "Mengkoordinasi kegiatan pembelajaran dan memastikan kurikulum berjalan dengan nyaman bagi para santri."
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card Pengajar 5  -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="{{ asset('assets/images/ustadz-3.jpg') }}" class="card-img-top" alt="Ustadzah Natasya Dwi Meryana Putri" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <span class="badge badge-tpa mb-2">Pengajar TPA</span>
                            <h4 class="fw-bold mb-1 text-dark">Ustadzah Natasya Dwi Meryana Putri</h4>
                            <p class="text-muted small mb-3">Pengajar TPA</p>
                            <p class="card-text text-secondary small">
                                "Mengkoordinasi kegiatan pembelajaran dan memastikan kurikulum berjalan dengan nyaman bagi para santri."
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card Pengajar 5 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="{{ asset('assets/images/ustadz-3.jpg') }}" class="card-img-top" alt="Ustadz Fikri Ardian" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <span class="badge badge-tpa mb-2">Pengajar TPA</span>
                            <h4 class="fw-bold mb-1 text-dark">Ustadz Fikri Ardian</h4>
                            <p class="text-muted small mb-3">Pengajar TPA</p>
                            <p class="card-text text-secondary small">
                                "Mengkoordinasi kegiatan pembelajaran dan memastikan kurikulum berjalan dengan nyaman bagi para santri."
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card Pengajar 6  -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="{{ asset('assets/images/ustadz-3.jpg') }}" class="card-img-top" alt="Ustadz Fayyadh Rasul Aziz" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <span class="badge badge-tpa mb-2">Pengajar TPA</span>
                            <h4 class="fw-bold mb-1 text-dark">Ustadz Fayyadh Rasul Aziz</h4>
                            <p class="text-muted small mb-3">Pengajar TPA</p>
                            <p class="card-text text-secondary small">
                                "Mengkoordinasi kegiatan pembelajaran dan memastikan kurikulum berjalan dengan nyaman bagi para santri."
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card Pengajar 7 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="{{ asset('assets/images/ustadz-3.jpg') }}" class="card-img-top" alt="Ustadz Asyura Almer" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <span class="badge badge-tpa mb-2">Pengajar TPA</span>
                            <h4 class="fw-bold mb-1 text-dark">Ustadz Asyura Almer</h4>
                            <p class="text-muted small mb-3">Pengajar TPA</p>
                            <p class="card-text text-secondary small">
                                "Mengkoordinasi kegiatan pembelajaran dan memastikan kurikulum berjalan dengan nyaman bagi para santri."
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card Pengajar 8  -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="{{ asset('assets/images/ustadz-3.jpg') }}" class="card-img-top" alt="Ustadz Fauzi Muhammad" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <span class="badge badge-tpa mb-2">Pengajar TPA</span>
                            <h4 class="fw-bold mb-1 text-dark">Ustadz Fauzi Muhammad</h4>
                            <p class="text-muted small mb-3">Pengajar TPA</p>
                            <p class="card-text text-secondary small">
                                "Mengkoordinasi kegiatan pembelajaran dan memastikan kurikulum berjalan dengan nyaman bagi para santri."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection