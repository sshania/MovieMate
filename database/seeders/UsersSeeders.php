<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Lala Lupsi',
            'email' => 'lalalupsi@gmail.com',
            'phone_number' => '081212121212',
            'password' => Hash::make('123456'),
            'role' => 2
        ]);
    }
}
