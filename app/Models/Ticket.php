<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    protected $fillable = [
        'user_id',
        'showtime_id',
        'seat_id',
        'price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function showtime()
    {
        return $this->belongsTo(Showtime::class, 'showtime_id', 'id');
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class, 'seat_id', 'id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'ticket_id', 'id');
    }
}
