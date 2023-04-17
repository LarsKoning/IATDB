<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('location')->insert([
            'address' => 'Wolfskers 64',
            'city' => 'Venray',
            'owner' => 1,
        ]);
        DB::table('location')->insert([
            'address' => 'Goorweg 145',
            'city' => 'Riel',
            'owner' => 2,
        ]);
    }
}
