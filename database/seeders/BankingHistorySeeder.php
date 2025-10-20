<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BankingHistory;
use App\Models\User;

class BankingHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the first user or create one if none exists
        $user = User::first();

        if (!$user) {
            $user = User::create([
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]);
        }

        // Sample banking history data
        $transactions = [
            [
                'user_id' => $user->id,
                'transaction_id' => 'TXN-2024-001',
                'description' => 'Salary Deposit',
                'details' => 'Monthly salary from Kwaku Corp',
                'type' => 'credit',
                'amount' => 2500.00,
                'balance_after' => 15750.50,
                'status' => 'completed',
                'category' => 'salary_deposit',
                'account_number' => '****1234',
                'transaction_date' => now()->subDays(1)->setTime(10, 30),
            ],
            [
                'user_id' => $user->id,
                'transaction_id' => 'TXN-2024-002',
                'description' => 'ATM Withdrawal',
                'details' => 'ATM #1234 - Main Street Branch',
                'type' => 'debit',
                'amount' => 200.00,
                'balance_after' => 13250.50,
                'status' => 'completed',
                'category' => 'atm_withdrawal',
                'account_number' => '****1234',
                'location' => 'Main Street Branch ATM',
                'transaction_date' => now()->subDays(2)->setTime(14, 15),
            ],
            [
                'user_id' => $user->id,
                'transaction_id' => 'TXN-2024-003',
                'description' => 'Online Payment',
                'details' => 'Electricity Bill - ECG Company',
                'type' => 'debit',
                'amount' => 85.75,
                'balance_after' => 13450.50,
                'status' => 'completed',
                'category' => 'bill_payment',
                'account_number' => '****1234',
                'merchant_name' => 'ECG Company',
                'transaction_date' => now()->subDays(3)->setTime(9, 45),
            ],
            [
                'user_id' => $user->id,
                'transaction_id' => 'TXN-2024-004',
                'description' => 'Transfer Received',
                'details' => 'From John Doe - Gift Money',
                'type' => 'credit',
                'amount' => 150.00,
                'balance_after' => 13536.25,
                'status' => 'pending',
                'category' => 'transfer_received',
                'account_number' => '****1234',
                'reference_number' => 'REF-789456',
                'transaction_date' => now()->subDays(4)->setTime(11, 20),
            ],
            [
                'user_id' => $user->id,
                'transaction_id' => 'TXN-2024-005',
                'description' => 'POS Purchase',
                'details' => 'Supermarket - Accra Mall',
                'type' => 'debit',
                'amount' => 125.30,
                'balance_after' => 13386.25,
                'status' => 'completed',
                'category' => 'pos_purchase',
                'account_number' => '****1234',
                'merchant_name' => 'Accra Mall Supermarket',
                'location' => 'Accra Mall',
                'transaction_date' => now()->subDays(5)->setTime(16, 30),
            ],
            [
                'user_id' => $user->id,
                'transaction_id' => 'TXN-2024-006',
                'description' => 'Interest Earned',
                'details' => 'Monthly interest on savings account',
                'type' => 'credit',
                'amount' => 25.50,
                'balance_after' => 8420.00,
                'status' => 'completed',
                'category' => 'interest_earned',
                'account_number' => '****5678',
                'transaction_date' => now()->subDays(6)->setTime(12, 0),
            ],
            [
                'user_id' => $user->id,
                'transaction_id' => 'TXN-2024-007',
                'description' => 'Transfer to Savings',
                'details' => 'Monthly savings transfer',
                'type' => 'debit',
                'amount' => 500.00,
                'balance_after' => 8394.50,
                'status' => 'completed',
                'category' => 'transfer_sent',
                'account_number' => '****1234',
                'transaction_date' => now()->subDays(7)->setTime(8, 0),
            ],
            [
                'user_id' => $user->id,
                'transaction_id' => 'TXN-2024-008',
                'description' => 'Online Shopping',
                'details' => 'Amazon.com purchase',
                'type' => 'debit',
                'amount' => 75.99,
                'balance_after' => 8894.50,
                'status' => 'completed',
                'category' => 'pos_purchase',
                'account_number' => '****1234',
                'merchant_name' => 'Amazon.com',
                'transaction_date' => now()->subDays(8)->setTime(20, 15),
            ],
        ];

        // Insert the transactions
        foreach ($transactions as $transaction) {
            BankingHistory::create($transaction);
        }
    }
}
