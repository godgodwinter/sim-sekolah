<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan_siswas_details extends Model
{
    public $table = "tagihan_siswas_details";
    use HasFactory;

    protected $fillable = [
        'tagihan_siswas_id',
        'jml_bayar',
        'tgl_bayar'
    ];
}
