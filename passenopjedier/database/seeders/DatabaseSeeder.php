<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SortOfAnimalsSeeder::class,
            AnimalsSeeder::class,
            LocationSeeder::class,
            LocationMediaSeeder::class,
            AnimalsMediaSeeder::class,
            LocationAvailabilitySeeder::class,
            SearchingSeeder::class,
            ReviewsSeeder::class,
        ]);
    }
}
