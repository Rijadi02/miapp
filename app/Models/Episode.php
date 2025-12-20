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
        'description',
        'text',
        'key',
        'character_ids',
        'assigned_to',
    ];

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    protected $casts = [
        'character_ids' => 'array',
    ];

    public function roomConnections()
    {
        return $this->morphMany(RoomConnection::class, 'connection', 'type', 'connection_id');
    }
}
