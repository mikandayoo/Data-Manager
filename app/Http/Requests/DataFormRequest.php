<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:data_form',
            'nomor_seri_kartu_pegawai' => 'required|string|max:255|unique:data_form',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'pendidikan' => 'required|string|max:255',
            'jabatan_akademi_dosen_tmt' => 'required|string|max:255',
            'masa_kerja_golongan_lama' => 'required|date',
            'masa_kerja_golongan_baru' => 'required|date',
            'unit_kerja' => 'required|string|max:255',
            'file_upload' => 'nullable|file|max:2048',
        ];
    }
}
