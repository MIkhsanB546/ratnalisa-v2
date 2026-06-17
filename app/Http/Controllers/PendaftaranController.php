<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendaftaranRequest;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Pendaftaran;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PendaftaranController extends Controller
{
    public function index(): View
    {
        $pendaftaran = Pendaftaran::with([
            'pasien',
            'dokter'
        ])
            ->latest()
            ->get();

        return view(
            'admin.pendaftaran.index',
            compact('pendaftaran')
        );
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
            ->route('pendaftaran.index')
            ->with(
                'success',
                'Data pendaftaran berhasil ditambahkan.'
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
            ->route('pendaftaran.index')
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
                ->route('pendaftaran.index')
                ->with(
                    'error',
                    'Pendaftaran tidak dapat dihapus karena sudah memiliki pembayaran.'
                );
        }

        $pendaftaran->delete();

        return redirect()
            ->route('pendaftaran.index')
            ->with(
                'success',
                'Data pendaftaran berhasil dihapus.'
            );
    }
}
