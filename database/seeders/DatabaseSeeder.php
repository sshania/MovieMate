<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        User::factory()->create([
            'name' => 'Kevin Ahmad',
            'email' => 'kev.af18@gmail.com',
            'phone_number' => '081234567890',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        $this->call([
            CinemaSeeder::class,
            StudioSeeder::class,
            SeatSeeder::class,
            MovieSeeder::class,
            ShowtimeSeeder::class,
            TicketSeeder::class,
        ]);
    }
}
