<?php

namespace Database\Seeders;

use App\Models\Ingredients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ingredients::create([
            "name" => "Kulit Sapi"
        ]);
        Ingredients::create([
            "name" => "Bawang putih"
        ]);
        Ingredients::create([
            "name" => "Rempah-rempah"
        ]);
        Ingredients::create([
            "name" => "Gula"
        ]);
        Ingredients::create([
            "name" => "Garam"
        ]);
        Ingredients::create([
            "name" => "Penyedap rasa"
        ]);

    }
}
