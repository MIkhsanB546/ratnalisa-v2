<?php

namespace App\Http\Controllers;

use App\Models\DetailPendaftaran;
use App\Models\Pendaftaran;
use App\Models\Layanan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DetailPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(
        Pendaftaran $pendaftaran
    ): View {

        $details = $pendaftaran
            ->detailPendaftaran()
            ->with('layanan')
            ->get();


        return view(
            'admin.detail-pendaftaran.index',
            compact(
                'pendaftaran',
                'details'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(
        Pendaftaran $pendaftaran
    ): View {

        $layanans = Layanan::where(
            'status',
            'aktif'
        )->get();


        return view(
            'admin.detail-pendaftaran.create',
            compact(
                'pendaftaran',
                'layanans'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(
        Request $request,
        Pendaftaran $pendaftaran
    ): RedirectResponse {

        $request->validate([

            'id_layanan'
            => ['required'],

            'id_layanan.*'
            => ['exists:layanan,id_layanan']

        ]);


        foreach (

            $request->id_layanan

            as

            $id

        ) {

            $layanan = Layanan::findOrFail($id);


            DetailPendaftaran::create([

                'id_pendaftaran'
                => $pendaftaran->id_pendaftaran,

                'id_layanan'
                => $layanan->id_layanan,

                'subtotal'
                => $layanan->harga

            ]);
        }


        return redirect()

            ->route(

                'detail-pendaftaran.index',

                $pendaftaran

            )

            ->with(

                'success',

                'Detail berhasil ditambahkan.'

            );
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailPendaftaran $detailPendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailPendaftaran $detailPendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailPendaftaran $detailPendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        DetailPendaftaran $detailPendaftaran
    ): RedirectResponse {

        $id = $detailPendaftaran
            ->id_pendaftaran;


        $detailPendaftaran->delete();


        return redirect()

            ->route(

                'detail-pendaftaran.index',

                $id

            )

            ->with(

                'success',

                'Data berhasil dihapus.'

            );
    }
}
