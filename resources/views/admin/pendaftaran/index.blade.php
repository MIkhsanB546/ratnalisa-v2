@extends('admin.layouts.app')

@section('title', 'Pendaftaran')
@section('page-title', 'Pendaftaran')

@section('content')
    <div class="card">

        <div class="card-header">
            <h3 class="card-title">Data Pendaftaran</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 16rem">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>

                    <input id="table-filter" type="search" class="form-control" placeholder="Cari pendaftaran...">
                </div>
            </div>
        </div>

        <div class="card-body">

            @include('admin.components.alert')

            <div class="d-flex flex-wrap gap-2 mb-3">

                <a href="{{ route('admin.pendaftaran.create') }}" class="btn btn-sm btn-primary">

                    <i class="bi bi-plus-lg me-1"></i>
                    Tambah Pendaftaran
                </a>

                <button id="export-csv" type="button" class="btn btn-sm btn-outline-secondary">

                    <i class="bi bi-filetype-csv me-1"></i>
                    Export CSV
                </button>

                <button id="export-json" type="button" class="btn btn-sm btn-outline-secondary">

                    <i class="bi bi-filetype-json me-1"></i>
                    Export JSON
                </button>

                <button id="export-nota-pdf" type="button" class="btn btn-sm btn-outline-secondary">

                    <i class="bi bi-printer me-1"></i>
                    PDF Nota

                </button>

            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover align-middle" id="pendaftaran-table">

                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Jenis</th>
                            <th>Pasien</th>
                            <th>Dokter</th>
                            <th>Tanggal Daftar</th>
                            <th>Jadwal Periksa</th>
                            <th>Status</th>
                            <th width="120">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($pendaftaran as $item)
                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $item->id_pendaftaran }}
                                </td>

                                <td>
                                    @if ($item->jenis_kunjungan === 'PS')
                                        <span class="badge bg-success">
                                            Atas Permintaan Sendiri
                                        </span>
                                    @else
                                        <span class="badge bg-info">
                                            Atas Permintaan Dokter
                                        </span>
                                    @endif
                                </td>

                                <td>
                                    {{ $item->pasien?->nama }}
                                </td>

                                <td>
                                    {{ $item->dokter?->nama }}
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($item->tanggal_daftar)->format('d/m/Y') }}
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($item->jadwal_periksa)->format('d/m/Y H:i') }}
                                </td>

                                <td>
                                    @switch($item->status)
                                        @case('menunggu')
                                            <span class="badge bg-warning">
                                                Menunggu
                                            </span>
                                        @break

                                        @case('dijadwalkan')
                                            <span class="badge bg-primary">
                                                Dijadwalkan
                                            </span>
                                        @break

                                        @case('selesai')
                                            <span class="badge bg-success">
                                                Selesai
                                            </span>
                                        @break

                                        @case('batal')
                                            <span class="badge bg-danger">
                                                Batal
                                            </span>
                                        @break
                                    @endswitch
                                </td>

                                <td>
                                    <a href="{{ route('admin.pendaftaran.show', $item) }}" class="btn btn-sm btn-info">

                                        <i class="bi bi-eye"></i>

                                    </a>

                                    <a href="{{ route('admin.pendaftaran.edit', $item) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <form action="{{ route('admin.pendaftaran.destroy', $item) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            @empty
                                <tr>
                                    <td colspan="9" class="text-center text-muted py-4">
                                        Belum ada data pendaftaran.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const table = document.getElementById('pendaftaran-table');
                const filter = document.getElementById('table-filter');
                const csvButton = document.getElementById('export-csv');
                const jsonButton = document.getElementById('export-json');
                const exportNotaPdfButton = document.getElementById('export-nota-pdf');


                if (!table) {
                    return;
                }

                const getHeaders = () => Array.from(table.querySelectorAll('thead th'))
                    .map((header) => header.textContent.trim())
                    .filter((header) => header !== 'Aksi');

                const getVisibleRows = () => Array.from(table.querySelectorAll('tbody tr'))
                    .filter((row) => row.style.display !== 'none' && row.querySelectorAll('td').length > 1);

                const getRowData = () => getVisibleRows().map((row) => Array.from(row.querySelectorAll('td'))
                    .slice(0, getHeaders().length)
                    .map((cell) => cell.textContent.trim().replace(/\s+/g, ' ')));

                const downloadFile = (filename, content, type) => {
                    const blob = new Blob([content], {
                        type
                    });
                    const url = URL.createObjectURL(blob);
                    const link = document.createElement('a');

                    link.href = url;
                    link.download = filename;
                    link.click();
                    URL.revokeObjectURL(url);
                };

                const getVisiblePendaftaranIds = () => {
                    // ID ada di kolom ke-2 (No=0, ID=1) pada tabel
                    return Array.from(table.querySelectorAll('tbody tr'))
                        .filter((row) => row.style.display !== 'none' && row.querySelectorAll('td').length > 1)
                        .map((row) => row.querySelectorAll('td')[1]?.textContent?.trim())
                        .filter(Boolean);
                };

                filter?.addEventListener('input', (event) => {
                    const keyword = event.target.value.trim().toLowerCase();

                    table.querySelectorAll('tbody tr').forEach((row) => {
                        const rowText = row.textContent.toLowerCase();
                        row.style.display = rowText.includes(keyword) ? '' : 'none';
                    });
                });

                csvButton?.addEventListener('click', () => {
                    const rows = [getHeaders(), ...getRowData()];
                    const csv = rows.map((row) => row.map((value) => `"${value.replace(/"/g, '""')}"`).join(
                        ',')).join('\n');

                    downloadFile('data-pendaftaran.csv', csv, 'text/csv;charset=utf-8;');
                });

                jsonButton?.addEventListener('click', () => {
                    const headers = getHeaders();
                    const data = getRowData().map((row) => Object.fromEntries(headers.map((header, index) => [
                        header,
                        row[index] ?? ''
                    ])));

                    downloadFile('data-pendaftaran.json', JSON.stringify(data, null, 2),
                        'application/json;charset=utf-8;');
                });

                exportNotaPdfButton?.addEventListener('click', () => {
                    const ids = getVisiblePendaftaranIds();

                    if (!ids.length) {
                        alert('Tidak ada data yang dipilih untuk PDF.');
                        return;
                    }

                    const params = new URLSearchParams();
                    ids.forEach((id) => params.append('ids[]', id));

                    window.location.href = `{{ route('admin.pendaftaran.nota.export') }}?` + params.toString();
                });

                // printButton?.addEventListener('click', () => {
                //     window.print();
                // });
            });
        </script>
    @endpush
