@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="heading-title">Registrasi Pasien</h1>
                            <p class="mb-0">
                                Silakan lengkapi data diri Anda untuk membuat akun pasien.
                                Data yang telah didaftarkan akan digunakan saat melakukan
                                pendaftaran pemeriksaan sehingga Anda tidak perlu mengisi ulang
                                data pribadi setiap kali melakukan pendaftaran layanan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register Section -->
        <section class="section py-5">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10">

                        <div class="card border-0 shadow-lg rounded-4">

                            <div class="card-body p-5">

                                <div class="text-center mb-5">
                                    <h2 class="fw-bold">Form Registrasi Pasien</h2>
                                    <p class="text-muted">
                                        Lengkapi seluruh data berikut dengan benar.
                                    </p>
                                </div>

                                <form action="#" method="POST" enctype="multipart/form-data">

                                    @csrf

                                    <div class="row">

                                        <!-- Foto Profil -->
                                        <div class="col-12 mb-4">
                                            <label class="form-label fw-semibold">
                                                Foto Profil
                                            </label>

                                            <input type="file" class="form-control" accept="image/*">
                                        </div>

                                        <!-- NIK -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Nomor KTP (NIK)
                                            </label>

                                            <input type="text" class="form-control" placeholder="Masukkan Nomor KTP">
                                        </div>

                                        <!-- Nama -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Nama Lengkap
                                            </label>

                                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
                                        </div>

                                        <!-- Tempat Lahir -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Tempat Lahir
                                            </label>

                                            <input type="text" class="form-control" placeholder="Contoh: Bogor">
                                        </div>

                                        <!-- Tanggal Lahir -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Tanggal Lahir
                                            </label>

                                            <input type="date" class="form-control">
                                        </div>

                                        <!-- Jenis Kelamin -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Jenis Kelamin
                                            </label>

                                            <select class="form-select">
                                                <option selected disabled>
                                                    Pilih Jenis Kelamin
                                                </option>
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>

                                        <!-- Status -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Status Perkawinan
                                            </label>

                                            <select class="form-select">
                                                <option selected disabled>
                                                    Pilih Status
                                                </option>
                                                <option>Belum Menikah</option>
                                                <option>Menikah</option>
                                                <option>Cerai Hidup</option>
                                                <option>Cerai Mati</option>
                                            </select>
                                        </div>

                                        <!-- Agama -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Agama
                                            </label>

                                            <select class="form-select">
                                                <option selected disabled>
                                                    Pilih Agama
                                                </option>
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Katolik</option>
                                                <option>Hindu</option>
                                                <option>Buddha</option>
                                                <option>Konghucu</option>
                                            </select>
                                        </div>

                                        <!-- Pendidikan -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Pendidikan Terakhir
                                            </label>

                                            <select class="form-select">
                                                <option selected disabled>
                                                    Pilih Pendidikan
                                                </option>
                                                <option>SD</option>
                                                <option>SMP</option>
                                                <option>SMA/SMK</option>
                                                <option>D3</option>
                                                <option>S1</option>
                                                <option>S2</option>
                                                <option>S3</option>
                                            </select>
                                        </div>

                                        <!-- Pekerjaan -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Pekerjaan
                                            </label>

                                            <input type="text" class="form-control" placeholder="Masukkan Pekerjaan">
                                        </div>

                                        <!-- No HP -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Nomor Handphone
                                            </label>

                                            <input type="text" class="form-control" placeholder="08xxxxxxxxxx">
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Email
                                            </label>

                                            <input type="email" class="form-control" placeholder="email@gmail.com">
                                        </div>

                                        <!-- Password -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Password
                                            </label>

                                            <input type="password" class="form-control" placeholder="Masukkan Password">
                                        </div>

                                        <!-- Konfirmasi Password -->
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-semibold">
                                                Konfirmasi Password
                                            </label>

                                            <input type="password" class="form-control" placeholder="Ulangi Password">
                                        </div>

                                    </div>

                                    <div class="d-grid mt-4">
                                        <button type="submit" class="btn btn-danger btn-lg">
                                            <i class="bi bi-person-plus-fill me-2"></i>
                                            Daftar Akun Pasien
                                        </button>
                                    </div>

                                    <div class="text-center mt-4">
                                        <span class="text-muted">
                                            Sudah memiliki akun?
                                        </span>

                                        <a href="{{ route('login') }}" class="text-danger fw-semibold text-decoration-none">
                                            Login Sekarang
                                        </a>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>
@endsection
