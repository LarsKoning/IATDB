<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'location' => 'Wolfskers 64',
            'review' => "The animal caretaker's home is an ideal environment for animals. The caretaker is attentive, responsible and creates a comfortable atmosphere. Their commitment and passion towards animal care is evident and the animals are well-cared for and content. Highly recommended.",
            'rating' => 4,
        ]);
    }
}
