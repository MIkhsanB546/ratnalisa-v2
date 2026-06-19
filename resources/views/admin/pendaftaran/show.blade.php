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

        <div class="card-header d-flex justify-content-between align-items-center">

            <h3 class="card-title">
                Pendaftaran {{ $pendaftaran->id_pendaftaran }}
            </h3>


            <div>

                <a href="#" class="btn btn-sm btn-danger">

                    PDF

                </a>


            </div>

        </div>


        <div class="card-body">


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


            <h5>

                Detail Pemeriksaan

            </h5>


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



            @if ($pendaftaran->pembayaran)

                <hr>


                <h5>

                    Pembayaran

                </h5>


                <table class="table table-borderless">


                    <tr>

                        <th width="180">

                            Metode

                        </th>

                        <td>

                            :

                            {{ strtoupper($pendaftaran->pembayaran->metode_bayar) }}

                        </td>

                    </tr>


                    <tr>

                        <th>

                            Status

                        </th>


                        <td>

                            :

                            @if ($pendaftaran->pembayaran->status_bayar == 'lunas')
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

                            Rp

                            {{ number_format($pendaftaran->pembayaran->total_bayar, 0, ',', '.') }}

                        </td>

                    </tr>


                </table>


            @endif


        </div>


    </div>

@endsection
