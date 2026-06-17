@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="heading-title">Detail Layanan Hematologi</h1>
                            <p class="mb-0">
                                Layanan Hematologi Ratnalisa Laboratorium Klinik dan Patologi Anatomi menyediakan
                                pemeriksaan darah yang akurat untuk membantu mendeteksi berbagai kondisi kesehatan
                                seperti anemia, infeksi, gangguan pembekuan darah, hingga pemantauan kesehatan secara
                                menyeluruh.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Details -->
        <section id="service-details-2" class="service-details-2 section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8 mx-auto text-center mb-5">
                        <div class="service-header">
                            <div class="service-category">
                                <span>Pemeriksaan Laboratorium</span>
                            </div>
                            <h2>Layanan Hematologi</h2>
                            <p class="lead">
                                Pemeriksaan darah lengkap untuk membantu diagnosis, pemantauan, dan pencegahan berbagai
                                kondisi kesehatan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row gy-4 align-items-center">

                    <!-- Kiri -->
                    <div class="col-lg-5">
                        <div class="service-details">

                            <div class="detail-item">
                                <div class="icon-wrapper">
                                    <i class="bi bi-droplet-fill"></i>
                                </div>
                                <div class="content">
                                    <h4>Pemeriksaan Darah Lengkap (CBC)</h4>
                                    <p>
                                        Mengukur kadar hemoglobin, eritrosit, leukosit, trombosit,
                                        serta parameter darah lainnya untuk mengetahui kondisi kesehatan pasien.
                                    </p>
                                </div>
                            </div>

                            <div class="detail-item">
                                <div class="icon-wrapper">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div class="content">
                                    <h4>Deteksi Dini Penyakit</h4>
                                    <p>
                                        Membantu mendeteksi anemia, infeksi, peradangan, gangguan pembekuan darah,
                                        hingga berbagai kelainan hematologi lainnya.
                                    </p>
                                </div>
                            </div>

                            <div class="detail-item">
                                <div class="icon-wrapper">
                                    <i class="bi bi-clipboard2-pulse"></i>
                                </div>
                                <div class="content">
                                    <h4>Monitoring Kondisi Pasien</h4>
                                    <p>
                                        Digunakan untuk memantau perkembangan kondisi pasien dan efektivitas terapi
                                        yang sedang dijalani.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Kanan -->
                    <div class="col-lg-7">
                        <div class="service-visual">
                            <img src="{{ asset('assets/img/health/cardiology-1.webp') }}" alt="Layanan Hematologi"
                                class="img-fluid rounded">

                            <div class="visual-overlay">
                                <div class="stats-card">
                                    <div class="stat">
                                        <span class="number">99%</span>
                                        <span class="label">Akurasi Hasil</span>
                                    </div>

                                    <div class="stat">
                                        <span class="number">24 Jam</span>
                                        <span class="label">Layanan Informasi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Overview -->
                <div class="row gy-4 mt-5">

                    <div class="col-12">
                        <div class="service-overview">

                            <div class="row align-items-center">

                                <div class="col-lg-6">
                                    <h3>Mengapa Memilih Layanan Hematologi Kami?</h3>

                                    <p>
                                        Ratnalisa Laboratorium Klinik dan Patologi Anatomi didukung oleh tenaga
                                        profesional dan peralatan modern yang menghasilkan pemeriksaan hematologi
                                        dengan tingkat akurasi tinggi. Setiap hasil pemeriksaan diproses sesuai
                                        standar laboratorium untuk memberikan informasi kesehatan yang terpercaya.
                                    </p>

                                    <div class="features-grid">

                                        <div class="feature">
                                            <i class="bi bi-award"></i>
                                            <span>Tenaga Laboratorium Profesional</span>
                                        </div>

                                        <div class="feature">
                                            <i class="bi bi-cpu"></i>
                                            <span>Peralatan Modern & Akurat</span>
                                        </div>

                                        <div class="feature">
                                            <i class="bi bi-shield-check"></i>
                                            <span>Standar Pemeriksaan Terpercaya</span>
                                        </div>

                                        <div class="feature">
                                            <i class="bi bi-clock-history"></i>
                                            <span>Pelayanan Cepat & Efisien</span>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="treatment-areas">
                                        <h4>Pemeriksaan Yang Tersedia</h4>

                                        <div class="condition-tags">
                                            <span class="tag">Darah Lengkap (CBC)</span>
                                            <span class="tag">Hemoglobin</span>
                                            <span class="tag">Hematokrit</span>
                                            <span class="tag">Leukosit</span>
                                            <span class="tag">Trombosit</span>
                                            <span class="tag">LED</span>
                                            <span class="tag">Golongan Darah</span>
                                            <span class="tag">Hitung Jenis Leukosit</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <!-- Action Cards -->
                <div class="row gy-4 mt-5">

                    <div class="col-lg-4">
                        <div class="action-card primary">
                            <div class="card-header">
                                <i class="bi bi-calendar-check"></i>
                                <h4>Daftar Pemeriksaan</h4>
                            </div>

                            <p>
                                Lakukan pendaftaran layanan hematologi secara online dengan mudah dan cepat.
                            </p>

                            <div class="card-footer">
                                <a href="#" class="btn-action">
                                    Daftar Sekarang
                                </a>

                                <span class="availability">
                                    Tersedia Setiap Hari
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="action-card secondary">
                            <div class="card-header">
                                <i class="bi bi-telephone"></i>
                                <h4>Hubungi Kami</h4>
                            </div>

                            <p>
                                Konsultasikan kebutuhan pemeriksaan Anda dengan tim kami.
                            </p>

                            <div class="card-footer">
                                <a href="https://wa.me081282820191" class="btn-action">
                                    Hubungi
                                </a>

                                <span class="availability">
                                    Jam Operasional Klinik
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="action-card tertiary">
                            <div class="card-header">
                                <i class="bi bi-file-earmark-medical"></i>
                                <h4>Hasil Pemeriksaan</h4>
                            </div>

                            <p>
                                Hasil pemeriksaan dapat diakses melalui akun pasien setelah proses selesai.
                            </p>

                            <div class="card-footer">
                                <a href="#" class="btn-action">
                                    Login Pasien
                                </a>

                                <span class="availability">
                                    Aman & Praktis
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

    </main>
@endsection
