<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create();

        $ratings = ['SU', 'D 17+', 'R 13+'];
        $randomRatings = Arr::random($ratings);

        $genres = [
            'Action', 'Comedy', 'Drama', 'Horror', 'Sci-Fi', 
            'Romance', 'Thriller', 'Adventure', 'Fantasy', 'Mystery'
        ];
        $randomGenres = Arr::random($genres, random_int(1, 3));

        $numberOfCasts = random_int(1, 5);
        $randomCasts = [];
        for ($i = 0; $i < $numberOfCasts; $i++) {
            $randomCasts[] = $faker->name;
        }

        return [
            //
            'title' => $faker->title(),
            'rating' => $randomRatings,
            'duration' => random_int(60, 180),
            'genre' => implode(', ', $randomGenres),
            'producer' => $faker->name(),
            'director' => $faker->name(),
            'writer' => $faker->name(),
            'production_house' => $faker->company(),
            'casts' => implode(', ', $randomCasts),
            'description' => $faker->paragraph(),
            'release_date' => $faker->dateTimeBetween('-5 years', '+5 years'),
            'movie_images' => 'barbie.jpg',
        ];
    }
}
