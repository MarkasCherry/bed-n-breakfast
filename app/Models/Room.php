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
 */
class Room extends Model implements HasMedia
{
    use InteractsWithMedia;

    public function property(): Relation
    {
        return $this->belongsTo(Property::class);
    }

    public function scopeActive(Builder $builder): Builder
    {
        return $builder->where('active', true);
    }

    public function bookings(): Relation
    {
        return $this->hasMany(Booking::class);
    }

    public function getRoomBookedDays()
    {
        $bookedDates = $this->bookings()->select('booked_from', 'booked_to')->get()->toArray();
        foreach ($bookedDates as $key => $date){
            $bookedDates[$key]['booked_from'] = explode(' ', $date['booked_from'])[0];
            $bookedDates[$key]['booked_to'] = explode(' ', $date['booked_to'])[0];
        }
        return $bookedDates;
    }
}
