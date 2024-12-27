<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Block extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'data'
    ];

    protected $casts = [
        'data' => 'array',
    ];

    // public function pages(): MorphToMany
    // {
    //     return $this->morphToMany(Page::class, 'componentable');
    // }
}