<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    use HasFactory;

    protected $fillable = [
        "status_payment",
        "order_status",
        "bukti_trf"
    ];
}
