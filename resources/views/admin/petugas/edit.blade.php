@extends('admin.layouts.app')

@section('title', 'Edit Petugas')
@section('page-title', 'Edit Petugas')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Edit Petugas</h3>
        </div>

        <form action="{{ route('admin.petugas.update', $petugas) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="id_petugas" class="form-label">ID Petugas</label>
                        <input type="text" id="id_petugas" class="form-control" value="{{ $petugas->id_petugas }}"
                            disabled>
                    </div>

                    <div class="col-12">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is-invalid @enderror"
                            value="{{ old('nama', $petugas->nama) }}" required maxlength="100">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username"
                            class="form-control @error('username') is-invalid @enderror"
                            value="{{ old('username', $petugas->username) }}" required maxlength="100">
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" id="role" class="form-select @error('role') is-invalid @enderror"
                            required>
                            <option value="">Pilih role</option>
                            <option value="admin" @selected(old('role', $petugas->role) === 'admin')>admin</option>
                            <option value="marketing" @selected(old('role', $petugas->role) === 'marketing')>marketing</option>
                            <option value="manager" @selected(old('role', $petugas->role) === 'manager')>manager</option>
                            <option value="cs" @selected(old('role', $petugas->role) === 'cs')>cs</option>
                            <option value="staff_pelayanan" @selected(old('role', $petugas->role) === 'staff_pelayanan')>staff_pelayanan</option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="password" class="form-label">Password Baru</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror" minlength="8">
                        <div class="form-text">Kosongkan jika tidak ingin mengubah password.</div>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror" minlength="8">
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card-footer d-flex justify-content-end gap-2">
                <a href="{{ route('admin.petugas.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-1" aria-hidden="true"></i>
                    Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-1" aria-hidden="true"></i>
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection
