<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $table = 'seats';

    protected $fillable = [
        'studio_id',
        'seat_number',
    ];

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'studio_id', 'id');
    }
}
