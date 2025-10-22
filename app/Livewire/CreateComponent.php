<?php

namespace App\Livewire;

use Livewire\Livewire;
use Livewire\Component;
use App\Mail\CreateMail;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;


class CreateComponent extends Component
{
    use WithFileUploads;

    public $first_name;
    public $last_name;
    public $middle_name;

    public $date_of_birth;
    public $place_of_birth;
    public $residential_address;
    public $phone_number;
    public $email;
    public $address ;
    public $tax_id;
    public $passport;


    public $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'date_of_birth' => 'required|date',
        'place_of_birth' => 'required|string|max:255',
        'residential_address' => 'required|string|max:255',
        'phone_number' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'address' => 'required|string|max:255',
        'tax_id' => 'required|string|max:255',
        'passport' => 'required',

    ];
    public function submit(){
        $this->validate($this->rules);
        $path = $this->passport->store('passports', 'public');

        $body = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'middle_name' => $this->middle_name,
            'date_of_birth' => $this->date_of_birth,
            'place_of_birth' => $this->place_of_birth,
            'residential_address' => $this->residential_address,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'address' => $this->address,
            'tax_id' => $this->tax_id,
            'passport' => $path

        ];

        Mail::to('offeikelvin261@gmail.com')->send(new CreateMail($body));

        LivewireAlert::title('success', 'Form submitted successfully!.Our customer representative will contact you shortly')
        ->success()
        ->show();


        return redirect()->route('home');

    }
    public function render()
    {
        return view('livewire.create-component');
    }
}
