@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="heading-title">Tentang Ratnalisa</h1>
                            <p class="mb-0">
                                Ratnalisa Laboratorium Klinik dan Patologi Anatomi hadir sebagai mitra kesehatan
                                masyarakat dengan menyediakan layanan pemeriksaan laboratorium yang akurat,
                                terpercaya, dan profesional untuk mendukung diagnosis serta pemantauan kondisi kesehatan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up">

                <div class="row align-items-center">

                    <div class="col-lg-6" data-aos="fade-right">

                        <div class="about-content">

                            <h2>Laboratorium Klinik dan Patologi Anatomi Terpercaya di Kota Bogor</h2>

                            <p class="lead">
                                Ratnalisa Laboratorium Klinik dan Patologi Anatomi merupakan fasilitas pelayanan kesehatan
                                yang berkomitmen memberikan hasil pemeriksaan yang akurat, cepat, dan terpercaya untuk
                                membantu tenaga medis maupun masyarakat dalam menjaga kesehatan.
                            </p>

                            <p>
                                Dengan pengalaman panjang di bidang laboratorium kesehatan, Ratnalisa terus berupaya
                                meningkatkan kualitas pelayanan melalui dukungan tenaga profesional, penggunaan teknologi
                                laboratorium yang modern, serta penerapan standar mutu yang baik.
                            </p>

                            <p>
                                Kami percaya bahwa hasil pemeriksaan laboratorium yang tepat merupakan bagian penting dalam
                                membantu proses diagnosis, pemantauan terapi, serta pencegahan berbagai penyakit.
                            </p>

                            <div class="stats-grid">

                                <div class="stat-item">
                                    <span class="stat-number">100%</span>
                                    <span class="stat-label">Komitmen Pelayanan</span>
                                </div>

                                <div class="stat-item">
                                    <span class="stat-number">24/7</span>
                                    <span class="stat-label">Dukungan Informasi</span>
                                </div>

                                <div class="stat-item">
                                    <span class="stat-number">∞</span>
                                    <span class="stat-label">Kepercayaan Pasien</span>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-left">

                        <div class="image-wrapper">

                            {{-- Ganti dengan foto gedung Ratnalisa --}}
                            <img src="{{ asset('assets/img/100.png') }}" class="img-fluid main-image rounded-4 shadow"
                                alt="Gedung Ratnalisa">

                            <div class="floating-image" data-aos="zoom-in">

                                {{-- Ganti dengan foto laboratorium --}}
                                <img src="{{ asset('assets/img/200.png') }}" class="img-fluid rounded-4 shadow"
                                    alt="Laboratorium Ratnalisa">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- End About Section -->



        <!-- Sejarah -->
        <section class="section light-background">

            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-12 text-center mb-5">
                        <h2>Sejarah Singkat</h2>
                        <p>
                            Ratnalisa Laboratorium Klinik dan Patologi Anatomi berkembang sebagai fasilitas kesehatan
                            yang berfokus pada pelayanan pemeriksaan laboratorium berkualitas.
                            Seiring perkembangan kebutuhan masyarakat akan layanan kesehatan yang akurat dan terpercaya,
                            Ratnalisa terus meningkatkan kualitas pelayanan, kompetensi sumber daya manusia,
                            serta teknologi pemeriksaan laboratorium.
                        </p>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Sejarah -->



        <!-- Visi Misi -->
        <section class="section">

            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-6 mb-4">

                        <div class="service-item p-4 shadow-sm rounded-4 h-100">

                            <h3 class="mb-3">Visi</h3>

                            <p>
                                Menjadi laboratorium klinik dan patologi anatomi yang terpercaya,
                                profesional, serta berorientasi pada mutu pelayanan kesehatan masyarakat.
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="service-item p-4 shadow-sm rounded-4 h-100">

                            <h3 class="mb-3">Misi</h3>

                            <ul>
                                <li>Memberikan pelayanan laboratorium yang akurat dan terpercaya.</li>
                                <li>Meningkatkan kualitas sumber daya manusia secara berkelanjutan.</li>
                                <li>Mengutamakan kepuasan dan kenyamanan pasien.</li>
                                <li>Mengembangkan teknologi dan sistem pelayanan yang modern.</li>
                                <li>Menjunjung tinggi etika profesi dan standar mutu pelayanan kesehatan.</li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- End Visi Misi -->



        <!-- Nilai-Nilai -->
        <section class="section light-background">

            <div class="container">

                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h2>Nilai-Nilai Kami</h2>
                        <p>
                            Nilai yang menjadi dasar Ratnalisa dalam memberikan pelayanan terbaik kepada masyarakat.
                        </p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 mb-4">

                        <div class="value-item text-center">

                            <div class="value-icon mb-3">
                                <i class="bi bi-shield-check fs-1"></i>
                            </div>

                            <h4>Profesionalisme</h4>

                            <p>
                                Memberikan pelayanan dengan standar mutu tinggi dan hasil yang dapat dipercaya.
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <div class="value-item text-center">

                            <div class="value-icon mb-3">
                                <i class="bi bi-award fs-1"></i>
                            </div>

                            <h4>Integritas</h4>

                            <p>
                                Menjunjung tinggi kejujuran, etika profesi, dan tanggung jawab.
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <div class="value-item text-center">

                            <div class="value-icon mb-3">
                                <i class="bi bi-heart-pulse fs-1"></i>
                            </div>

                            <h4>Kepedulian</h4>

                            <p>
                                Mengutamakan kebutuhan pasien dengan pelayanan yang ramah dan humanis.
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <div class="value-item text-center">

                            <div class="value-icon mb-3">
                                <i class="bi bi-lightbulb fs-1"></i>
                            </div>

                            <h4>Inovasi</h4>

                            <p>
                                Terus mengembangkan teknologi dan kualitas pelayanan kesehatan.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- End Nilai-Nilai -->

    </main>
@endsection
