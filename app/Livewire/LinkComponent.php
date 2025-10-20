<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\LinkAccountRequestMail;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class LinkComponent extends Component
{
    public $account_number;
    public $account_holder_name;

    public function rules()
    {
        return [
            'account_number' => 'required|string|max:13',
            'account_holder_name' => 'required|string|max:255',
        ];
    }

    public function submit()
    {
        $this->validate();

        if ($this->account_number == auth()->user()->account_number) {
            // LivewireAlert::error('Sorry, you cannot link your own account');
            LivewireAlert::title('Sorry, you cannot link your own account!')
            ->error()
            ->show();
            return;
        }

        $account_info = \DB::table("users")
            ->where("account_number", $this->account_number)
            ->first();

        if (!$account_info) {
            LivewireAlert::title('No such account details exist!')
            ->error()
            ->show();
            return;
        }

        if ($this->account_holder_name != $account_info->name) {
            LivewireAlert::title('Account holder name does not match')
            ->error()
            ->show();
            return;
        }

        try {
            //send mail to user (queued)
            Mail::to($account_info->email)
                ->send( new LinkAccountRequestMail(
                    recipientName: $account_info->name,
                    requesterName: auth()->user()->name,
                    accountNumber: $this->account_number,
                ));

            LivewireAlert::title('Success.')
            ->success()->show();

            // Reset form
            $this->account_number = '';
            $this->account_holder_name = '';

        } catch (\Exception $e) {
            LivewireAlert::title('Failed to send request. Please try again.')->error()->show();
        }
    }
    public function render()
    {
        return view('livewire.link-component');
    }
}
