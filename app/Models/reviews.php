<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        "comment",
        "user_id",
        "products_id"
    ];

    public function products(): BelongsTo{
        return $this->belongsTo(Products::class);
    }
}
