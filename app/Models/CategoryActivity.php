<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryActivity extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $table = 'category_activities';
}
