<?php

namespace Database\Seeders;

use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('studios')->insert([
            ['cinema_id' => 1, 'studio_number' => '1', 'total_seats' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['cinema_id' => 2, 'studio_number' => '2', 'total_seats' => 150, 'created_at' => now(), 'updated_at' => now()],
            ['cinema_id' => 3, 'studio_number' => '3', 'total_seats' => 120, 'created_at' => now(), 'updated_at' => now()],
            ['cinema_id' => 1, 'studio_number' => '4', 'total_seats' => 200, 'created_at' => now(), 'updated_at' => now()],
            ['cinema_id' => 2, 'studio_number' => '5', 'total_seats' => 180, 'created_at' => now(), 'updated_at' => now()],
            ['cinema_id' => 3, 'studio_number' => '6', 'total_seats' => 250, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Studio::factory()->count(5)->create();
    }
}
