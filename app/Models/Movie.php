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
        'genre',
        'duration',
        'rating',
        'description',
        'release_date',
    ];

    public function showtimes()
    {
        return $this->hasMany(Showtime::class, 'movie_id', 'id');
    }
}
