<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Comments\Models\Concerns\HasComments;

class Article extends Model
{
    use HasComments;

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
}
