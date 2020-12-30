<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Martin",
            "email"=> "admin@gmail.com",
            "password"=> Hash::make("test"),
            "role_id"=> 1,
            "classe_id"=>1,
        ]);
        DB::table('users')->insert([
            "name" => "Oussama",
            "email"=> "coach@gmail.com",
            "password"=> Hash::make("test"),
            "role_id"=> 2,
            "classe_id"=>1,
        ]);
        DB::table('users')->insert([
            "name" => "Imad",
            "email"=> "eleve@gmail.com",
            "password"=> Hash::make("test"),
            "role_id"=> 3,
            "classe_id"=>1,
        ]);
    }
}
