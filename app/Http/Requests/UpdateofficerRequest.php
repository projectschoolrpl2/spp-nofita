<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateofficerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
            'level' => 'required',
            'jk' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username belum diisi!',
            'password.required' => 'Password belum diisi!',
            'nama_petugas.required' => 'Nama belum diisi!',
            'level.required' => 'Level belum dipilih!',
            'jk.required' => 'Jenis Kelamin belum diisi!',
            'no_telp.required' => 'Nomor Telepon belum diisi!',
            'alamat.required' => 'Alamat belum diisi!',
        ];
    }
}
