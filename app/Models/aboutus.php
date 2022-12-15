<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutus extends Model
{
    use HasFactory;

    // 'name' => "Eather Corporation",
    //     'lbperusahaan' => 'Eather merupakan brand memiliki makna “Not Comparable” (Tak
    //     Sebanding). Penjelasan dari makna eather adalah tak sebanding dengan
    //     lainnya. Eather berusaha memberikan suatu inovasi dan kreatifitas yang
    //     belum pernah dirasakan oleh konsumen. ',

    public static $aboutus = [
        [
            'anggota' => 'Handika Frediansyah',
            'position' => 'CEO',
            'lbanggota' => 'Pemimpin tampan satu ini lahir di mojokerto pada tahun 2003, selain kuliah handhika juga mempunyai banyak pengalaman di bidang bisnis, dia terkenal sangat bertanggung jawab dan sangat tekun dalam berbisnis. ',
            'ftanggota' => 'handhika.jpg',
        ],
        [
            'anggota' => 'Daffa Nushshar Aditya',
            'position' => 'CFO',
            'lbanggota' => 'Remaja asal malang yang memiliki kesibukan nongkrong dan kuliah secara rutin, dan memiliki motto hidup "You can change what you do, but you cant change what you want"',
            'ftanggota' => 'daffa.jpg',
        ],
        [
            'anggota' => 'Achmad Tegar',
            'position' => 'COO',
            'lbanggota' => 'Sosok Remaja ini berasal dari lamongan yang memiliki background keluarga yang sangat unik, ia memiliki hobby yang sangat unik yaitu memancing ikan bahkan memancing keributan. motto hidup dari remaja satu ini adalah "Jika Matahari Terbit Dari Timur, Maka Bulan Pun Malu" ',
            'ftanggota' => 'tegar.jpg',
        ],
        [
            'anggota' => 'Chrisantus Justin Valdano',
            'position' => 'CMO',
            'lbanggota' => 'Remaja kelahiran kupang ini memiliki kesibukan yang sangat sibuk yaitu kuliah,gym, dan bermain game. Motto hidupnya "fight even though you are in trouble and give the best of yourself until you feel it"',
            'ftanggota' => 'chris.jpg',
        ],
        [
            'anggota' => 'Michael Yap',
            'position' => 'CTO',
            'lbanggota' => 'Makhluk satu ini lahir di malang pada tahun 2003. Dia memiliki kesibukan membuat content tiktok/instagram, tentunya dia sangat sibuk di dunia perkuliahan',
            'ftanggota' => 'mike.jpg',
        ]






    ];

    // 'cinsta' => '@eather_id',
    //     'cwhatsapp' => '081259602352',
    //     'logo_perusahaan' => 'logo.png'

    public static function allData()
    {
        return collect(self::$aboutus);
    }
}
