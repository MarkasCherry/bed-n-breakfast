<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Http\Requests\StoreBookingRequest;
use App\Mail\sendBooking;
use App\Models\BookingStatus;
use App\Models\Room;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function create(BookingRequest $request)
    {
        $checkIn = explode(' ', $request->input('check-in'));
        $checkOut = explode(' ', $request->input('check-out'));
        $checkIn = $checkIn[1] . ' ' . $checkIn[2] . ' ' . $checkIn[3];
        $checkOut = $checkOut[1] . ' ' . $checkOut[2] . ' ' . $checkOut[3];
        $guestsNo = $request->guests_no;
        $breakfast = $request->breakfast;
        $depositSize = (double)Setting::where('name', 'Deposit Pricing')->first()->value / 100;

        $room = Room::find($request->room);

        $daysBooked = (new Carbon($checkIn))->diffInDays(new Carbon($checkOut));

        return view('booking.create', compact('checkIn', 'checkOut',
            'guestsNo', 'breakfast', 'room', 'daysBooked', 'depositSize'));
    }

    public function store(StoreBookingRequest $request)
    {
        $price = (new Carbon($request->booked_from))
                ->diffInDays(new Carbon($request->booked_to)) * Room::find($request->room)
                ->night_price;

        $booking = auth()->user()->bookings()->create([
            'room_id' => $request->room,
            'guest_no' => $request->guestsNo,
            'booked_from' => new Carbon($request->booked_from),
            'booked_to' => new Carbon($request->booked_to),
            'deposit_paid' => $request->deposit ? $price * (double)Setting::where('name', 'Deposit Pricing')->first()->value / 100 : 0,
            'price' => $price,
            'status_id' => BookingStatus::CONFIRMED,
            'is_paid' => $request->deposit ? false : true,
            'breakfast_need' => $request->breakfast ?? false,
        ]);

        Mail::to(auth()->user()->email)
            ->send(new sendBooking($booking));

        return redirect()->route('profile.show')->with('success', 'You have booked a room successfully!');
    }
}
