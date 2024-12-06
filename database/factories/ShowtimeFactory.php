<?php

namespace Database\Factories;

use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Studio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Showtime>
 */
class ShowtimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create();

        $movieIds = Movie::pluck('id')->toArray();
        $studioIds = Studio::pluck('id')->toArray();
        $cinemaIds = Cinema::pluck('id')->toArray();

        $randomMovieID = Arr::random($movieIds);
        $randomStudioID = Arr::random($studioIds);
        $randomCinemaID = Arr::random($cinemaIds);

        $showtime = $faker->dateTimeBetween('now', '+1 year');
        $ymdShowtime = $showtime->format('Y-m-d H:i:s');

        $showtimeDate = $showtime->format('d M');
        $showtimeHour = $faker->dateTimeBetween('today', 'tomorrow')->format('H.i');

        return [
            //
            'movie_id' => $randomMovieID,
            'studio_id' => $randomStudioID,
            'cinema_id' => $randomCinemaID,
            'showtime' => $ymdShowtime,
            'showtime_date' => $showtimeDate,
            'showtime_hour'=>  $showtimeHour,
        ];
    }
}
