<?php

namespace Database\Factories;

use App\Models\Cinema;
use App\Models\Studio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Studio>
 */
class StudioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cinemaIds = Cinema::pluck('id')->toArray();
        $studioIds = Studio::pluck('id')->toArray();

        $randomCinemaID = Arr::random($cinemaIds);
        $randomStudioID = Arr::random($studioIds);

        $seats = random_int(64, 256);
        return [
            //
            'cinema_id' => $randomCinemaID,
            'studio_number' => $randomStudioID,
            'total_seats' => $seats,
        ];
    }
}
