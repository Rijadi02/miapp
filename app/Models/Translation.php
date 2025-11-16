<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;

    protected $fillable = [
        'translator',
        'title',
        'code',
        'arabic_text',
        'albanian_text',
        'arabic_files',
        'albanian_file',
    ];

    protected $casts = [
        'arabic_files' => 'array',
    ];

    public function versions()
    {
        return $this->hasMany(TranslationVersion::class)->orderBy('version_number', 'desc');
    }

    public function latestVersion()
    {
        return $this->hasOne(TranslationVersion::class)->latestOfMany('version_number');
    }
}
