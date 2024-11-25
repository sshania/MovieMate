<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowtimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('showtimes')->insert([
            ['movie_id' => 1, 'studio_id' => 1, 'showtime' => '2024-11-25 14:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 2, 'studio_id' => 1, 'showtime' => '2024-11-25 16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 3, 'studio_id' => 2, 'showtime' => '2024-11-25 18:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 4, 'studio_id' => 2, 'showtime' => '2024-11-25 20:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 5, 'studio_id' => 3, 'showtime' => '2024-11-25 22:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 6, 'studio_id' => 3, 'showtime' => '2024-11-26 00:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 7, 'studio_id' => 4, 'showtime' => '2024-11-26 02:00:00', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
