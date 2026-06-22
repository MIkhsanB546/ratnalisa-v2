@extends('admin.layouts.app')
@section('title', 'Detail Pendaftaran')
@section('page-title', 'Detail Pendaftaran')
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
        Detail
    </li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Pendaftaran {{ $pendaftaran->id_pendaftaran }}
            </h3>
            <div class="card-tools">
                <a href="{{ route('admin.pendaftaran.nota.download', $pendaftaran) }}" class="btn btn-sm btn-danger">
                    PDF
                </a>
            </div>
        </div>
        <div class="card-body">
            {{-- Detail pendaftaran --}}
            <div class="row mb-4">
                <div class="col-md-6">
                    <table class="table table-borderless">
                        <tr>
                            <th width="180">
                                ID Pendaftaran
                            </th>
                            <td>
                                :
                                {{ $pendaftaran->id_pendaftaran }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Pasien
                            </th>
                            <td>
                                :
                                {{ $pendaftaran->pasien->nama }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                NIK
                            </th>
                            <td>
                                :
                                {{ $pendaftaran->pasien->nik }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Jenis Kelamin
                            </th>
                            <td>
                                :
                                {{ $pendaftaran->pasien->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Alamat
                            </th>
                            <td>
                                :
                                {{ $pendaftaran->pasien->alamat }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-borderless">
                        <tr>
                            <th width="180">
                                Dokter
                            </th>
                            <td>
                                :
                                {{ $pendaftaran->dokter->nama }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Tanggal Daftar
                            </th>
                            <td>
                                :
                                {{ $pendaftaran->tanggal_daftar }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Jadwal Periksa
                            </th>
                            <td>
                                :
                                {{ $pendaftaran->jadwal_periksa }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Jenis Kunjungan
                            </th>
                            <td>
                                :
                                {{ $pendaftaran->jenis_kunjungan }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Status
                            </th>
                            <td>
                                :
                                {{ $pendaftaran->status }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>

            {{-- Detail Pemeriksaan --}}
            <div class="d-flex justify-content-between mb-3">
                <h5>
                    Detail Pemeriksaan
                </h5>
                @if ($pendaftaran->status != 'selesai')
                    <a href="{{ route('admin.detail-pendaftaran.create', $pendaftaran) }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus"></i>
                        Tambah Layanan
                    </a>
                @endif
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Pemeriksaan
                        </th>
                        <th>
                            Harga
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($pendaftaran->detailPendaftaran as $detail)
                        @php
                            $total += $detail->subtotal;
                        @endphp
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $detail->layanan->nama_layanan }}
                            </td>
                            <td>
                                Rp
                                {{ number_format($detail->subtotal, 0, ',', '.') }}
                            </td>
                            @if ($pendaftaran->status != 'selesai')
                                <td>
                                    <form method="POST" action="{{ route('admin.detail-pendaftaran.destroy', $detail) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus layanan?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2">
                            Total
                        </th>
                        <th>
                            Rp
                            {{ number_format($total, 0, ',', '.') }}
                        </th>
                    </tr>
                </tfoot>
            </table>
            <hr>

            {{-- Pembayaran --}}
            <div class="d-flex justify-content-between mb-3">
                <h5>
                    Pembayaran
                </h5>
                @if (!$pendaftaran->pembayaran || $pendaftaran->pembayaran->status_bayar != 'lunas')
                    <a href="{{ route('admin.pembayaran.create', $pendaftaran) }}" class="btn btn-success btn-sm">
                        <i class="bi bi-plus"></i>
                        Bayar Sekarang
                    </a>
                @endif
            </div>
            <table class="table table-borderless">
                <tr>
                    <th width="180">
                        Metode
                    </th>
                    <td>
                        :
                        {{ $pendaftaran->pembayaran ? strtoupper($pendaftaran->pembayaran->metode_bayar) : '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Status
                    </th>
                    <td>
                        :
                        @if ($pendaftaran->pembayaran && $pendaftaran->pembayaran->status_bayar == 'lunas')
                            LUNAS
                        @else
                            BELUM LUNAS
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>
                        Total Bayar
                    </th>
                    <td>
                        :
                        @if ($pendaftaran->pembayaran && $pendaftaran->pembayaran->status_bayar == 'lunas')
                            Rp
                            {{ number_format($pendaftaran->pembayaran->total_bayar, 0, ',', '.') }}
                        @else
                            {{-- belum ada pembayaran: total bayar kosong --}}
                            {{ '' }}
                        @endif
                    </td>
                </tr>
            </table>

        </div>
    </div>
@endsection
