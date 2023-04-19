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
            "name" => "Mimmie",
            "age" => 3,
            "sort" => "Cat",
            "owner" => 1,
            "note" => "Niet schelden, want hij gaat je kapot krabben"
        ]);
        DB::table('animals')->insert([
            "name" => "gerrit",
            "age" => 1,
            "sort" => "Dog",
            "owner" => 2,
            "note" => "He run fast"
        ]);
        DB::table('animals')->insert([
            "name" => "garfield",
            "age" => 9,
            "sort" => "Cat",
            "owner" => 2,
            "note" => "Laat hem niet bij lasagna komen!!"
        ]);
    }
}
