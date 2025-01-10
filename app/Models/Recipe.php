<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Comments\Models\Concerns\HasComments;

class Recipe extends Model implements HasMedia
{

    use HasComments;
    use InteractsWithMedia;

    protected $guarded = [];

    protected $casts = [
        'ingredients' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*
 * This string will be used in notifications on what a new comment
 * was made.
 */
    public function commentableName(): string
    {
        return 'Article';
    }

    /*
 * This URL will be used in notifications to let the user know
 * where the comment itself can be read.
 */
    public function commentUrl(): string
    {
        return route('articles.show', $this->id);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Contain, 300, 300)
            ->nonQueued();
    }
}
