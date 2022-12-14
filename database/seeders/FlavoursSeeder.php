<?php

namespace Database\Seeders;

use App\Models\Flavours;
use Database\Factories\FlavoursFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlavoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Flavours::create([
            "name" => "Pedas",
        ]);
        Flavours::create([
            "name" => "Original",
        ]);
        Flavours::create([
            "name" => "Sapi Panggang",
        ]);
    }
}
