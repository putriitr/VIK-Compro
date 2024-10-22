<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'subheading',
        'heading',
        'description',
        'button_text',
        'button_url',
        'image',
    ];
}
