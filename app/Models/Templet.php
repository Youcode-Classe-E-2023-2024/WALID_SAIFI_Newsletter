<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\Media;

class Templet extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function media(): MorphMany
    {
        return $this->morphMany(Media::class, 'Media');
    }

    protected $fillable = [
         'titre',
         'description',
         'content',
         'user_id'
    ];
}
