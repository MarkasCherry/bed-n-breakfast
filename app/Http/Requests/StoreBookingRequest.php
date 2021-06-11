<?php

namespace App\Http\Requests;

use App\Rules\ValidateBookedFromDate;
use App\Rules\ValidateBookedToDate;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'booked_from' => ['required', new ValidateBookedFromDate($this->get('room'))],
            'booked_to' => ['required', new ValidateBookedToDate($this->get('room'))],
            'name' => 'required|max:20|min:5',
            'card_number' => 'required|min:19|max:19',
            'expiration_date' => 'required',
            'security_code' => 'required|digits:3'
        ];
    }
}
