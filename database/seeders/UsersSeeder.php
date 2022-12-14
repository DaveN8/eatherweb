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
            "email" => "superadmin@email.com",
            "password" => bcrypt("sadminterhebat"),
            "status" =>"superadmin"
        ]);

        User::create([
            "name" => "Admin",
            "email" => "admin@email.com",
            "password" => bcrypt("adminhebat"),
            "status" => "admin"
        ]);

        User::create([
            "name" => "Member",
            "email" => "member@email.com",
            "password" => bcrypt("memberaman"),
            "status" => "member"
        ]);
    }
}
