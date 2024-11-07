<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = [
        'title',
        'rating',
        'duration',
        'genre',
        'producer',
        'director',
        'writer',
        'production_house',
        'casts',
        'description',
        'release_date',
        'movie_images',
    ];

    public function showtimes()
    {
        return $this->hasMany(Showtime::class, 'movie_id', 'id');
    }
}
