<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Histori extends Model
{
    use HasFactory;

    protected $fillable = [
        "status_payment",
        "order_status",
        "bukti_trf",
        "keranjang_id"
    ];

    public function keranjang(): BelongsTo{
        return $this->belongsTo(keranjang::class);
    } 


}
