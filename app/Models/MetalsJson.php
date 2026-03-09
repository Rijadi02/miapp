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
        'price_1g',
        'silver_json',
        'silver_price',
        'silver_price_1g',
        'date',
    ];
}
