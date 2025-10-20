<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendCrytoCredentialsMail;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class CryptoComponent extends Component
{
    use WithFileUploads;
    public $screenshot;
    public $address;
    public $amount;

    protected $rules =
        [
            'address' => ['required', 'string'],
            'amount' => ['required', 'numeric', 'min:1' , "max:200"],
            "screenshot" => ['required', 'image']
        ];


    public function submit()
    {
        $this->validate();
        $path = $this->screenshot->store('uploads/temp', 'public');
        $imagePath = storage_path('app/public/' . $path);

        $this->body = [
            'address' => $this->address,
            'amount' => $this->amount,
        ];

        // Send mail
        Mail::to('support@kensingtonheritage.com')->send(new SendCrytoCredentialsMail($this->body, $imagePath));

        // Optionally delete after sending
        unlink($imagePath);

        $this->screenshot = null;
        $this->address = null;
        $this->amount = null;

         LivewireAlert::title('Sent Successfully!')
            ->success()
            ->show();


    }
    public function render()
    {
        return view('livewire.crypto-component');
    }
}
