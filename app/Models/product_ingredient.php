<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        "products_id",
        "ingredients_id"
    ];
}
