<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppdb_siswas_rincians extends Model
{
    public $table = "ppdb_siswas_rincians";
    use HasFactory;
    protected $fillable = [
        'users_email',
        'tinggi',
        'berat',
        'lingkarkepala',
        'jarakkesekolah',
        'dalamkilometer',
        'waktutempuh',
        'jmlsaudarakandung',

        'prestasi_jenis',
        'prestasi_tingkat',
        'prestasi_nama',
        'prestasi_tahun',
        'prestasi_penyelenggara',
        'prestasi_peringkat',

        'beasiswa_jenis',
        'beasiswa_keterangan',
        'beasiswa_tahun_mulai',
        'beasiswa_tahun_selesai',
        'kesejahteraanpesertadidik_jenis',
        'kesejahteraanpesertadidik_nokartu',
        'kesejahteraanpesertadidik_namadikartu',

        'regristrasi_kompetensikeahlian',
        'regristrasi_jenisdaftar',
        'regristrasi_nis',
        'regristrasi_tglmasuk',
        'regristrasi_sekolahasal',
        'regristrasi_nomorpeserta_un',
        'regristrasi_noseriijazah',
        'regristrasi_noskhun',
        'regristrasi_wna_keluarkarena',
        'regristrasi_wna_tglkeluar',
        'regristrasi_wna_alasan'
];
}
