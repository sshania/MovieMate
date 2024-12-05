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
            ['studio_id' => 1, 'seat_number' => 'A1', 'sub_total' => '60000', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 2, 'seat_number' => 'A2', 'sub_total' => '60000', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 1, 'seat_number' => 'A3', 'sub_total' => '60000', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 3, 'seat_number' => 'A4', 'sub_total' => '60000', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 1, 'seat_number' => 'A5', 'sub_total' => '60000', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 2, 'seat_number' => 'A6', 'sub_total' => '60000', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 1, 'seat_number' => 'A7', 'sub_total' => '60000', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 2, 'seat_number' => 'A8', 'sub_total' => '60000', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 1, 'seat_number' => 'A9', 'sub_total' => '60000', 'created_at' => now(), 'updated_at' => now()],
            ['studio_id' => 3, 'seat_number' => 'A10', 'sub_total' => '60000', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
