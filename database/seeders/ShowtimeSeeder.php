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
            ['movie_id' => 1, 'cinema_id' => 1, 'studio_id' => 1, 'showtime' => '2024-11-25 14:00:00', 'showtime_date' => '19 Nov', 'showtime_hour' => '10.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 1, 'cinema_id' => 1, 'studio_id' => 1, 'showtime' => '2024-11-25 16:00:00', 'showtime_date' => '19 Nov', 'showtime_hour' => '13.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 1, 'cinema_id' => 1, 'studio_id' => 1, 'showtime' => '2024-11-25 18:00:00', 'showtime_date' => '19 Nov', 'showtime_hour' => '16.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 1, 'cinema_id' => 1, 'studio_id' => 1, 'showtime' => '2024-11-25 20:00:00', 'showtime_date' => '19 Nov', 'showtime_hour' => '18.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 1, 'cinema_id' => 2, 'studio_id' => 1, 'showtime' => '2024-11-25 14:00:00', 'showtime_date' => '20 Nov', 'showtime_hour' => '13.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 1, 'cinema_id' => 2, 'studio_id' => 1, 'showtime' => '2024-11-25 16:00:00', 'showtime_date' => '20 Nov', 'showtime_hour' => '16.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 1, 'cinema_id' => 2, 'studio_id' => 1, 'showtime' => '2024-11-25 18:00:00', 'showtime_date' => '20 Nov', 'showtime_hour' => '18.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 1, 'cinema_id' => 2, 'studio_id' => 1, 'showtime' => '2024-11-25 20:00:00', 'showtime_date' => '20 Nov', 'showtime_hour' => '21.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 1, 'cinema_id' => 3, 'studio_id' => 1, 'showtime' => '2024-11-25 14:00:00', 'showtime_date' => '21 Nov', 'showtime_hour' => '16.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 2, 'cinema_id' => 1, 'studio_id' => 1, 'showtime' => '2024-11-25 20:00:00', 'showtime_date' => '22 Nov', 'showtime_hour' => '15.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 3, 'cinema_id' => 1, 'studio_id' => 2, 'showtime' => '2024-11-25 14:00:00', 'showtime_date' => '19 Nov', 'showtime_hour' => '12.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 4, 'cinema_id' => 1, 'studio_id' => 2, 'showtime' => '2024-11-25 14:00:00', 'showtime_date' => '20 Nov', 'showtime_hour' => '10.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 5, 'cinema_id' => 1, 'studio_id' => 3, 'showtime' => '2024-11-25 14:00:00', 'showtime_date' => '19 Nov', 'showtime_hour' => '16.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 6, 'cinema_id' => 1, 'studio_id' => 3, 'showtime' => '2024-11-26 14:00:00', 'showtime_date' => '19 Nov', 'showtime_hour' => '18.00', 'created_at' => now(), 'updated_at' => now()],
            ['movie_id' => 7, 'cinema_id' => 1, 'studio_id' => 4, 'showtime' => '2024-11-26 14:00:00', 'showtime_date' => '19 Nov', 'showtime_hour' => '20.00', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
