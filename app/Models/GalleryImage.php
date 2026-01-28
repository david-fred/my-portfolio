<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = [
        'title',
        'image_path',
        'event_date',
        'event_name',
        'description',
        'order',
    ];

    protected $casts = [
        'event_date' => 'date',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('event_date', 'desc');
    }
}
