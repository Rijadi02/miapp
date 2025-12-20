<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'asset',
        'created_by',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function roomConnections()
    {
        return $this->morphMany(RoomConnection::class, 'connection', 'type', 'connection_id');
    }
}
