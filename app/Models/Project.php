<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'long_description',
        'image',
        'technologies',
        'github_url',
        'live_url',
        'featured',
        'completed_at',
        'order',
        'is_published'
    ];

    protected $casts = [
        'technologies' => 'array',
        'featured' => 'boolean',
        'is_published' => 'boolean',
        'completed_at' => 'date'
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
