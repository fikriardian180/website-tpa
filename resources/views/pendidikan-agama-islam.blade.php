@extends('layouts.app')

@section('title', 'Pendidikan Agama Islam - TPA Al-Hidayah')

@section('content')

    <!-- Header Halaman -->
    <div class="welcome-pg" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-white fw-bold">Pendidikan <em>Agama Islam</em></h1>
                    <p class="text-white-50 mt-2">Membentuk pemahaman akidah, ibadah, dan pembentukan karakter akhlakul karimah sejak dini</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Pengantar Kurikulum Diniyah -->
    <section class="section py-5" id="tentang-diniyah">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/foto.png') }}" class="img-fluid rounded-4 shadow-sm" alt="Pelajaran Pendidikan Agama Islam">
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="left-heading mb-3">
                        <h2>Fondasi Pemahaman <em>Keislaman Santri</em></h2>
                    </div>
                    <p class="text-secondary" style="line-height: 1.8;">
                        Selain kelancaran membaca Al-Qur'an, TPA Al-Hidayah membekali para santri dengan materi <strong>Pendidikan Agama Islam (Diniyah)</strong> secara sistematis dan menyenangkan.
                    </p>
                    <p class="text-secondary" style="line-height: 1.8;">
                        Materi dirancang berjenjang merujuk pada prinsip-prinsip akidah yang kokoh, bimbingan bersuci dan shalat, tata krama (adab) sehari-hari, serta keteladanan dari kisah para Nabi dan Rasul.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Kurikulum & Pokok Bahasan -->
    <section class="section bg-light py-5" id="pilar-materi">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Materi Utama <em>Pembelajaran</em></h2>
                        <p>Pilar ilmu keislaman dasar yang diajarkan dalam pembelajaran klasikal santri</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Card 1: Akidah & Tauhid -->
                <div class="col-lg-3 col-md-6">
                    <div class="diniyah-card">
                        <div class="icon-box-diniyah">
                            <i class="fa fa-shield"></i>
                        </div>
                        <span class="badge badge-topik mb-2">Akidah & Tauhid</span>
                        <h5 class="fw-bold text-dark mb-2">Penanaman Keimanan</h5>
                        <p class="text-secondary small mb-0" style="line-height: 1.7;">
                            Mengenal Allah SWT, Rukun Iman, Rukun Islam, Sifat 20, serta membentengi santri dari pemahaman tercela.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Fiqih & Ibadah -->
                <div class="col-lg-3 col-md-6">
                    <div class="diniyah-card">
                        <div class="icon-box-diniyah">
                            <i class="fa fa-child"></i>
                        </div>
                        <span class="badge badge-topik mb-2">Fiqih Ibadah</span>
                        <h5 class="fw-bold text-dark mb-2">Praktek Wudhu & Shalat</h5>
                        <p class="text-secondary small mb-0" style="line-height: 1.7;">
                            Bimbingan tata cara bersuci (Thaharah), gerakan dan bacaan shalat fardhu, shalat sunnah, serta zikir setelah shalat.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Adab & Akhlak -->
                <div class="col-lg-3 col-md-6">
                    <div class="diniyah-card">
                        <div class="icon-box-diniyah">
                            <i class="fa fa-heart"></i>
                        </div>
                        <span class="badge badge-topik mb-2">Akhlakul Karimah</span>
                        <h5 class="fw-bold text-dark mb-2">Adab Sehari-hari</h5>
                        <p class="text-secondary small mb-0" style="line-height: 1.7;">
                            Pembiasaan adab kepada orang tua, guru, sesama teman, adab makan/minum, masuk masjid, dan adab menuntut ilmu.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Sirah Nabawiyah -->
                <div class="col-lg-3 col-md-6">
                    <div class="diniyah-card">
                        <div class="icon-box-diniyah">
                            <i class="fa fa-bookmark"></i>
                        </div>
                        <span class="badge badge-topik mb-2">Sirah Nabawiyah</span>
                        <h5 class="fw-bold text-dark mb-2">Kisah Nabi & Sahabat</h5>
                        <p class="text-secondary small mb-0" style="line-height: 1.7;">
                            Meneladani kepribadian dan perjuangan Nabi Muhammad SAW, para 25 Nabi/Rasul, serta para sahabat pahlawan Islam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Metode Penyampaian Diniyah -->
    <section class="section py-5" id="metode-diniyah">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="left-heading mb-3">
                        <h2>Metode Pengajaran yang <em>Interaktif</em></h2>
                    </div>
                    <p class="text-secondary mb-4" style="line-height: 1.8;">
                        Agar santri mudah menyerap dan tidak merasa jenuh saat belajar ilmu Diniyah, TPA Al-Hidayah menerapkan beberapa metode bimbingan interaktif:
                    </p>

                    <div class="d-flex mb-3 align-items-start">
                        <div class="me-3 text-success fs-3"><i class="fa fa-check-circle"></i></div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Cerita & Keteladanan (*Storytelling*)</h6>
                            <p class="text-secondary small mb-0">Penyampaian kisah-kisah hikmah secara komunikatif yang menarik imajinasi dan pesan moral santri.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-3 align-items-start">
                        <div class="me-3 text-success fs-3"><i class="fa fa-check-circle"></i></div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Praktek Langsung (*Demonstrasi*)</h6>
                            <p class="text-secondary small mb-0">Santri melakukan simulasi wudhu dan shalat berjamaah secara langsung dengan bimbingan ustadz/ustadzah.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="me-3 text-success fs-3"><i class="fa fa-check-circle"></i></div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Hafalan Matan & Doa Harian</h6>
                            <p class="text-secondary small mb-0">Pengulangan doa harian bersama-sama sebelum dan sesudah pembelajaran diawali.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="p-4 bg-light rounded-4 border-start border-4 border-success shadow-sm">
                        <h4 class="fw-bold text-dark mb-3"><i class="fa fa-lightbulb-o text-warning me-2"></i>Target Output Santri</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 text-secondary small d-flex align-items-center">
                                <i class="fa fa-angle-right text-success me-2 fw-bold"></i>
                                Santri mampu melaksanakan ibadah shalat 5 waktu secara mandiri dan benar.
                            </li>
                            <li class="mb-3 text-secondary small d-flex align-items-center">
                                <i class="fa fa-angle-right text-success me-2 fw-bold"></i>
                                Santri hafal doa-doa harian (makan, tidur, keluar rumah, orang tua).
                            </li>
                            <li class="mb-3 text-secondary small d-flex align-items-center">
                                <i class="fa fa-angle-right text-success me-2 fw-bold"></i>
                                Santri terbiasa bersikap sopan dan berakhlak mulia di rumah maupun sekolah.
                            </li>
                            <li class="text-secondary small d-flex align-items-center">
                                <i class="fa fa-angle-right text-success me-2 fw-bold"></i>
                                Santri memahami rukun keimanan dan prinsip dasar dalam Islam.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection