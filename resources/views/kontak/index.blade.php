@extends('layouts.app')
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="heading-title">Hubungi Ratnalisa</h1>
                            <p class="mb-0">
                                Memiliki pertanyaan mengenai layanan laboratorium, jadwal pemeriksaan,
                                atau informasi lainnya? Tim Ratnalisa Laboratorium Klinik dan Patologi
                                Anatomi siap memberikan pelayanan terbaik untuk membantu kebutuhan kesehatan Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="contact-info-wrapper">
                            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="100">
                                <div class="info-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h3>Alamat Kami</h3>
                                    <p>Jl. Brigjend Saptadji Hadiprawira No.8A
                                        Kota Bogor</p>
                                </div>
                            </div>

                            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="info-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="info-content">
                                    <h3>Telepon Kami</h3>
                                    <p>(0251) 8366707</p>
                                    <p>0812 8282 0191</p>
                                </div>
                            </div>

                            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="info-icon">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <div class="info-content">
                                    <h3>Jam Operasional Kami</h3>
                                    <p>Senin - Jumat : 07.00 - 21.00</p>
                                    <p>Sabtu : 07.00 - 18.00</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="map-wrapper h-100" data-aos="fade-up" data-aos-delay="200">
                            <div class="map-overlay"></div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.654816966532!2d106.76112447499327!3d-6.5651798934280405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c529aac44e71%3A0x95267bb721b32401!2sRatnalisa%20Laboratorium%20Klinik%20dan%20Patologi%20Anatomi!5e0!3m2!1sid!2sid!4v1781520768596!5m2!1sid!2sid"
                                width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>



        </section><!-- /Contact Section -->

    </main>
@endsection
