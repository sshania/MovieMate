<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title' => 'Finding Nemo',
                'rating' => 'SU',
                'duration' => 100,
                'genre' => 'Animation',
                'producer' => 'Graham Walters',
                'director' => 'Andrew Stanton',
                'writer' => 'Andrew Stanton',
                'production_house' => 'Pixar Animation Studios',
                'casts' => 'Albert Brooks, Ellen DeGeneres, Alexander Gould',
                'description' => 'After his son is captured in the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home.',
                'release_date' => now()->subMonth(rand(1, 12)),
                'movie_images' => 'finding_nemo.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Inception',
                'rating' => 'D 17+',
                'duration' => 148,
                'genre' => 'Sci-Fi',
                'producer' => 'Emma Thomas',
                'director' => 'Christopher Nolan',
                'writer' => 'Christopher Nolan',
                'production_house' => 'Warner Bros.',
                'casts' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.',
                'release_date' => now()->addMonth(rand(1, 12)),
                'movie_images' => 'inception.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Dark Knight',
                'rating' => 'D 17+',
                'duration' => 152,
                'genre' => 'Action',
                'producer' => 'Emma Thomas',
                'director' => 'Christopher Nolan',
                'writer' => 'Jonathan Nolan',
                'production_house' => 'Warner Bros.',
                'casts' => 'Christian Bale, Heath Ledger, Aaron Eckhart',
                'description' => 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.',
                'release_date' => now()->subMonth(rand(1, 12)),
                'movie_images' => 'dark_knight.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Interstellar',
                'rating' => 'D 17+',
                'duration' => 169,
                'genre' => 'Sci-Fi',
                'producer' => 'Emma Thomas',
                'director' => 'Christopher Nolan',
                'writer' => 'Jonathan Nolan',
                'production_house' => 'Paramount Pictures',
                'casts' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain',
                'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'release_date' => now()->subMonth(rand(1, 12)),
                'movie_images' => 'interstellar.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Matrix',
                'rating' => 'D 17+',
                'duration' => 136,
                'genre' => 'Sci-Fi',
                'producer' => 'Joel Silver',
                'director' => 'Lana Wachowski, Lilly Wachowski',
                'writer' => 'Lana Wachowski, Lilly Wachowski',
                'production_house' => 'Warner Bros.',
                'casts' => 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss',
                'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'release_date' => now()->addMonth(rand(1, 12)),
                'movie_images' => 'matrix.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Gladiator',
                'rating' => 'D 17+',
                'duration' => 155,
                'genre' => 'Action',
                'producer' => 'Douglas Wick',
                'director' => 'Ridley Scott',
                'writer' => 'David Franzoni',
                'production_house' => 'DreamWorks Pictures',
                'casts' => 'Russell Crowe, Joaquin Phoenix, Connie Nielsen',
                'description' => 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.',
                'release_date' => now()->subMonth(rand(1, 12)),
                'movie_images' => 'gladiator.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Titanic',
                'rating' => 'R 13+',
                'duration' => 195,
                'genre' => 'Romance',
                'producer' => 'James Cameron',
                'director' => 'James Cameron',
                'writer' => 'James Cameron',
                'production_house' => '20th Century Fox',
                'casts' => 'Leonardo DiCaprio, Kate Winslet, Billy Zane',
                'description' => 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.',
                'release_date' => now()->subMonth(rand(1, 12)),
                'movie_images' => 'titanic.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Avatar',
                'rating' => 'R 13+',
                'duration' => 162,
                'genre' => 'Sci-Fi',
                'producer' => 'James Cameron',
                'director' => 'James Cameron',
                'writer' => 'James Cameron',
                'production_house' => '20th Century Fox',
                'casts' => 'Sam Worthington, Zoe Saldana, Sigourney Weaver',
                'description' => 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.',
                'release_date' => now()->subMonth(rand(1, 12)),
                'movie_images' => 'avatar.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'rating' => 'R 13+',
                'duration' => 178,
                'genre' => 'Fantasy',
                'producer' => 'Peter Jackson',
                'director' => 'Peter Jackson',
                'writer' => 'Fran Walsh, Philippa Boyens',
                'production_house' => 'New Line Cinema',
                'casts' => 'Elijah Wood, Ian McKellen, Orlando Bloom',
                'description' => 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.',
                'release_date' => now()->addMonth(rand(1, 12)),
                'movie_images' => 'lotr_fellowship.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Shawshank Redemption',
                'rating' => 'D 17+',
                'duration' => 142,
                'genre' => 'Drama',
                'producer' => 'Niki Marvin',
                'director' => 'Frank Darabont',
                'writer' => 'Stephen King',
                'production_house' => 'Castle Rock Entertainment',
                'casts' => 'Tim Robbins, Morgan Freeman, Bob Gunton',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'release_date' => now()->addMonth(rand(1, 12)),
                'movie_images' => 'shawshank.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Forrest Gump',
                'rating' => 'R 13+',
                'duration' => 142,
                'genre' => 'Drama',
                'producer' => 'Wendy Finerman',
                'director' => 'Robert Zemeckis',
                'writer' => 'Eric Roth',
                'production_house' => 'Paramount Pictures',
                'casts' => 'Tom Hanks, Robin Wright, Gary Sinise',
                'description' => 'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other historical events unfold from the perspective of an Alabama man with an IQ of 75.',
                'release_date' => now()->subMonth(rand(1, 12)),
                'movie_images' => 'forrest_gump.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Guardians of the Galaxy Vol. 3',
                'rating' => 'D 17+',
                'duration' => 150,
                'genre' => 'Action',
                'producer' => 'Kevin Feige',
                'director' => 'James Gunn',
                'writer' => 'James Gunn',
                'production_house' => 'Marvel Studios',
                'casts' => 'Chris Pratt, Zoe Saldana, Dave Bautista',
                'description' => 'The Guardians must fight for their lives and face new enemies while learning more about their origins.',
                'release_date' => now()->addMonth(rand(1, 12)), // Future release date
                'movie_images' => 'gotg_vol_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Spider-Man: No Way Home',
                'rating' => 'D 17+',
                'duration' => 148,
                'genre' => 'Action',
                'producer' => 'Kevin Feige',
                'director' => 'Jon Watts',
                'writer' => 'Chris McKenna, Erik Sommers',
                'production_house' => 'Marvel Studios',
                'casts' => 'Tom Holland, Zendaya, Benedict Cumberbatch',
                'description' => 'Peter Parker seeks Doctor Strange\'s help to erase the world\'s knowledge of his secret identity, but things go awry.',
                'release_date' => now()->addMonth(rand(1, 12)), // Future release date
                'movie_images' => 'spiderman_no_way_home.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Flash',
                'rating' => 'D 17+',
                'duration' => 155,
                'genre' => 'Action',
                'producer' => 'Barbara Muschietti',
                'director' => 'Andy Muschietti',
                'writer' => 'John Francis Daley, Jonathan Goldstein',
                'production_house' => 'Warner Bros.',
                'casts' => 'Ezra Miller, Michael Keaton, Ben Affleck',
                'description' => 'Barry Allen uses his superpowers to travel through time to change the past, but his actions have unintended consequences.',
                'release_date' => now()->addMonth(rand(1, 12)), // Future release date
                'movie_images' => 'the_flash.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Avatar 2',
                'rating' => 'R 13+',
                'duration' => 160,
                'genre' => 'Sci-Fi',
                'producer' => 'James Cameron',
                'director' => 'James Cameron',
                'writer' => 'James Cameron',
                'production_house' => '20th Century Fox',
                'casts' => 'Sam Worthington, Zoe Saldana, Sigourney Weaver',
                'description' => 'Jake Sully and Neytiri face new challenges and explore the oceans of Pandora in the highly anticipated sequel.',
                'release_date' => now()->addMonth(rand(1, 12)), // Future release date
                'movie_images' => 'avatar_2.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
