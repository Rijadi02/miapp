<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(Book::class,'book_id','id');
    }

    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
