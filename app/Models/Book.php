<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class,'category_slug','slug');
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class)->orderBy('number');
    }
}
