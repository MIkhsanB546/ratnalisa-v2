<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Http\Requests\PetugasRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $petugas = Petugas::all();

        return view('admin.petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PetugasRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['password'] = \Illuminate\Support\Facades\Hash::make($data['password']);

        Petugas::create($data);

        return redirect()
            ->route('petugas.index')
            ->with('success', 'Data petugas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas): View
    {
        return view('admin.petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PetugasRequest $request, Petugas $petugas): RedirectResponse
    {
        $data = $request->validated();

        if (blank($data['password'])) {
            unset($data['password']);
        } else {
            $data['password'] = \Illuminate\Support\Facades\Hash::make($data['password']);
        }

        $petugas->update($data);

        return redirect()
            ->route('petugas.index')
            ->with('success', 'Data petugas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas): RedirectResponse
    {
        $petugas->delete();

        return redirect()
            ->route('petugas.index')
            ->with('success', 'Data petugas berhasil dihapus.');
    }
}
