<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Comments\Models\Concerns\HasComments;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use HasComments;
    use InteractsWithMedia;

    protected $guarded = [];

    protected $casts = [
        'content' => 'array',
    ];

    public function author()
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
