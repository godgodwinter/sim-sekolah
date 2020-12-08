<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppdbuser extends Model
{
    public $table = "ppdbuser";
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'nisn'
    ];
}
