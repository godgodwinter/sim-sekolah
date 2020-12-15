<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan_aturs extends Model
{
    public $table = "tagihan_aturs";
    use HasFactory;

    protected $fillable = [
        'tapel_id',
        'tapel',
        'kelas_id',
        'kelas',
        'nominal_tagihan',
        'user_foto'
    ];
}
