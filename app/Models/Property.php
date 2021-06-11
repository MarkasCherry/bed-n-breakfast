<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @method static active()
 * @property mixed rooms
 */
class Property extends Model implements HasMedia
{
    use InteractsWithMedia;

    public function rooms(): Relation
    {
        return $this->hasMany(Room::class);
    }

    public function scopeActive(Builder $builder): Builder
    {
        return $builder->where('active', true);
    }

    public function amenities(): Relation
    {
        return $this->belongsToMany(Amenity::class, 'property_amenity');
    }
}
