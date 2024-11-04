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
        'cinema_id',
        'showtime',
        'showtime_date',
        'showtime_hour'
    ];

    public function movie()
    {
        // return $this->belongsTo(Movie::class);
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

    public function cinema()
    {
        return $this->belongsTo(Cinema::class, 'cinema_id', 'id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'showtime_id', 'id');
    }
}
