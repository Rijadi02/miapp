<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldJson extends Model
{
    use HasFactory;

    protected $table = 'gold_json';

    protected $fillable = [
        'json',
        'price',
        'date',
    ];
}
