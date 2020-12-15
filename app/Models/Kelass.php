<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelass extends Model
{
    public $table = "kelass";
    use HasFactory;

    protected $fillable = [
        'nama'
    ];
}
