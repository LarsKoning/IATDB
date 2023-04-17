<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "firstname" => "Kimberly",
            "lastname" => "Szul",
            "username" => "Kimmyli",
            "email" => "kc.szul@gmail.com",
            "password" => bcrypt("Sch1ldpadd0"),
        ]);
        DB::table('users')->insert([
            "firstname" => "Harry",
            "lastname" => "Styles",
            "username" => "HS",
            "email" => "HS@gmail.com",
            "password" => bcrypt("hs69420"),
            "role" => "admin",
        ]);
        DB::table('users')->insert([
            "firstname" => "Lars",
            "lastname" => "Koning",
            "username" => "King",
            "email" => "koninglars04@gmail.com",
            "password" => bcrypt("loverboy"),
            'media' => '/media/Users/Melissa.jpg',
            "role" => "owner",
        ]);
    }
}
