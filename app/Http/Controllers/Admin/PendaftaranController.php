<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PendaftaranRequest;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Pendaftaran;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;

class PendaftaranController extends Controller
{
    public function index(): View
    {
        $pendaftaran = Pendaftaran::with([
            'pasien',
            'dokter'
        ])->latest()->get();

        return view('admin.pendaftaran.index', compact('pendaftaran'));
    }


    public function create(): View
    {
        return view(
            'admin.pendaftaran.create',
            [
                'pasien' => Pasien::orderBy('nama')->get(),
                'dokter' => Dokter::orderBy('nama')->get(),
            ]
        );
    }

    public function store(
        PendaftaranRequest $request
    ): RedirectResponse {

        Pendaftaran::create(
            $request->validated()
        );

        return redirect()
            ->route('admin.pendaftaran.index')
            ->with(
                'success',
                'Data pendaftaran berhasil ditambahkan.'
            );
    }

    public function show(Pendaftaran $pendaftaran)
    {
        $pendaftaran->load([
            'pasien',
            'dokter',
            'detailPendaftaran.layanan',
            'pembayaran'
        ]);

        return view(
            'admin.pendaftaran.show',
            compact('pendaftaran')
        );
    }

    public function edit(
        Pendaftaran $pendaftaran
    ): View {

        return view(
            'admin.pendaftaran.edit',
            [
                'pendaftaran' => $pendaftaran,
                'pasien' => Pasien::orderBy('nama')->get(),
                'dokter' => Dokter::orderBy('nama')->get(),
            ]
        );
    }

    public function update(
        PendaftaranRequest $request,
        Pendaftaran $pendaftaran
    ): RedirectResponse {

        $pendaftaran->update(
            $request->validated()
        );

        return redirect()
            ->route('admin.pendaftaran.index')
            ->with(
                'success',
                'Data pendaftaran berhasil diperbarui.'
            );
    }

    public function destroy(
        Pendaftaran $pendaftaran
    ): RedirectResponse {

        if ($pendaftaran->pembayaran()->exists()) {
            return redirect()
                ->route('admin.pendaftaran.index')
                ->with(
                    'error',
                    'Pendaftaran tidak dapat dihapus karena sudah memiliki pembayaran.'
                );
        }

        $pendaftaran->delete();

        return redirect()
            ->route('admin.pendaftaran.index')
            ->with(
                'success',
                'Data pendaftaran berhasil dihapus.'
            );
    }

    public function downloadNotaPdf(Pendaftaran $pendaftaran)
    {
        $pendaftaran->load([
            'pasien',
            'dokter',
            'detailPendaftaran.layanan',
            'pembayaran',
        ]);

        $pdf = Pdf::loadView('admin.pendaftaran.nota', [
            'pendaftaran' => $pendaftaran,
        ]);

        return $pdf->download('nota-pendaftaran-' . $pendaftaran->id_pendaftaran . '.pdf');
    }

    public function exportFilteredNotasPdf(
        \Illuminate\Http\Request $request
    ) {
        $ids = $request->input('ids', []);

        $ids = array_values(array_filter(array_map('intval', (array) $ids)));

        if (count($ids) === 0) {
            return back()->with('error', 'Tidak ada data yang dipilih untuk PDF.');
        }

        $pendaftaranList = Pendaftaran::with([
            'pasien',
            'dokter',
            'detailPendaftaran.layanan',
            'pembayaran'
        ])->whereIn('id', $ids)->latest()->get();

        $pdf = Pdf::loadView('admin.pendaftaran.nota-collection', [
            'pendaftaranList' => $pendaftaranList,
        ]);

        return $pdf->download('nota-pendaftaran-' . date('Y-m-d_H-i-s') . '.pdf');
    }
}
