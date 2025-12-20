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
        'key',
    ];

    public function roomConnections()
    {
        return $this->morphMany(RoomConnection::class, 'connection', 'type', 'connection_id');
    }
}
