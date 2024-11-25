<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinemas')->insert([
            ['name' => 'Cinema XXI', 'location' => 'Jakarta', 'total_studios' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CGV', 'location' => 'Bandung', 'total_studios' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cinepolis', 'location' => 'Surabaya', 'total_studios' => 7, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
