<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "image",
        "stock",
        "price",
        "description",
        "flavours_id",
        "kategori_id",
        "status"
    ];

    public function kategori(): BelongsTo{
        return $this->belongsTo(Kategori::class);
    }

    public function flavours(): BelongsTo{
        return $this->belongsTo(Flavours::class);
    }

    public function keranjang(): BelongsTo{
        return $this->belongsTo(Keranjang::class);
    }

    public function wishlist(): HasMany{
        return $this->hasMany(Wishlists::class);
    }

    public function product_ingredients(): BelongsTo{
        return $this->belongsTo(product_ingredients::class);
    }

    public function review(): HasMany{
        return $this->hasMany(Reviews::class);
    }


}
