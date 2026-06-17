@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="heading-title">Layanan</h1>
                            <p class="mb-0">
                                Pilih layanan pemeriksaan laboratorium yang sesuai dengan kebutuhan kesehatan Anda.
                                Ratnalisa Laboratorium Klinik dan Patologi Anatomi menyediakan berbagai layanan
                                pemeriksaan dengan hasil yang akurat, cepat, dan terpercaya untuk membantu
                                pemantauan kondisi kesehatan secara menyeluruh.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Page Title -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Kategori Layanan Pemeriksaan Laboratorium</h2>
                <p>
                    Temukan berbagai pilihan layanan pemeriksaan kesehatan yang dapat membantu
                    mendeteksi, memantau, dan menjaga kondisi kesehatan Anda secara berkala.
                </p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <!-- Screening Diabetes -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="{{ asset('assets/img/health/cardiology-1.webp') }}" class="img-fluid"
                                    alt="">
                            </div>

                            <div class="service-content">
                                <h3>Hematologi</h3>

                                <p>
                                    Pemeriksaan darah lengkap untuk membantu mendeteksi berbagai kondisi kesehatan
                                    seperti anemia, infeksi, gangguan pembekuan darah, dan kelainan darah lainnya.
                                </p>

                                <div class="service-features">
                                    <span class="feature-item">
                                        <i class="fas fa-check"></i> Darah Lengkap
                                    </span>

                                    <span class="feature-item">
                                        <i class="fas fa-check"></i> Analisis Sel Darah
                                    </span>
                                </div>

                                <a href="{{ route('detail_layanan') }}" class="service-btn">
                                    <span>Lihat Detail & Daftar</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Screening Fungsi Hati -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="{{ asset('assets/img/health/dermatology-1.webp') }}" class="img-fluid"
                                    alt="">
                            </div>

                            <div class="service-content">
                                <h3>Diabetes</h3>

                                <p>
                                    Pemeriksaan kadar gula darah untuk membantu mendeteksi risiko diabetes serta
                                    memantau kondisi pasien yang sedang menjalani pengobatan diabetes.
                                </p>

                                <div class="service-features">
                                    <span class="feature-item">
                                        <i class="fas fa-check"></i> Gula Darah Puasa
                                    </span>

                                    <span class="feature-item">
                                        <i class="fas fa-check"></i> HbA1c
                                    </span>
                                </div>

                                <a href="{{ route('detail_layanan') }}" class="service-btn">
                                    <span>Lihat Detail & Daftar</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Screening Fungsi Ginjal -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="{{ asset('assets/img/health/neurology-3.webp') }}" class="img-fluid"
                                    alt="">
                            </div>

                            <div class="service-content">
                                <h3>Rematik</h3>

                                <p>
                                    Pemeriksaan laboratorium untuk membantu mendeteksi gangguan autoimun dan
                                    peradangan sendi yang berhubungan dengan penyakit rematik.
                                </p>

                                <div class="service-features">
                                    <span class="feature-item">
                                        <i class="fas fa-check"></i> Faktor Reumatoid
                                    </span>

                                    <span class="feature-item">
                                        <i class="fas fa-check"></i> Pemeriksaan Autoimun
                                    </span>
                                </div>

                                <a href="{{ route('detail_layanan') }}" class="service-btn">
                                    <span>Lihat Detail & Daftar</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </section>
        <!-- End Services Section -->

    </main>
@endsection
