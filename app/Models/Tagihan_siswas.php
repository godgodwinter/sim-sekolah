<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan_siswas extends Model
{
    public $table = "tagihan_siswas";
    use HasFactory;

    protected $fillable = [
        'username_siswa',
        'nama',
        'tapel',
        'kelas',
        // 'tagihan_atur_id'
    ];
}
