<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_category_id',
        'code',
        'name',
        'description',
        'price',
        'active',
        'stock',
    ];
}
