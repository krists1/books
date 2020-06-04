<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'name' => 'Laba atsauksme par grāmatu',
                'text' => 'Lorem ipsum bla bla bla...',
                'book_id' => 1,
                'published' => true,
                'rating' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
