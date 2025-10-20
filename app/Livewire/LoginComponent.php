<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


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
        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->addError('email', 'These credentials do not match our records.');
            return;
        }

        // Get the authenticated user
        $user = Auth::user();

        // Regenerate session for security
        request()->session()->regenerate();

        // Flash success message
        session()->flash('status', 'Welcome back, ' . $user->name . '!');

                // Redirect to dashboard with user's email

            
        return redirect()->route('dashboard', ['history' => $this->email]);
    }



    public function render()
    {
        return view('livewire.login-component');
    }
}
