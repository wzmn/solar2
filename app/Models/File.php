<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class File extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title', 'name', 'path', 'mime_type', 'size', 'disk', 'fileable_id', 'fileable_type'
    ];

    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }

    // public function getUrlAttribute()
    // {
    //     return $this->getFirstMediaUrl(); // Use Media Library's URL method
    // }
}