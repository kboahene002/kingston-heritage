<?php

namespace App\Livewire;

use App\Models\BankingHistory;
use App\Models\User;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UpdateBalanceComponent extends Component
{

      use WithFileUploads;

    public $jsonFile;
    public $jsonData = [];
    public $userData = [];
    public $userFile;


    public function submit()
    {
        // dd(1234);
        $this->validate([
            'jsonFile' => 'required|file|mimes:json|max:2048',
        ]);

        $content = file_get_contents($this->jsonFile->getRealPath());

        // Decode the JSON content
        $this->jsonData = json_decode($content, true);

        // dd($this->jsonData['email']);
        $user = User::where('email', $this->jsonData['email'])->first();
        $user->update([
            'balance' => $this->jsonData['bank_balance'],
        ]);

        //strip the last four digits from account number
        $account_number = substr($user->account_number, 0, -4);


        foreach($this->jsonData['transactions'] as $data){
            BankingHistory::create([
                'user_id' => $user->id,
                'transaction_date' => Carbon::parse($data['transaction_date'])->format('Y-m-d'), //$data['transaction_date'],
                'description' => $data['description'],
                'type' => $data['type'],
                'amount' => $data['amount'],
                'balance_after' => $data['balance'],
                'status' => $data['status'],
                "transaction_id" => $data['transaction_id'],
                "account_number" => $account_number
            ]);
        }

        LivewireAlert::title('Updated Successfully!')
        ->success()
        ->show();


    }

    public function user(){
        $this->validate([
            'userFile' => "required|file|mimes:json|max:2048",
        ]);

         $content = file_get_contents($this->userFile->getRealPath());

        // Decode the JSON content
        $this->userData = json_decode($content, true);
        // dd($this->userData); //$this
        User::create([
            'name' => $this->userData['name'],
            'email' => $this->userData['email'],
            'account_number' => $this->userData['account_number'],
            'balance' => $this->userData['account_balance'],
            'password' => Hash::make($this->userData['password']), //$this->userData['password'],
            "account_type" => $this->userData['account_type'],
            'email_verified_at' => now(),
        ]);
        LivewireAlert::title('Updated Successfully!')
        ->success()
        ->show();
    }

    public function render()
    {
        return view('livewire.update-balance-component');
    }
}
