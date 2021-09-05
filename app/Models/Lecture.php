<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
