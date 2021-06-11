<?php

namespace App\Http\Livewire;

use App\Models\Question;
use App\Models\Setting;
use Livewire\Component;

class ContactUs extends Component
{
    public $name;
    public $email;
    public $phone_number;
    public $question;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'question' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        Question::create([
            'full_name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'question' => $this->question
        ]);

        $this->reset();

        $this->emit('alert', [
            'type' => 'success',
            'message' => 'Thank you for your message! We will get in touch with you very soon.'
        ]);
    }

    public function render()
    {
        $contactPhone = Setting::whereName('phone')->first()->value ?? 'unknown';
        $contactEmail = Setting::whereName('email')->first()->value ?? 'unknown';
        $contactAddress = Setting::whereName('address')->first()->value ?? 'unknown';

        return view('livewire.contact-us', compact(
            'contactPhone',
            'contactEmail',
            'contactAddress'
        ));
    }
}
