@extends('admin.layouts.app')

@section('title', 'Tambah Pasien')
@section('page-title', 'Tambah Pasien')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Pasien</h3>
        </div>
        <form action="{{ route('admin.pasien.store') }}" method="POST">
            @csrf

            <div class="card-body">
                <div class="row g-3">

                    <div class="col-12">
                        <h5>Identitas Pasien</h5>
                        <hr>
                    </div>

                    <div class="col-md-4">
                        <label for="nik" class="form-label">NIK</label>

                        <input type="text" name="nik" id="nik" maxlength="16" minlength="16"
                            pattern="[0-9]{16}" inputmode="numeric" class="form-control @error('nik') is-invalid @enderror"
                            value="{{ old('nik') }}" required>

                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="nama" class="form-label">Nama</label>

                        <input type="text" name="nama" id="nama" maxlength="100"
                            class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>

                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <label for="jenis_kelamin" class="form-label">
                            Jenis Kelamin
                        </label>

                        <select name="jenis_kelamin" id="jenis_kelamin"
                            class="form-select @error('jenis_kelamin') is-invalid @enderror" required>

                            <option value="">
                                Pilih
                            </option>

                            <option value="L" @selected(old('jenis_kelamin') == 'L')>

                                Laki-laki

                            </option>

                            <option value="P" @selected(old('jenis_kelamin') == 'P')>

                                Perempuan

                            </option>

                        </select>

                        @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <label for="tgl_lahir" class="form-label">
                            Tanggal Lahir
                        </label>

                        <input type="date" name="tgl_lahir" id="tgl_lahir"
                            class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ old('tgl_lahir') }}"
                            required>

                        @error('tgl_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <div class="col-12 mt-2">
                        <h5>Kontak</h5>
                        <hr>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">
                            Email
                        </label>

                        <input type="email" name="email" id="email" maxlength="100"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="no_hp" class="form-label">
                            No. HP
                        </label>

                        <input type="text" name="no_hp" id="no_hp" maxlength="15"
                            class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}" required>

                        @error('no_hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <div class="col-12 mt-2">
                        <h5>Akun Login</h5>
                        <hr>
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label">
                            Password
                        </label>

                        <input type="password" name="password" id="password" minlength="8"
                            class="form-control @error('password') is-invalid @enderror" required>

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="password_confirmation" class="form-label">
                            Konfirmasi Password
                        </label>

                        <input type="password" name="password_confirmation" id="password_confirmation" minlength="8"
                            class="form-control" required>
                    </div>



                    <div class="col-12 mt-2">
                        <h5>Alamat</h5>
                        <hr>
                    </div>

                    <div class="col-12">
                        <label for="alamat" class="form-label">
                            Alamat
                        </label>

                        <textarea name="alamat" id="alamat" rows="4" class="form-control @error('alamat') is-invalid @enderror"
                            required>{{ old('alamat') }}</textarea>

                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="card-footer d-flex justify-content-end gap-2">
                <a href="{{ route('admin.pasien.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-1" aria-hidden="true"></i>
                    Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-1" aria-hidden="true"></i>
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
