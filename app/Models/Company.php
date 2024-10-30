<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'companies';

    // Menentukan kolom yang dapat diisi massal
    protected $fillable = [
        'name',
        'short_history',
        'address',
        'phone',
        'whatsapp',
        'vision',
        'mission',
        'service_1',
        'service_2',
        'service_3',
        'service_4',
        'document_1',
        'document_2',
        'email',
        'ecommerce',
    ];
}
