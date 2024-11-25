<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            ['title' => 'The Shawshank Redemption', 'genre' => 'Drama', 'duration' => 142, 'rating' => 8.0, 'description' => 'blablabla', 'release_date' => '1994-09-17', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'The Godfather', 'genre' => 'Crime', 'duration' => 175, 'rating' => 8.5, 'description' => 'blablabla', 'release_date' => '1972-03-24', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'The Dark Knight', 'genre' => 'Action', 'duration' => 152, 'rating' => 9.0, 'description' => 'blablabla', 'release_date' => '2008-07-18', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'The Lord of the Rings: The Return of the King', 'genre' => 'Adventure', 'duration' => 201, 'rating' => 8.9, 'description' => 'blablabla', 'release_date' => '2003-12-17', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Pulp Fiction', 'genre' => 'Crime', 'duration' => 154, 'rating' => 8.9, 'description' => 'blablabla', 'release_date' => '1994-10-14', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Schindler\'s List', 'genre' => 'Biography', 'duration' => 195, 'rating' => 8.9, 'description' => 'blablabla', 'release_date' => '1994-02-04', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'The Lord of the Rings: The Fellowship of the Ring', 'genre' => 'Adventure', 'duration' => 178, 'rating' => 8.8, 'description' => 'blablabla', 'release_date' => '2001-12-19', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
