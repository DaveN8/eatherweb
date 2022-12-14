<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            "name" => "SuperAdmin",
            "email" => "Sadmin@email.com",
            "password" => bcrypt("sadminterhebat"),
            "status" => ""
        ]);

        User::create([
            "name" => "",
            "email" => "",
            "password" => "",
            "status" => ""
        ]);

        User::create([
            "name" => "",
            "email" => "",
            "password" => "",
            "status" => ""
        ]);
    }
}
