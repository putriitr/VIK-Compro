<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticketing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_type',
        'description',
        'document',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

