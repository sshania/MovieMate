<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\User;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'user_id',
        'movie_id',
        'cinema_id',
        'showtime_id',
        'chosen_seat',
        'total_price',
        'payment_status',
    ];

    protected $casts = [
        'chosen_seat' => 'string',
        'payment_status' => 'boolean',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

    public function cinema()
    {
        return $this->belongsTo(Cinema::class, 'cinema_id', 'id');
    }

    public function showtime()
    {
        return $this->belongsTo(Showtime::class,'showtime_id', 'id');
    }
}
