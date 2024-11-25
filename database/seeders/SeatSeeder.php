<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seats')->insert([
            ['studio_id' => 1, 'seat_number' => 'A1', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 2, 'seat_number' => 'A2', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 1, 'seat_number' => 'A3', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 3, 'seat_number' => 'A4', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 1, 'seat_number' => 'A5', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 2, 'seat_number' => 'A6', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 1, 'seat_number' => 'A7', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 2, 'seat_number' => 'A8', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 1, 'seat_number' => 'A9', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 3, 'seat_number' => 'A10', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
