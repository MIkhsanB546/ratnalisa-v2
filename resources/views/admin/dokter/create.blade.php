@extends('admin.layouts.app')

@section('title', 'Tambah Dokter')
@section('page-title', 'Tambah Dokter')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Dokter</h3>
        </div>
        <form action="{{ route('dokter.store') }}" method="POST">
            @csrf

            <div class="card-body">
                <div class="row g-3">

                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama Dokter</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>

                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>

                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="spesialisasi" class="form-label">
                            Spesialisasi
                        </label>

                        <input type="text" name="spesialisasi" id="spesialisasi"
                            class="form-control @error('spesialisasi') is-invalid @enderror"
                            value="{{ old('spesialisasi') }}">

                        @error('spesialisasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="no_hp" class="form-label">
                            No. HP
                        </label>

                        <input type="text" name="no_hp" id="no_hp"
                            class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}">

                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="card-footer d-flex justify-content-end gap-2">
                <a href="{{ route('dokter.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
