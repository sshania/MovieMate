<?php

namespace Database\Seeders;

use App\Models\Cinema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cinemas')->insert([
            [
                'name' => 'AEON Mall Tanjung Barat XXI',
                'location' => 'AEON Mall Tanjung Barat Lantai 3, Jln. Tanjung Barat No. 163, Tanjung Barat - Jagakarsa, Jakarta Selatan 12660',
                'total_studios' => 8,
                'contact' => '(021) 50915953',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Agora Mall XXI',
                'location' => 'Agora Mall Lt. 3, Jln. M H Thamrin No. 10, Kebon Melati, Kec. Tanah Abang, Jakarta Pusat 10230',
                'total_studios' => 7,
                'contact' => '(021) 50115921',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Arion XXI',
                'location' => 'Arion Plaza Lantai 4, Jl. Pemuda Kav. 3-4 Rawamangun, Jakarta Timur',
                'total_studios' => 6,
                'contact' => '(021) 475 7658',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Baywalk Pluit XXI',
                'location' => 'MAL BAYWALK PLUIT Lantai.6, Jln. Pluit Karang Ayu Blok B1 Utara, Jakarta Utara',
                'total_studios' => 9,
                'contact' => '(021) 29629621',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Blok M XXI',
                'location' => 'Blok M Plaza Lantai 6, Jl. Bulungan No. 76 Kebayoran Baru, Jakarta Selatan',
                'total_studios' => 7,
                'contact' => '(021) 27082800',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emporium Pluit XXI',
                'location' => 'MAL EMPORIUM PLUIT UNIT 5-01, Jl. Pluit Selatan Raya, Jakarta Utara',
                'total_studios' => 10,
                'contact' => '(021) 6667 6421',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gandaria City XXI',
                'location' => 'Gandaria City Level 2, Jl Sultan Iskandar Muda, Kebayoran Lama, Jakarta Selatan',
                'total_studios' => 8,
                'contact' => '(021) 29053218',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kuningan City XXI',
                'location' => 'Kuningan City Lantai 3, Jl. Prof. Dr. Satrio Kav 18 Kuningan Setiabudi, Jakarta Selatan',
                'total_studios' => 6,
                'contact' => '(021) 30480621',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plaza Indonesia XXI',
                'location' => 'PLAZA INDONESIA Lantai 6, Jl. MH Thamrin Kav 28-30, Jakarta Pusat',
                'total_studios' => 7,
                'contact' => '(021) 398 38 779',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plaza Senayan XXI',
                'location' => 'PLAZA SENAYAN P 5, Jl. Asia Afrika, Jakarta Pusat',
                'total_studios' => 8,
                'contact' => '(021) 572 5535',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pluit Junction XXI',
                'location' => 'PLUIT JUNCTION MALL Lantai 6 & 8, Jl. Pluit Raya No. 1, Jakarta Utara',
                'total_studios' => 5,
                'contact' => '(021) 6660 7321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Seasons City XXI',
                'location' => 'Seasons City Lantai 2, Jln. Prof. Dr. Latumenten No. 33, Jakarta Barat',
                'total_studios' => 6,
                'contact' => '(021) 6385 3901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Cinema::factory()->count(5)->create();
    }
}
