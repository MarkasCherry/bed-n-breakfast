<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function privacyPolicy()
    {
        $setting = Setting::find(Setting::PRIVACY_POLICY);

        return view('privacy-policy', compact('setting'));
    }

    public function contactUs()
    {
        return view('contact-us');
    }
}
