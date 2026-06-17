<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PetugasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $petugas = $this->route('petugas');
        $petugasId = $petugas && is_object($petugas) ? $petugas->id_petugas : $petugas;

        $uniqueUsernameRule = 'unique:petugas,username';
        if (!empty($petugasId)) {
            $uniqueUsernameRule .= ',' . $petugasId . ',id_petugas';
        }

        return [
            'nama' => ['required', 'string', 'max:100'],
            'username' => ['required', 'string', 'max:100', $uniqueUsernameRule],
            'role' => ['required', 'string', 'max:50'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
            'password_confirmation' => ['required_with:password', 'same:password'],
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama wajib diisi.',
            'username.required' => 'Username wajib diisi.',
            'username.unique' => 'Username sudah digunakan.',
            'role.required' => 'Role wajib dipilih.',
            'password.required' => 'Password wajib diisi.',
            'password_confirmation.same' => 'Konfirmasi password tidak sesuai.',
        ];
    }
}
