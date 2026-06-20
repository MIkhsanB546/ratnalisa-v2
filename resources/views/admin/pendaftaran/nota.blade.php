<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nota Pendaftaran {{ $pendaftaran->id_pendaftaran }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            color: #111;
        }

        .container {
            width: 100%;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 12px;
        }

        .title {
            font-size: 18px;
            font-weight: 700;
        }

        .muted {
            color: #666;
        }

        .box {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 6px 4px;
            border-bottom: 1px solid #eee;
            vertical-align: top;
        }

        th {
            text-align: left;
            background: #f7f7f7;
            font-weight: 700;
        }

        .no-border th,
        .no-border td {
            border-bottom: none;
        }

        .total-row td {
            border-bottom: none;
        }

        .footer {
            margin-top: 18px;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="header">
            <div>
                <div class="title">Nota Pendaftaran</div>
                <div class="muted">ID: {{ $pendaftaran->id_pendaftaran }}</div>
            </div>
            <div class="text-right">
                <div class="muted">Tanggal Daftar</div>
                <div>{{ $pendaftaran->tanggal_daftar }}</div>
            </div>
        </div>

        <div class="box">
            <table class="no-border">
                <tr>
                    <th style="width:180px;">Pasien</th>
                    <td>: {{ $pendaftaran->pasien->nama }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>: {{ $pendaftaran->pasien->nik }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>: {{ $pendaftaran->pasien->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>: {{ $pendaftaran->pasien->alamat }}</td>
                </tr>
                <tr>
                    <th>Dokter</th>
                    <td>: {{ $pendaftaran->dokter->nama }}</td>
                </tr>
                <tr>
                    <th>Jadwal Periksa</th>
                    <td>: {{ $pendaftaran->jadwal_periksa }}</td>
                </tr>
                <tr>
                    <th>Jenis Kunjungan</th>
                    <td>: {{ $pendaftaran->jenis_kunjungan }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>: {{ $pendaftaran->status }}</td>
                </tr>
            </table>
        </div>

        <div class="box">
            <div class="text-center" style="font-weight:700; margin-bottom: 8px;">Detail Pemeriksaan</div>
            <table>
                <thead>
                    <tr>
                        <th style="width:50px;">No</th>
                        <th>Pemeriksaan</th>
                        <th style="width:170px;">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach ($pendaftaran->detailPendaftaran as $detail)
                        @php $total += $detail->subtotal; @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $detail->layanan->nama_layanan }}</td>
                            <td class="text-right">Rp {{ number_format($detail->subtotal, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="total-row">
                        <td colspan="2"
                            style="font-weight:700; text-align:right; background:#fff; border-bottom:none;">Total</td>
                        <td style="font-weight:700; text-align:right; border-bottom:none;">Rp
                            {{ number_format($total, 0, ',', '.') }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        @if ($pendaftaran->pembayaran)
            <div class="box">
                <div class="text-center" style="font-weight:700; margin-bottom: 8px;">Pembayaran</div>
                <table class="no-border">
                    <tr>
                        <th style="width:180px;">Metode</th>
                        <td>: {{ strtoupper($pendaftaran->pembayaran->metode_bayar) }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>: @if ($pendaftaran->pembayaran->status_bayar == 'lunas')
                                LUNAS
                            @else
                                BELUM LUNAS
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Total Bayar</th>
                        <td>: Rp {{ number_format($pendaftaran->pembayaran->total_bayar, 0, ',', '.') }}</td>
                    </tr>
                </table>
            </div>
        @endif

        <div class="footer">
            <div class="muted">Catatan: Dokumen ini dihasilkan otomatis menggunakan sistem.</div>
        </div>

    </div>
</body>

</html>
