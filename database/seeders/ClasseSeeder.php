<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            "classe"=> "Pas de classe"
        ]);
        DB::table('classes')->insert([
            "classe"=> "Coding school 13"
        ]);
        DB::table('classes')->insert([
            "classe"=> "Coding school 14"
        ]);
        DB::table('classes')->insert([
            "classe"=> "Coding school 15"
        ]);
    }
}
