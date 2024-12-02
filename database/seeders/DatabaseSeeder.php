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
            'name' => 'admin',
            'email' => 'admin123@gmail.com',
            'phone_number' => '08353628474',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
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
