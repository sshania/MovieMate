<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;

    protected $table = 'showtimes';

    protected $fillable = [
        'movie_id',
        'studio_id',
        'showtime',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'studio_id', 'id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'showtime_id', 'id');
    }
}
