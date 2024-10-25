<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyParameter extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'no_telp', 'no_wa', 'alamat', 'ig', 'linkedin',
        'ekatalog', 'twitter', 'fb', 'nama_perusahaan',
        'sejarah_perusahaan', 'visi', 'misi',
        'service_1', 'service_2', 'service_3', 'service_4', 'ecommerce'
    ];

}
