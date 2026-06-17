<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_pasien' => [
                'required',
                'exists:pasien,id_pasien',
            ],

            'id_dokter' => [
                'required',
                'exists:dokter,id_dokter',
            ],

            'jenis_kunjungan' => [
                'required',
                'in:PS,PD',
            ],

            'tanggal_daftar' => [
                'required',
                'date',
            ],

            'jadwal_periksa' => [
                'required',
                'date',
            ],

            'status' => [
                'required',
                'in:menunggu,dijadwalkan,selesai,batal',
            ],

            'catatan' => [
                'nullable',
                'string',
            ],
        ];
    }
}
