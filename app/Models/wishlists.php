<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wishlists extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "products_id"
    ];

    public function products(): BelongsTo{
        return $this->belongsTo(Products::class);
    }
}
