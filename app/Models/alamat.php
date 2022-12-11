<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $fillable = [
        "label",
        "penerima",
        "no_hp",
        "alamat_lengkap",
        "kecamatan",
        "kota",
        "diskripsi_alamat",
        "kode_pos"
    ];

}
