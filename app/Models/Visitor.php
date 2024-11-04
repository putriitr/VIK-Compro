<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'browser',
        'last_visited',
    ];

    protected $dates = ['last_visited'];  // Jika ingin memformat waktu dengan benar
}
