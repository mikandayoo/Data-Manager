<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataForm extends Model
{
    protected $table = 'data_form';

    protected $fillable = [
        'nama',
        'nip',
        'nomor_seri_kartu_pegawai',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'pendidikan',
        'jabatan_akademi_dosen_tmt',
        'masa_kerja_golongan_lama',
        'masa_kerja_golongan_baru',
        'unit_kerja',
        'file_upload'
    ];
}
