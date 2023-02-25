<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatesiswaRequest extends FormRequest
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
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'id_kelas' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_spp' => 'required',
            'jk' => 'required',
            'username' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nisn.required' => 'Data NISN belum diisi!',
            'nis.required' => 'Data NIS belum diisi!',
            'nama.required' => 'Data nama belum diisi!',
            'alamat.required' => 'Data alamat belum diisi!',
            'no_telp.required' => 'Data nomor telepon belum diisi!',
            'id_spp.required' => 'Data kelas belum diisi!',
            'jk.required' => 'Data jenis kelamin belum diisi!',
            'username.required' => 'Data username belum diisi!',
            'password.required' => 'Data password belum diisi!',
        ];
    }
}
