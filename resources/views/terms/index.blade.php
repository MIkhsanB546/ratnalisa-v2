@extends('layouts.app')
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="heading-title">Syarat & Ketentuan</h1>
                            <p class="mb-0">
                                Halaman ini berisi syarat dan ketentuan penggunaan website
                                Ratnalisa Laboratorium Klinik dan Patologi Anatomi.
                                Dengan mengakses website atau menggunakan layanan kami,
                                Anda dianggap telah membaca, memahami, dan menyetujui
                                seluruh ketentuan yang berlaku.
                            </p>
                        </div>
                    </div>
                </div>
            </div>v>
            </nav>
        </div><!-- End Page Title -->

        <!-- Terms Of Service Section -->
        <section id="terms-of-service" class="terms-of-service section">

            <div class="container" data-aos="fade-up">
                <div class="tos-header text-center" data-aos="fade-up"> <span class="last-updated">Terakhir Diperbarui :
                        Juni
                        2026</span>
                    <h2>Syarat & Ketentuan Layanan</h2>
                    <p> Mohon membaca syarat dan ketentuan ini dengan seksama sebelum menggunakan website dan layanan
                        Ratnalisa Laboratorium Klinik dan Patologi Anatomi. </p>
                </div>
                <div class="tos-content" data-aos="fade-up" data-aos-delay="200">
                    <div class="content-section">
                        <h3>1. Persetujuan Penggunaan</h3>
                        <p> Dengan mengakses website ini, Anda menyetujui seluruh syarat dan ketentuan yang berlaku. Jika
                            Anda tidak setuju dengan ketentuan ini, mohon untuk tidak menggunakan layanan website. </p>
                    </div>
                    <div class="content-section">
                        <h3>2. Layanan Laboratorium</h3>
                        <p> Ratnalisa Laboratorium Klinik dan Patologi Anatomi menyediakan informasi layanan pemeriksaan
                            laboratorium, pendaftaran, konsultasi informasi, dan akses hasil pemeriksaan sesuai ketentuan
                            yang berlaku. </p>
                        <ul class="list-items">
                            <li>Pemeriksaan Hematologi</li>
                            <li>Pemeriksaan Kimia Klinik</li>
                            <li>Pemeriksaan Imunologi</li>
                            <li>Pemeriksaan Urinalisis</li>
                            <li>Pemeriksaan Patologi Anatomi</li>
                        </ul>
                    </div>
                    <div class="content-section">
                        <h3>3. Pendaftaran dan Data Pengguna</h3>
                        <p> Pengguna wajib memberikan informasi yang benar, lengkap, dan dapat dipertanggungjawabkan saat
                            melakukan pendaftaran layanan pemeriksaan laboratorium. </p>
                        <div class="alert-box"> <i class="bi bi-exclamation-triangle"></i>
                            <div class="alert-content">
                                <h5>Penting</h5>
                                <p> Kesalahan data yang diberikan pengguna dapat mempengaruhi proses administrasi maupun
                                    hasil layanan yang diterima. </p>
                            </div>
                        </div>
                    </div>
                    <div class="content-section">
                        <h3>4. Penggunaan Website</h3>
                        <p> Pengguna dilarang menggunakan website untuk aktivitas yang melanggar hukum atau merugikan pihak
                            lain. </p>
                        <div class="prohibited-list">
                            <div class="prohibited-item"> <i class="bi bi-x-circle"></i> <span>Menyebarkan informasi
                                    palsu</span> </div>
                            <div class="prohibited-item"> <i class="bi bi-x-circle"></i> <span>Mengakses sistem tanpa
                                    izin</span> </div>
                            <div class="prohibited-item"> <i class="bi bi-x-circle"></i> <span>Mengunggah virus atau
                                    malware</span> </div>
                            <div class="prohibited-item"> <i class="bi bi-x-circle"></i> <span>Menyalahgunakan data pasien
                                    atau pengguna lain</span> </div>
                        </div>
                    </div>
                    <div class="content-section">
                        <h3>5. Hasil Pemeriksaan</h3>
                        <p> Hasil pemeriksaan laboratorium hanya dapat digunakan sebagai informasi medis dan harus
                            dikonsultasikan lebih lanjut dengan dokter atau tenaga kesehatan yang berwenang. </p>
                        <div class="info-box"> <i class="bi bi-info-circle"></i>
                            <p> Interpretasi hasil laboratorium tidak dapat dijadikan diagnosis medis tanpa evaluasi dokter.
                            </p>
                        </div>
                    </div>
                    <div class="content-section">
                        <h3>6. Batasan Tanggung Jawab</h3>
                        <p> Ratnalisa Laboratorium Klinik dan Patologi Anatomi berupaya menjaga keakuratan informasi pada
                            website, namun tidak bertanggung jawab atas kerugian yang timbul akibat kesalahan penggunaan
                            informasi oleh pengguna. </p>
                    </div>
                    <div class="content-section">
                        <h3>7. Perubahan Ketentuan</h3>
                        <p> Kami berhak mengubah syarat dan ketentuan sewaktu-waktu tanpa pemberitahuan sebelumnya.
                            Perubahan akan ditampilkan pada halaman ini dan berlaku sejak tanggal pembaruan. </p>
                    </div>
                    <div class="content-section">
                        <h3>8. Hukum yang Berlaku</h3>
                        <p> Seluruh penggunaan layanan dan website Ratnalisa Laboratorium Klinik dan Patologi Anatomi tunduk
                            pada hukum dan peraturan yang berlaku di Republik Indonesia. </p>
                    </div>
                </div>
                <div class="tos-contact" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-box">
                        <div class="contact-icon"> <i class="bi bi-envelope"></i> </div>
                        <div class="contact-content">
                            <h4>Pertanyaan Mengenai Syarat & Ketentuan?</h4>
                            <p> Jika Anda memiliki pertanyaan terkait penggunaan layanan atau website kami, silakan hubungi
                                tim Ratnalisa Laboratorium Klinik dan Patologi Anatomi. </p> <a href="{{ route('kontak') }}"
                                class="contact-link"> Hubungi Kami </a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Terms Of Service Section -->

    </main>
@endsection
