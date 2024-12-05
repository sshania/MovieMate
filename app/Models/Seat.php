<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $table = 'seats';

    protected $fillable = [
        // 'studio_id',
        'seat_number',
        'sub_total'
    ];

    public function studio()
    {
        // return $this->belongsTo(Studio::class, 'studio_id', 'id', 'sub_total');
        return $this->belongsTo(Studio::class, 'seat_number', 'sub_total');
    }

    public function ticket()
    {
        // return $this->belongsTo(Ticket::class, 'seat_id', 'id', 'sub_total');
        return $this->belongsTo(Ticket::class, 'seat_number', 'sub_total');
    }
}
