<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;

class PembayaranController extends Controller
{
    public function show(
        Pendaftaran $pendaftaran
    ): View {

        $pendaftaran->load('pembayaran');


        return view(

            'admin.pembayaran.show',

            compact(

                'pendaftaran'

            )

        );
    }



    public function store(

        Request $request,

        Pendaftaran $pendaftaran

    ): RedirectResponse {

        $request->validate([

            'metode_bayar' => [
                'required'
            ]

        ]);


        $total = $pendaftaran
            ->detailPendaftaran
            ->sum('subtotal');



        Pembayaran::create([

            'id_pendaftaran'
            => $pendaftaran->id_pendaftaran,

            'tanggal_bayar'
            => now(),

            'metode_bayar'
            => $request->metode_bayar,

            'total_bayar'
            => $total,

            'status_bayar'
            => 'belum_lunas'

        ]);


        return back()

            ->with(

                'success',

                'Pembayaran berhasil dibuat.'

            );
    }




    public function update(

        Request $request,

        Pendaftaran $pendaftaran

    ): RedirectResponse {

        $request->validate([

            'status_bayar' => [
                'required'
            ]

        ]);


        $pendaftaran
            ->pembayaran
            ->update([

                'status_bayar'
                => $request->status_bayar

            ]);


        return back()

            ->with(

                'success',

                'Status pembayaran berhasil diperbarui.'

            );
    }
}
