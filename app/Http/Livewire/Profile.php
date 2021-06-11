<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    const BOOKINGS = 1;
    const MAIN_SETTINGS = 2;
    const CHANGE_PASSWORD = 3;
    const CONTACT_ADMIN = 4;

    public $display = self::BOOKINGS;

    public $client;
    public $name;
    public $lastname;
    public $email;
    public $phone;
    public $profile_photo_path;

    public $message;

    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255|email|unique:clients,email,' . $this->client->id,
            'phone' => 'max:255|regex:/^([0-9\s+()]*)$/',
            'profile_photo_path' => 'nullable|image|mimes:jpg,jpeg,png,gif'
        ];
    }

    public function mount()
    {
        $this->client = auth()->user();
        $this->name = $this->client->name ?? null;
        $this->lastname = $this->client->lastname ?? null;
        $this->email = $this->client->email ?? null;
        $this->phone = $this->client->phone ?? null;
    }

    public function submit()
    {
        $this->validate();

        if ($this->profile_photo_path) {
            $this->client->update([
                'profile_photo_path' => $this->profile_photo_path->store('profile-photos')
            ]);

            $this->reset([
                'profile_photo_path'
            ]);
        }

        $this->client->update([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone
        ]);

        $this->emit('alert', [
            'type' => 'success',
            'message' => 'Your profile has been updated'
        ]);
    }

    public function sendMessage()
    {
        if(empty($this->message)) {
            $this->emit('alert', [
                'type' => 'error',
                'message' => 'Message field must be filled'
            ]);

            return;
        }

        Question::create([
            'full_name' => $this->client->fullName,
            'email' => $this->email,
            'phone_number' => $this->phone,
            'question' => $this->message,
        ]);

        $this->emit('alert', [
            'type' => 'success',
            'message' => 'Thank you for your message. Administrator will get in touch with you soon.'
        ]);

        $this->reset('message');
    }

    public function render()
    {
        $bookings = $this->client->bookings()->latest()->paginate(10);

        return view('livewire.profile', compact('bookings'));
    }
}
