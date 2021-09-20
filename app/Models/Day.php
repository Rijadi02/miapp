<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }
}
