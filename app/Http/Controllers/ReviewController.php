<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::public()->latest()->get();

        return view('reviews.index', compact('reviews'));
    }
}
