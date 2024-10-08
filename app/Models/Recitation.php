<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recitation extends Model
{
    use HasFactory;

    public function reciter()
    {
        return $this->belongsTo(Reciter::class);
    }
}
