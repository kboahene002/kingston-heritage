<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\BankingHistory;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class MoveComponent extends Component
{

    public $account_number;
    public $amount;
    public $reference;

   public function rules(){
             return [
        'account_number' => ['required', 'exists:users,account_number'],
        'amount' => ['required', 'numeric', 'min:1'],
        "reference" => ['required' , 'string']
    ];
   }

   public function generateId(){
     $year = date('Y');
    $uniqueNumber = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT); // Random 3 digits

    return "TXN-{$year}-{$uniqueNumber}";

   }

   public function submit(){
        $this->validate();

        if($this->account_number == auth()->user()->account_number){
                 LivewireAlert::title('Sorry, you cannot link your own account!')
            ->error()
            ->show();
            return;
        }

        if(auth()->user()->balance <  $this->amount || auth()->user()->balance == 0 ){
             LivewireAlert::title('Sorry, you cannot link your own account!')
            ->error()
            ->show();
        }

        //substract money from account holder
        $balance = auth()->user()->balance - $this->amount ;


        User::find(auth()->user()->id)->update([
            'balance' => $balance
        ]);

        // Add to account number entered
        $acc = User::where('account_number' , $this->account_number)->first();
        $acc_balance = $acc->balance + $this->amount;

        $acc->update([
            'balance' => $acc_balance
        ]);

        //Update History
        BankingHistory::create([

                'user_id' => auth()->user()->id,
                'transaction_id' => $this->generateId(),
                'description' => 'Transfer',
                'details' => 'Amount Transfer',
                'type' => 'debit',
                'amount' => $this->amount,
                'balance_after' => $balance,
                'status' => 'completed',
                'category' => 'transfer_sent',
                'account_number' => '****'.substr(auth()->user()->account_number, -4),
                'merchant_name' => '',
                'transaction_date' => now()->subDays(8)->setTime(20, 15),

        ]);

         BankingHistory::create([

                'user_id' => $acc->id,
                'transaction_id' => $this->generateId(),
                'description' => 'Transfer',
                'details' => 'Amount Transfer',
                'type' => 'credit',
                'amount' => $this->amount,
                'balance_after' => $acc_balance,
                'status' => 'completed',
                'category' => 'transfer_received',
                'account_number' => '****'.substr($acc->account_number, -4),
                'merchant_name' => '',
                'transaction_date' => now()->subDays(8)->setTime(20, 15),

        ]);

        LivewireAlert::title('Funds transferred successfully')
        ->success()
        ->show();


   }
    public function render()
    {
        return view('livewire.move-component');
    }
}
