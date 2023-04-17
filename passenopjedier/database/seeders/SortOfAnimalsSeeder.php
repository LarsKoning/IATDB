<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SortOfAnimalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sort_of_animals_lijstje = ["Dog", "Cat", "Fish", "Bird", "Reptile", "Rabbit", "Hamster", "Guinea Pig"];

        foreach($sort_of_animals_lijstje as $sort){
            DB::table('sort_of_animals')->insert([
                'sort' => $sort
            ]);
        }
    }
}
