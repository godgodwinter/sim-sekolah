<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_settings extends Model
{
    public $table = "admin_settings";
    use HasFactory;

    protected $fillable = [
        'persen'
    ];
}
