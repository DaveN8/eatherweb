<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product_ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        "products_id",
        "ingredients_id"
    ];

    public function products():HasMany{
        return $this->hasMany(Products::class);
    }

    public function ingredients():BelongsTo{
        return $this->belongsTo(Ingredients::class);
    }
}
