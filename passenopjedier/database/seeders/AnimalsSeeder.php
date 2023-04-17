<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AnimalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('animals')->insert([
            "name" => "gerrit",
            "age" => 3,
            "sort" => "Bird",
            "owner" => 1,
            "note" => "Niet schelden, wnat hij zal het napraten"
        ]);
        DB::table('animals')->insert([
            "name" => "guppi",
            "age" => 1,
            "sort" => "Fish",
            "owner" => 2,
            "note" => ""
        ]);
        DB::table('animals')->insert([
            "name" => "garfield",
            "age" => 9,
            "sort" => "Cat",
            "owner" => 2,
            "note" => "Laat hem niet bij guppi komen!!"
        ]);
    }
}
