<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomConnection extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'type',
        'connection_id',
        'assigned_by',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function assignedBy()
    {
        return $this->belongsTo(User::class, 'assigned_by');
    }

    /**
     * Get the parent connection model (Episode, Asset, Character, etc.).
     */
    public function connection()
    {
        return $this->morphTo(null, 'type', 'connection_id');
    }
}
