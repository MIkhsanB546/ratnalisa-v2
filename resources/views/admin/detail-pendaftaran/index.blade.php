@extends('admin.layouts.app')
@section('title', 'Detail Pendaftaran')
@section('page-title', 'Detail Pendaftaran')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Pendaftaran :
                {{ $pendaftaran->id_pendaftaran }}
            </h3>
            <div class="card-tools">
                <a href="{{ route('admin.detail-pendaftaran.create', $pendaftaran) }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus"></i>
                    Tambah Layanan
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Detail</th>
                        <th>Layanan</th>
                        <th>Harga</th>
                        <th width="100">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($details as $detail)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $detail->id_detail }}
                            </td>
                            <td>
                                {{ $detail->layanan->nama_layanan }}
                            </td>
                            <td>
                                Rp
                                {{ number_format($detail->subtotal, 0, ',', '.') }}
                            </td>
                            <td>
                                <form method="POST" action="{{ route('admin.detail-pendaftaran.destroy', $detail) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus layanan?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                Belum ada layanan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">
                            Total
                        </th>
                        <th colspan="2">
                            Rp
                            {{ number_format(
                                $details->sum('subtotal'),
                            
                                0,
                            
                                ',',
                            
                                '.',
                            ) }}
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
