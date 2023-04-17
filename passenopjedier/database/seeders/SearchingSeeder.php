<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SearchingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('searching')->insert([
            'owner' => 1,
            'for' => 1,
            'from' => '2022-12-25 08:00:00',
            'to' => '2023-1-3 11:00:00',
            'payment' => 25.00
        ]);
        DB::table('searching')->insert([
            'owner' => 2,
            'for' => 2,
            'from' => '2022-03-30 12:00:00',
            'to' => '2022-04-30 23:00:00',
            'payment' => 5.00
        ]);
        DB::table('searching')->insert([
            'owner' => 2,
            'for' => 3,
            'from' => '2022-11-15 09:30:00',
            'to' => '2022-11-20 09:30:00',
            'payment' => 50.00
        ]);
    }
}
