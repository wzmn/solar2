<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany; 
use Illuminate\Support\Str;

class Blog extends Model
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title, '-');
        });

        static::updating(function ($blog) {
            $blog->slug = Str::slug($blog->title, '-');
        });
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'date',
        'author_id',
        'image',
        'content',
        'slug',
        'meta_title', 
        'meta_description', 
        'meta_keywords'
    ];

    /**
     * Get the author that owns the blog.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class); // You can specify the table name and foreign keys if needed
    }
}
