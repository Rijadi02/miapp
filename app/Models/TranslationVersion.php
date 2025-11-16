<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranslationVersion extends Model
{
    use HasFactory;

    protected $fillable = [
        'translation_id',
        'albanian_text',
        'version_number',
    ];

    public function translation()
    {
        return $this->belongsTo(Translation::class);
    }
}
