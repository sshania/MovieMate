<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    protected $table = 'cinemas';

    protected $fillable = [
        'name',
        'location',
        'total_studios'
    ];

    public function studios()
    {
        return $this->hasMany(Studio::class, 'cinema_id', 'id');
    }
}
