<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;

class ProfileController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function generatePdf(Booking $booking)
    {
        $address = explode(',', Setting::where('name', 'Address')->first()->value);
        $phone = Setting::where('name', 'Phone')->first()->value;

        $pdf = PDF::loadView('pdfs.booking', compact('booking', 'address', 'phone'));
        return $pdf->download('Booking.pdf');
    }
}
