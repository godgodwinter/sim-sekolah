<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswas extends Model
{
    public $table = "siswas";
    use HasFactory;

    protected $fillable = [
        'usernamex',
        'passwordx',
        'nomor',
        'nama',
        'tipe',
        'tapels_id',
        'tapels_nama',
        'kelas_id',
        'kelas_nama',
        'moodle_user',
        'moodle_pass'
    ];
}
