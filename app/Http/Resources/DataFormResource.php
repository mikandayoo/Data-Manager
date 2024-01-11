<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DataFormResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nama' => $this->nama,
            'nip' => $this->nip,
            'nomor_seri_kartu_pegawai' => $this->nomor_seri_kartu_pegawai,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jenis_kelamin' => $this->jenis_kelamin,
            'pendidikan' => $this->pendidikan,
            'jabatan_akademi_dosen_tmt' => $this->jabatan_akademi_dosen_tmt,
            'masa_kerja_golongan_lama' => $this->masa_kerja_golongan_lama,
            'masa_kerja_golongan_baru' => $this->masa_kerja_golongan_baru,
            'unit_kerja' => $this->unit_kerja,
            'file_upload' => $this->file_upload,
        ];
    }
}
