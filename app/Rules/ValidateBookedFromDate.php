<?php

namespace App\Rules;

use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class ValidateBookedFromDate implements Rule
{
    private $room;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($roomId)
    {
        $this->room = Room::find($roomId);
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $bookedDates = $this->room->getRoomBookedDays();

        foreach ($bookedDates as $date)
        {
            $currentDate = Carbon::parse($value);
            $bookedFrom = Carbon::parse($date['booked_from']);
            $bookedTo = Carbon::parse($date['booked_to']);
            if($currentDate->between($bookedFrom, $bookedTo)){
                return false;
            }
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
