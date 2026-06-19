@extends('admin.layouts.app')

@section('title', 'Tambah Pendaftaran')
@section('page-title', 'Tambah Pendaftaran')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.dashboard') }}">
            Dashboard
        </a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('admin.pendaftaran.index') }}">
            Pendaftaran
        </a>
    </li>

    <li class="breadcrumb-item active">
        Tambah Pendaftaran
    </li>
@endsection


@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Form Tambah Pendaftaran
            </h3>
        </div>
        <form action="{{ route('admin.pendaftaran.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">
                            Pasien
                        </label>
                        <select name="id_pasien" class="form-select @error('id_pasien') is-invalid @enderror">
                            <option value="">
                                Pilih Pasien
                            </option>

                            @foreach ($pasien as $item)
                                <option value="{{ $item->id_pasien }}" @selected(old('id_pasien') == $item->id_pasien)>

                                    {{ $item->nama }}
                                    ({{ $item->id_pasien }})
                                </option>
                            @endforeach

                        </select>

                        @error('id_pasien')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="col-md-6">

                        <label class="form-label">
                            Dokter
                        </label>

                        <select name="id_dokter" class="form-select @error('id_dokter') is-invalid @enderror">

                            <option value="">
                                Pilih Dokter
                            </option>

                            @foreach ($dokter as $item)
                                <option value="{{ $item->id_dokter }}" @selected(old('id_dokter') == $item->id_dokter)>

                                    {{ $item->nama }}

                                </option>
                            @endforeach

                        </select>


                        @error('id_dokter')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>



                    <div class="col-md-6">

                        <label class="form-label">
                            Jenis Kunjungan
                        </label>

                        <select name="jenis_kunjungan" class="form-select @error('jenis_kunjungan') is-invalid @enderror">

                            <option value="">
                                Pilih Jenis
                            </option>

                            <option value="PS" @selected(old('jenis_kunjungan') == 'PS')>

                                Permintaan Sendiri

                            </option>

                            <option value="PD" @selected(old('jenis_kunjungan') == 'PD')>

                                Permintaan Dokter

                            </option>

                        </select>


                        @error('jenis_kunjungan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>




                    <div class="col-md-6">

                        <label class="form-label">
                            Tanggal Daftar
                        </label>

                        <input type="date" name="tanggal_daftar"
                            value="{{ old('tanggal_daftar', now()->format('Y-m-d')) }}"
                            class="form-control @error('tanggal_daftar') is-invalid @enderror">


                        @error('tanggal_daftar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="col-md-6">

                        <label class="form-label">
                            Jadwal Periksa
                        </label>

                        <input type="datetime-local" name="jadwal_periksa" value="{{ old('jadwal_periksa') }}"
                            class="form-control @error('jadwal_periksa') is-invalid @enderror">


                        @error('jadwal_periksa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>




                    <div class="col-md-6">

                        <label class="form-label">
                            Status
                        </label>

                        <select name="status" class="form-select @error('status') is-invalid @enderror">

                            <option value="menunggu">
                                Menunggu
                            </option>

                            <option value="dijadwalkan">
                                Dijadwalkan
                            </option>

                            <option value="selesai">
                                Selesai
                            </option>

                            <option value="batal">
                                Batal
                            </option>

                        </select>


                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror


                    </div>




                    <div class="col-12">

                        <label class="form-label">
                            Catatan
                        </label>

                        <textarea name="catatan" rows="4" class="form-control @error('catatan') is-invalid @enderror">{{ old('catatan') }}</textarea>


                        @error('catatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                </div>

            </div>



            <div class="card-footer d-flex justify-content-end gap-2">

                <a href="{{ route('admin.pendaftaran.index') }}" class="btn btn-secondary">

                    Kembali

                </a>


                <button type="submit" class="btn btn-primary">

                    Simpan

                </button>

            </div>

        </form>

    </div>

@endsection
