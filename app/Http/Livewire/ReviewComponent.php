<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Livewire\Component;

class ReviewComponent extends Component
{
    public $reviewing = false;
    public $message;
    public $rating;

    protected $rules = [
        'message' => 'required|min:10',
        'rating' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        Review::create([
            'client_id' => auth()->id(),
            'rating' => $this->rating,
            'message' => $this->message,
        ]);

        $this->reset();

        $this->emit('alert', [
            'type' => 'success',
            'message' => 'Thank you for your review!'
        ]);
    }

    public function render()
    {
        return view('livewire.review-component');
    }
}
