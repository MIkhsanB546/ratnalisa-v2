@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="heading-title">Login Akun</h1>
                            <p class="mb-0">
                                Silakan masuk ke akun Anda untuk melakukan pendaftaran layanan
                                pemeriksaan di Ratnalisa Laboratorium Klinik dan Patologi Anatomi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Login Section -->
        <section class="section py-5">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-5 col-md-8">

                        <div class="card border-0 shadow-lg rounded-4">

                            <div class="card-body p-5">

                                <!-- Logo -->
                                <div class="text-center mb-4">

                                    <img src="{{ asset('assets/img/ratnalisa-logo.png') }}" alt="Ratnalisa Logo"
                                        width="90" class="mb-3">

                                    <h3 class="fw-bold">
                                        Selamat Datang
                                    </h3>

                                    <p class="text-muted mb-0">
                                        Masuk ke Sistem Ratnalisa
                                    </p>

                                </div>

                                <!-- Form -->
                                <form>

                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Email
                                        </label>

                                        <input type="email" class="form-control form-control-lg"
                                            placeholder="Masukkan email">

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Password
                                        </label>

                                        <input type="password" class="form-control form-control-lg"
                                            placeholder="Masukkan password">

                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-4">


                                        <a href="#" class="text-danger text-decoration-none">

                                            Lupa Password?

                                        </a>

                                    </div>

                                    <button type="submit" class="btn btn-danger w-100 py-3 rounded-pill fw-semibold">

                                        Masuk Sistem

                                    </button>

                                </form>

                                <!-- Register -->
                                <div class="text-center mt-4">

                                    <p class="mb-0">

                                        Belum memiliki akun?

                                        <a href="{{ route('register') }}" class="text-danger fw-bold text-decoration-none">

                                            Daftar Sekarang

                                        </a>

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>
@endsection
