<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DokterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $dokter = $this->route('dokter');

        return [
            'nama' => [
                'required',
                'string',
                'max:100',
            ],

            'email' => [
                'required',
                'email',
                'max:100',
                Rule::unique('dokter', 'email')
                    ->ignore($dokter?->id_dokter, 'id_dokter'),
            ],

            'spesialisasi' => [
                'nullable',
                'string',
                'max:100',
            ],

            'no_hp' => [
                'nullable',
                'string',
                'max:15',
            ],
        ];
    }
}
