@extends('layouts.app')
@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">

                            <h1 data-aos="fade-right" data-aos-delay="300">
                                <span class="highlight">Ratnalisa</span> Laboratorium Klinik dan Patologi Anatomi
                            </h1>

                            <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                                Laboratorium Klinik dan Patologi Anatomi yang menyediakan layanan pemeriksaan kesehatan
                                secara profesional, cepat, akurat, dan terpercaya. Didukung oleh tenaga medis berpengalaman
                                serta teknologi laboratorium modern untuk membantu masyarakat menjaga kesehatan dengan lebih
                                baik.
                            </p>

                            <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                                <div class="stat-item">
                                    <h3>
                                        <span data-purecounter-start="0" data-purecounter-end="10"
                                            data-purecounter-duration="2" class="purecounter"></span>+
                                    </h3>
                                    <p>Tahun Pengalaman</p>
                                </div>
                                <div class="stat-item">
                                    <h3>
                                        <span data-purecounter-start="0" data-purecounter-end="1000"
                                            data-purecounter-duration="2" class="purecounter"></span>+
                                    </h3>
                                    <p>Pemeriksaan Dilayani</p>
                                </div>
                                <div class="stat-item">
                                    <h3>
                                        <span data-purecounter-start="0" data-purecounter-end="20"
                                            data-purecounter-duration="2" class="purecounter"></span>+
                                    </h3>
                                    <p>Tenaga Profesional</p>
                                </div>
                            </div>

                            <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                                <a href="{{ route('layanan') }}" class="btn btn-primary">Lihat Layanan</a>
                                <a href="{{ route('kontak') }}" class="btn btn-outline glightbox">
                                    <i class="bi bi-telephone me-2"></i>
                                    Hubungi Kami
                                </a>
                            </div>

                            <div class="emergency-contact" data-aos="fade-right" data-aos-delay="700">
                                <div class="emergency-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="emergency-info">
                                    <small>Telepon</small>
                                    <strong>(0251) 8366707 | 0812 8282 0191</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                            <div class="main-image">
                                <img src="assets/img/ratna1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="background-elements">
                                <div class="element element-1"></div>
                                <div class="element element-2"></div>
                                <div class="element element-3"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- Home About Section -->
        <section id="home-about" class="home-about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                        <div class="about-content">
                            <h2 class="section-heading">Profil Singkat Ratnalisa Laboratorium Klinik</h2>
                            <p class="lead-text">Ratnalisa Laboratorium Klinik dan Patologi Anatomi hadir sebagai fasilitas
                                kesehatan yang berkomitmen memberikan hasil pemeriksaan yang akurat, cepat, dan terpercaya.
                            </p>

                            <p> Kami menyediakan berbagai layanan pemeriksaan laboratorium mulai dari hematologi, kimia
                                klinik, imunologi, mikrobiologi, hingga patologi anatomi. Dengan dukungan tenaga profesional
                                dan peralatan modern, kami siap membantu kebutuhan pemeriksaan kesehatan masyarakat maupun
                                institusi.</p>
                            <div class="cta-section">
                                <a href="{{ route('tentang') }}" class="btn-primary">Tentang Kami</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="about-visual">
                            <div class="main-image">
                                <img src="assets/img/ratna2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="background-elements">
                                <div class="element element-1"></div>
                                <div class="element element-2"></div>
                                <div class="element element-3"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Home About Section -->

        <!-- Featured Departments Section -->
        <section id="featured-departments" class="featured-departments section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan Unggulan</h2>
                <p>Berbagai layanan pemeriksaan laboratorium yang tersedia di Ratnalisa Laboratorium Klinik dan Patologi
                    Anatomi.</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="specialty-card">
                            <div class="specialty-content">
                                <div class="specialty-meta">
                                    <span class="specialty-label">Specialized Care</span>
                                </div>
                                <h3>Hematologi</h3>
                                <p>Pemeriksaan darah lengkap untuk membantu mendeteksi berbagai kondisi kesehatan seperti
                                    anemia, infeksi, dan gangguan darah lainnya.</p>
                                <div class="specialty-features">
                                    <span><i class="bi bi-check-circle-fill"></i>Darah Lengkap</span>
                                    <span><i class="bi bi-check-circle-fill"></i>Analisis Sel Darah</span>
                                </div>
                            </div>
                            <div class="specialty-visual">
                                <img src="assets/img/health/cardiology-1.webp" alt="Cardiovascular Medicine"
                                    class="img-fluid">
                                <div class="visual-overlay">
                                    <i class="bi bi-heart-pulse"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Specialty Card -->

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="specialty-card">
                            <div class="specialty-content">
                                <div class="specialty-meta">
                                    <span class="specialty-label">Patologi Anatomi</span>
                                </div>
                                <h3>Neurological Sciences</h3>
                                <p>Pemeriksaan jaringan dan sel tubuh untuk membantu diagnosis penyakit secara lebih akurat
                                    melalui analisis mikroskopis.</p>
                                <div class="specialty-features">
                                    <span><i class="bi bi-check-circle-fill"></i>Biopsi Jaringan</span>
                                    <span><i class="bi bi-check-circle-fill"></i>Sitologi</span>
                                </div>
                            </div>
                            <div class="specialty-visual">
                                <img src="assets/img/health/neurology-4.webp" alt="Neurological Sciences"
                                    class="img-fluid">
                                <div class="visual-overlay">
                                    <i class="bi bi-cpu"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Specialty Card -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="department-highlight">
                            <div class="highlight-icon">
                                <i class="bi bi-shield-plus"></i>
                            </div>
                            <h4>Kimia Klinik</h4>
                            <p>Pemeriksaan berbagai parameter kimia dalam darah untuk memantau fungsi organ dan kondisi
                                metabolisme tubuh.</p>
                            <ul class="highlight-list">
                                <li>Sports Medicine</li>
                                <li>Joint Replacement</li>
                                <li>Spine Surgery</li>
                            </ul>
                            <a href="department-details.html" class="highlight-cta">Learn More</a>
                        </div>
                    </div><!-- End Department Highlight -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="department-highlight">
                            <div class="highlight-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h4>Diabetes</h4>
                            <p>Pemeriksaan kadar gula darah dan pemantauan diabetes untuk membantu menjaga kesehatan pasien
                                secara optimal.</p>
                            <ul class="highlight-list">
                                <li>Neonatal Intensive Care</li>
                                <li>Developmental Pediatrics</li>
                                <li>Pediatric Surgery</li>
                            </ul>
                            <a href="department-details.html" class="highlight-cta">Learn More</a>
                        </div>
                    </div><!-- End Department Highlight -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="department-highlight">
                            <div class="highlight-icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <h4>Rematik</h4>
                            <p>Pemeriksaan laboratorium untuk membantu diagnosis dan pemantauan penyakit rematik dan
                                autoimun.</p>
                            <ul class="highlight-list">
                                <li>Precision Medicine</li>
                                <li>Immunotherapy</li>
                                <li>Radiation Oncology</li>
                            </ul>
                            <a href="department-details.html" class="highlight-cta">Learn More</a>
                        </div>
                    </div>

                </div>

                <div class="emergency-banner" data-aos="fade-up" data-aos-delay="400">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="emergency-content">
                                <h3>Konsultasi dan Informasi Layanan</h3>
                                <p>Hubungi Ratnalisa Laboratorium Klinik dan Patologi Anatomi untuk informasi layanan,
                                    jadwal pemeriksaan, dan konsultasi kebutuhan laboratorium Anda.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a href="tel:+02518366707" class="emergency-btn">
                                <i class="bi bi-telephone-fill"></i>
                                Hubungi Kami: (0251) 8366707
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Featured Departments Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan Pemeriksaan Laboratorium Profesional</h2>
                <p>Ratnalisa menyediakan berbagai layanan pemeriksaan laboratorium klinik dan patologi anatomi dengan
                    standar kualitas tinggi untuk mendukung diagnosis dan pemantauan kesehatan pasien.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                        <div class="featured-service-main">
                            <div class="service-image-wrapper">
                                <img src="assets/img/health/consultation-4.webp" alt="Premier Healthcare Services"
                                    class="img-fluid" loading="lazy">
                                <div class="service-overlay">
                                    <div class="service-badge">
                                        <i class="bi bi-heart-pulse"></i>
                                        <span>Emergency Care</span>
                                    </div>
                                </div>
                            </div>
                            <div class="service-details">
                                <h2>Comprehensive Healthcare Excellence</h2>
                                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum
                                    primis in faucibus
                                    orci luctus et ultrices posuere cubilia curae donec velit neque.</p>
                                <a href="{{ route('layanan') }}" class="main-cta">Lihat Semua Layanan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                        <div class="services-sidebar">

                            <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="service-icon-wrapper">
                                    <i class="bi bi-capsule"></i>
                                </div>
                                <div class="service-info">
                                    <h4>Dermatology Clinic</h4>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas.</p>
                                    <a href="#!" class="service-link">Learn More</a>
                                </div>
                            </div>

                            <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="service-icon-wrapper">
                                    <i class="bi bi-bandaid"></i>
                                </div>
                                <div class="service-info">
                                    <h4>Surgery Center</h4>
                                    <p>Donec rutrum congue leo eget malesuada curabitur arcu erat accumsan id imperdiet
                                        et porttitor at
                                        sem.</p>
                                    <a href="#!" class="service-link">Learn More</a>
                                </div>
                            </div>

                            <div class="service-item" data-aos="fade-up" data-aos-delay="600">
                                <div class="service-icon-wrapper">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <div class="service-info">
                                    <h4>Diagnostics Lab</h4>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui cras
                                        ultricies ligula sed
                                        magna.</p>
                                    <a href="#!" class="service-link">Learn More</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Featured Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="hero-content">
                    <div class="row align-items-center">

                        <div class="col-lg-6">
                            <div class="content-wrapper" data-aos="fade-up" data-aos-delay="200">
                                <h1>Jaga Kesehatan Anda Bersama Ratnalisa</h1>
                                <p>Lakukan pemeriksaan kesehatan secara rutin dengan layanan laboratorium yang cepat,
                                    akurat, dan terpercaya untuk mendukung kualitas hidup yang lebih baik.</p>

                                <div class="cta-wrapper">
                                    <a href="{{ route('layanan') }}" class="primary-cta">
                                        <span>Daftar Layanan</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <a href="{{ route('kontak') }}" class="secondary-cta">
                                        <span>Hubungi Kami</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="image-container" data-aos="fade-left" data-aos-delay="300">
                                <img src="assets/img/health/facilities-9.webp" alt="Medical Excellence"
                                    class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="features-section">

                    <div class="row g-0">

                        <div class="col-lg-4">
                            <div class="feature-block" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h3>Hasil Akurat</h3>
                                <p>Menggunakan peralatan laboratorium modern dengan standar pemeriksaan yang terpercaya.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="feature-block" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-icon">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <h3>Pelayanan Cepat</h3>
                                <p>Proses pemeriksaan yang efisien untuk memberikan hasil tepat waktu kepada pasien.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="feature-block" data-aos="fade-up" data-aos-delay="400">
                                <div class="feature-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <h3>Tenaga Profesional</h3>
                                <p>Didukung oleh tenaga medis dan analis laboratorium yang berpengalaman..</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Call To Action Section -->

    </main>
@endsection
