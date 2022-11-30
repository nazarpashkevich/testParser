<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    protected $fillable = [
        'name',
        'check_period',
        'page_check_count',
        'track_idealist_check',
        'track_idealist_text',
        'track_olx_check',
        'track_olx_text',
        'track_fb_check',
        'track_fb_text',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeCurrentUserEvents(Builder $query): Builder
    {
        if (\Auth::check()) {
            return $query->where('user_id', \Auth::id());
        }

        return $query;
    }
}
