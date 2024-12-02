<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Studio extends Model
{
    use HasFactory;

    protected $table = 'studios';

    protected $fillable = [
        'cinema_id',
        'studio_number',
        'total_seats',
    ];

    public function cinema()
    {
        return $this->belongsTo(Cinema::class, 'cinema_id', 'id');
    }

    public function seats()
    {
        return $this->hasMany(Seat::class, 'studio_id', 'id');
    }

    public function showtimes()
    {
        return $this->hasMany(Showtime::class, 'studio_id', 'id');
    }
}
