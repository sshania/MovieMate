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
        // create users
        User::factory(3)->create();

        // create admin
        User::factory()->create([
            'name' => 'Kevin Ahmad',
            'email' => 'kev.af18@gmail.com',
            'phone_number' => '081234567890',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => '2', // Admin
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
