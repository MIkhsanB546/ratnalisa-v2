<?php

namespace App\Http\Controllers;

use App\Http\Requests\DokterRequest;
use App\Models\Dokter;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DokterController extends Controller
{
    public function index(): View
    {
        $dokters = Dokter::latest()->paginate(10);

        return view('admin.dokter.index', compact('dokters'));
    }

    public function create(): View
    {
        return view('admin.dokter.create');
    }

    public function store(DokterRequest $request): RedirectResponse
    {
        Dokter::create($request->validated());

        return redirect()
            ->route('dokter.index')
            ->with('success', 'Data dokter berhasil ditambahkan.');
    }

    public function edit(Dokter $dokter): View
    {
        return view('admin.dokter.edit', compact('dokter'));
    }

    public function update(
        DokterRequest $request,
        Dokter $dokter
    ): RedirectResponse {
        $dokter->update($request->validated());

        return redirect()
            ->route('dokter.index')
            ->with('success', 'Data dokter berhasil diperbarui.');
    }

    public function destroy(Dokter $dokter): RedirectResponse
    {
        if ($dokter->pendaftaran()->exists()) {
            return redirect()
                ->route('dokter.index')
                ->with(
                    'error',
                    'Dokter tidak dapat dihapus karena masih memiliki data pendaftaran.'
                );
        }

        $dokter->delete();

        return redirect()
            ->route('dokter.index')
            ->with('success', 'Data dokter berhasil dihapus.');
    }
}
