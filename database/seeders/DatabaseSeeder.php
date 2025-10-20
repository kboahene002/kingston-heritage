<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            "account_number" => "3456789065434",
            "account_type" => "Savings",
            'email' => 'test@example.com',
        ]);

        // Seed banking history data
        $this->call(BankingHistorySeeder::class);
    }
}
