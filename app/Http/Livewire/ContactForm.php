<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $loading = false;

    // Added Regex to minimize spam names
    protected $rules = [
        'name' => ['required', 'string', 'regex:/^(?=.*[\pL])[\pL\s-]{3,}$/u'],
        'email' => 'required|email',
        'message' => 'required|string|min:5'
    ];

        public function messages()
    {
        return [
            'name.required' => 'Palun sisestage nimi',
            'name.min' => 'Nimi peab sisaldama vähemalt 3 tähemärki',
            'name.regex' => 'Nimi võib sisaldada ainult tähti, tühikut, sidekriipsu',
            'email.required' => 'Palun sisestage e-mail',
            'email.email' => 'Palun sisestage korrektne e-mail',
            'message.required' => 'Palun täitke sõnumiväli',
            'message.min' => 'Sõnum peab sisaldama vähemalt 5 tähemärki',
        ];
    }

    public function submit()
    {
        $this->validate();

        Mail::raw($this->message, function ($mail) {
            $mail->to('wool@test.ee')
                ->from($this->email, $this->name)->subject('Contact Us Form Submission');
        });

        $this->reset(['name', 'email', 'message']);
        session()->flash('success', 'Sõnum saadetud!');
        $this->dispatchBrowserEvent('message-sent');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
