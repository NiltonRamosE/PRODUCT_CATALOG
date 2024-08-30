<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoriesProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'sub_category_id',
    ];
}
