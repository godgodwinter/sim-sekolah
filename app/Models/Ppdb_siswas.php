<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb_siswas extends Model
{
    use HasFactory;
    protected $fillable = [
            'nisn',
            'nama',
            'jk',
            'nik',
            'no_kk',
            'tempat_lahir',
            'tgl_lahir',
            'no_registrasi_akta_lahir',
            'agama',
            'kewarganegaraan',
            'berkebutuhankhusus',
            'alamat_jalan',
            'rt',
            'rw',
            'nama_dusun',
            'nama_kelurahan_desa',
            'kecamatan',
            'kodepos',
            'tempattinggal',
            'modatransportasi',
            'apakahpunyakip',
            'apakahmenerimakip',
            'alasanmenonakpip',
            'anakkeberapa',
            'users_email',
            'telp',
            'hp'
    ];

}
