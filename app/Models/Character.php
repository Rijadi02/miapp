<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'thumbnail',
        'assets',
        'age',
        'gender',
        'short_description',
        'detailed_description'
    ];

    protected $casts = [
        'assets' => 'array'
    ];

    public function roomConnections()
    {
        return $this->morphMany(RoomConnection::class, 'connection', 'type', 'connection_id');
    }
}
