<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LocationMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('location_media')->insert([
            'location' => 'Wolfskers 64',
            'media' => '/media/Locations/huis1.jpg'
        ]);
        DB::table('location_media')->insert([
            'location' => 'Goorweg 145',
            'media' => '/media/Locations/huis2.jpg'
        ]);
        DB::table('location_media')->insert([
            'location' => 'Wolfskers 64',
            'media' => '/media/Locations/huis3.jpg'
        ]);
        DB::table('location_media')->insert([
            'location' => 'Wolfskers 64',
            'media' => '/media/Locations/huis4.jpg'
        ]);

        DB::table('location_media')->insert([
            'location' => 'Wolfskers 64'
        ]);
    }
}