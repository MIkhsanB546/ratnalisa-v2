<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ratnalisa | Laboratorium Klinik</title>

    <meta name="description" content="Ratnalisa Laboratorium Klinik dan Patologi Anatomi">
    <meta name="keywords" content="Klinik, Laboratorium, Medical Check Up, Patologi Anatomi">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/ratnalisa-logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/ratnalisa-logo.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@400;500;600;700&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

    <!-- HEADER -->
    <header id="header" class="header fixed-top">

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">

                <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                    <img src="{{ asset('assets/img/ratnalisa-logo-full.png') }}" alt="Logo Ratnalisa">
                </a>

                <!-- NAVBAR -->
                <nav id="navmenu" class="navmenu">

                    <ul>

                        <li>
                            <a href="{{ route('beranda') }}"
                                class="{{ request()->routeIs('beranda') ? 'active' : '' }}">
                                Beranda
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('tentang') }}"
                                class="{{ request()->routeIs('tentang') ? 'active' : '' }}">
                                Tentang
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('layanan') }}"
                                class="{{ request()->routeIs('layanan') ? 'active' : '' }}">
                                Layanan
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('kontak') }}"
                                class="{{ request()->routeIs('kontak') ? 'active' : '' }}">
                                Kontak
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">
                                Login
                            </a>
                        </li>
                        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                    </ul>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

                </nav>
                <!-- END NAVBAR -->

            </div>

        </div>

    </header>
    <!-- END HEADER -->

    {{-- CONTENT --}}
    @yield('content')

    <!-- FOOTER -->
    <footer id="footer" class="footer-16 footer position-relative">

        <div class="container">

            <div class="footer-main" data-aos="fade-up">

                <div class="row align-items-start">

                    <!-- KOLOM KIRI -->
                    <div class="col-lg-5">

                        <div class="brand-section">

                            <a href="{{ url('/') }}" class="logo d-flex align-items-center mb-4">

                                <span class="sitename">
                                    Ratnalisa
                                </span>

                            </a>

                            <p class="brand-description">

                                Ratnalisa Laboratorium Klinik dan Patologi Anatomi
                                hadir untuk memberikan pelayanan kesehatan yang cepat,
                                akurat, terpercaya serta didukung oleh tenaga medis
                                profesional dan teknologi laboratorium modern.

                            </p>

                            <div class="contact-info mt-5">

                                <div class="contact-item">
                                    <i class="bi bi-geo-alt"></i>

                                    <span>
                                        Jl. Brigjend Saptadji Hadiprawira No.8A
                                        Kota Bogor
                                    </span>
                                </div>

                                <div class="contact-item">
                                    <i class="bi bi-telephone"></i>

                                    <span>
                                        (0251) 8366707 | 0812 8282 0191
                                    </span>
                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- KOLOM KANAN -->
                    <div class="col-lg-7">

                        <div class="footer-nav-wrapper">

                            <div class="row">

                                <!-- TENTANG -->
                                <div class="col-6 col-lg-3">

                                    <div class="nav-column">

                                        <h6>Tentang Kami</h6>

                                        <nav class="footer-nav">
                                            <a href="{{ route('beranda') }}">
                                                Beranda
                                            </a>

                                            <a href="{{ route('tentang') }}">
                                                Profil Klinik
                                            </a>

                                        </nav>

                                    </div>

                                </div>

                                <!-- JAM OPERASIONAL -->
                                <div class="col-6 col-lg-3">

                                    <div class="nav-column">

                                        <h6>Jam Operasional</h6>

                                        <nav class="footer-nav">

                                            <a href="#">
                                                Senin - Jumat
                                            </a>

                                            <a href="#">
                                                07.00 - 21.00
                                            </a>

                                            <a href="#">
                                                Sabtu
                                            </a>

                                            <a href="#">
                                                07.00 - 18.00
                                            </a>

                                        </nav>

                                    </div>

                                </div>

                                <!-- KONTAK -->
                                <div class="col-6 col-lg-3">

                                    <div class="nav-column">

                                        <h6>Kontak</h6>

                                        <nav class="footer-nav">

                                            <a href="#">
                                                (0251) 8366707 | 0812 8282 0191
                                            </a>

                                            <a href="#">
                                                Kota Bogor
                                            </a>

                                        </nav>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- COPYRIGHT -->
        <div class="footer-bottom">

            <div class="container">

                <div class="bottom-content">

                    <div class="row align-items-center">

                        <div class="col-lg-6">

                            <div class="copyright">

                                <p>
                                    © 2026
                                    <span class="sitename">
                                        Ratnalisa
                                    </span>

                                    . All Rights Reserved.
                                </p>

                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="legal-links">

                                <a href="{{ route('privacy') }}">
                                    Privacy Policy
                                </a>

                                <a href="{{ route('terms') }}">
                                    Terms of Service
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer>
    <!-- END FOOTER -->

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">

        <i class="bi bi-arrow-up-short"></i>

    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
