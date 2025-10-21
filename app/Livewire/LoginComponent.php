<?php

namespace App\Livewire;

use App\Mail\OtpMail;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class LoginComponent extends Component
{
    public $email;
    public $password;

    protected function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ];
    }

     public function submit()
    {
        $this->validate();

        // Attempt to authenticate the user
          if (! Auth::validate(['email' => $this->email, 'password' => $this->password])) {
            $this->addError('email', 'These credentials do not match our records.');
            return;
        }

        // Get the authenticated user
        $code = (string) random_int(100000, 999999);
        // $user = Auth::user();


        \App\Models\User::where('email', $this->email)->update(['otp' => $code, 'expires_at' => now()->addMinutes(10)]);
        // $this->events = Cache::remember('email', now()->addMinutes(10), function () {
        //     return $this->email;
        // });

        Mail::to($this->email)->send(new OtpMail($code));
        $this->otpSent = true;
        session()->flash('status', 'We have emailed you a one-time passcode.');

        return redirect()->route('otp', encrypt(['email' => $this->email , 'password' => $this->password]));

        // Regenerate session for security
        // request()->session()->regenerate();

        // // Flash success message
        // session()->flash('status', 'Welcome back, ' . $user->name . '!');

                // Redirect to dashboard with user's email

//
        // return redirect()->route('otp', encrypt(['email' => $this->email , 'password' => $this->password]) );
    }



    public function render()
    {
        return view('livewire.login-component');
    }
}
