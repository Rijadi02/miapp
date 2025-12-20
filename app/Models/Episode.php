<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'text',
        'room_id',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
