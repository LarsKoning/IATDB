<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LocationAvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('location_availability')->insert([
            'location' => 'Goorweg 145',
            'for' => 'Dog'
        ]);
        DB::table('location_availability')->insert([
            'location' => 'Wolfskers 64',
            'for' => 'Cat'
        ]);
    }
}
