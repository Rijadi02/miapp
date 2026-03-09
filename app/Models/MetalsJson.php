<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetalsJson extends Model
{
    use HasFactory;

    protected $table = 'metals_json';

    protected $fillable = [
        'json',
        'price',
        'silver_json',
        'silver_price',
        'date',
    ];
}
