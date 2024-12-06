<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            ['user_id' => 1, 'showtime_id' => 1, 'seat_id' => 1, 'price' => 50000, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'showtime_id' => 2, 'seat_id' => 3, 'price' => 40000, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'showtime_id' => 4, 'seat_id' => 4, 'price' => 45000, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Ticket::factory()->count(20)->create();
    }
}
