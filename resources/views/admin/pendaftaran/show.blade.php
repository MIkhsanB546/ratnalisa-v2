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
    <div class="card mb-3">
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
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">
                Detail Pemeriksaan
            </h3>
            @if ($pendaftaran->status != 'selesai')
                <div class="card-tools">
                    <a href="{{ route('admin.detail-pendaftaran.create', $pendaftaran) }}" class="btn btn-primary btn-sm">
                        Tambah Layanan
                    </a>
                </div>
            @endif
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="60">
                            No
                        </th>
                        <th>
                            Pemeriksaan
                        </th>
                        <th width="180">
                            Harga
                        </th>
                        @if ($pendaftaran->status != 'selesai')
                            <th width="80">
                                Aksi
                            </th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php($total = 0)
                    @forelse($pendaftaran->detailPendaftaran as $detail)
                        @php($total += $detail->subtotal)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $detail->layanan->nama_layanan }}
                            </td>
                            <td>
                                Rp {{ number_format($detail->subtotal, 0, ',', '.') }}
                            </td>
                            @if ($pendaftaran->status != 'selesai')
                                <td>
                                    <form method="POST" action="{{ route('admin.detail-pendaftaran.destroy', $detail) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                Belum ada layanan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2">
                            Total
                        </th>
                        <th>
                            Rp {{ number_format($total, 0, ',', '.') }}
                        </th>
                        @if ($pendaftaran->status != 'selesai')
                            <th></th>
                        @endif
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 card-title">
                Pembayaran
            </h5>
        </div>
        <div class="card-body">
            @if (!$pendaftaran->pembayaran)
                <form method="POST" action="{{ route('admin.pendaftaran.pembayaran.store', $pendaftaran) }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">
                                Metode Pembayaran
                            </label>
                            <select name="metode_bayar" class="form-select">
                                <option value="tunai">
                                    Tunai
                                </option>
                                <option value="transfer">
                                    Transfer
                                </option>
                                <option value="qris">
                                    QRIS
                                </option>
                            </select>
                        </div>
                        <div class="col-md-3 align-self-end">
                            <button class="btn btn-success">
                                Buat Pembayaran
                            </button>
                        </div>
                    </div>
                </form>
            @else
                <table class="table table-borderless">
                    <tr>
                        <th width="200">
                            Metode
                        </th>
                        <td>
                            {{ strtoupper($pendaftaran->pembayaran->metode_bayar) }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status
                        </th>
                        <td>
                            @if ($pendaftaran->pembayaran->status_bayar == 'lunas')
                                <span class="badge bg-success">
                                    LUNAS
                                </span>
                            @else
                                <span class="badge bg-warning">
                                    BELUM LUNAS
                                </span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Total
                        </th>
                        <td>
                            Rp
                            {{ number_format($pendaftaran->pembayaran->total_bayar, 0, ',', '.') }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Bayar
                        </th>
                        <td>
                            {{ $pendaftaran->pembayaran->tanggal_bayar }}
                        </td>
                    </tr>
                </table>
                @if ($pendaftaran->pembayaran->status_bayar != 'lunas')
                    <form method="POST" action="{{ route('admin.pendaftaran.pembayaran.update', $pendaftaran) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status_bayar" value="lunas">
                        <button class="btn btn-success">
                            Tandai Lunas
                        </button>
                    </form>
                @endif
            @endif
        </div>
    </div>
@endsection
