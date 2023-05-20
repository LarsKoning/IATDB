<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AnimalsMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animals_media')->insert([
            'animal' => '1',
            'media' => 'cat.jpg'
        ]);
        DB::table('animals_media')->insert([
            'animal' => '2',
            'media' => 'smartdoggo.jpeg'
        ]);
        DB::table('animals_media')->insert([
            'animal' => '3',
            'media' => 'Garfield_the_Cat.jpg'
        ]);
    }
}
