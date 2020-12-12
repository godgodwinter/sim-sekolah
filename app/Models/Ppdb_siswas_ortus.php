<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb_siswas_ortus extends Model
{
    public $table = "ppdb_siswas_ortus";
    use HasFactory;
    protected $fillable = [
        'users_email',
        'ayah_nama',
        'ayah_nik',
        'ayah_tahunlahir',
        'ayah_pendidikan',
        'ayah_pekerjaan',
        'ayah_penghasilanbulanan',
        'ayah_berkebutuhankhusus',

        'ibu_nama',
        'ibu_nik',
        'ibu_tahunlahir',
        'ibu_pendidikan',
        'ibu_pekerjaan',
        'ibu_penghasilanbulanan',
        'ibu_berkebutuhankhusus',

        'wali_nama',
        'wali_nik',
        'wali_tahunlahir',
        'wali_pendidikan',
        'wali_pekerjaan',
        'wali_penghasilanbulanan',
];
}
