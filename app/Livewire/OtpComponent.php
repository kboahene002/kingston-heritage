<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class OtpComponent extends Component
{
  public  $email;
    public  $password;
    public string $otp;

    public function mount(array $email): void
    {
        // dd($email)
        $this->email = $email['email'];
        $this->password = $email['password']; // already decrypted by the route
        // dd($this->email);
    }

    public function verifyOtp()
    {
        $this->validateOnly('otp', [
            'otp' => ['required', 'digits:6'],
        ]);


        $user = \App\Models\User::where('email', $this->email)->first();


        // dd(( $user->otp !=  $this->otp));

        if (( $user->otp !=  $this->otp)  ||  $user->expires_at < now()) {
            $this->addError('otp', 'Invalid or expired code.');
            return;
        }


        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], true)) {
            $this->reset(['password', 'otp']);
            $this->otpSent = false;
            return redirect()->route('dashboard' , encrypt(1));

        }

        $this->addError('email', 'Login failed. Please try again.');
    }

    public function render()
    {
        // dd($this->email);
        return view('livewire.otp-component');
    }
}
