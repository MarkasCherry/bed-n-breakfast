<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static find($id)
 * @method static public ()
 * @method static create(array $array)
 */
class Review extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'client_id',
        'rating',
        'message',
        'public'
    ];

    public function scopePublic(Builder $builder): Builder
    {
        return $builder->wherePublic(true);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
