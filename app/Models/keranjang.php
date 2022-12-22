<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Keranjang extends Model
{
    use HasFactory;

    protected $fillable = [
        "jumlah_product",
        "catatan",
        "user_id",
        "products_id",
        "status"
    ];  

    public function users():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function products():BelongsTo{
        return $this->belongsTo(Products::class);
    }
}
