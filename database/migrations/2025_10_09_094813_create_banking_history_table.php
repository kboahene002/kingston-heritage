<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('banking_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->string('transaction_id', 50)->unique(); // Unique transaction identifier
            $table->string('description'); // Transaction description
            $table->string('details')->nullable(); // Additional details/notes
            $table->enum('type', ['credit', 'debit']); // Transaction type
            $table->decimal('amount', 15, 2); // Transaction amount
            $table->decimal('balance_after', 15, 2); // Account balance after transaction
            $table->enum('status', ['completed', 'pending', 'failed', 'cancelled'])->default('pending');
            $table->enum('category', [
                'salary_deposit',
                'atm_withdrawal',
                'online_payment',
                'transfer_received',
                'transfer_sent',
                'pos_purchase',
                'bill_payment',
                'interest_earned',
                'fee_charged',
                'other'
            ])->default('other');
            $table->string('reference_number')->nullable(); // External reference number
            $table->string('account_number')->nullable(); // Account number involved
            $table->string('merchant_name')->nullable(); // For purchases/payments
            $table->string('location')->nullable(); // Transaction location
            $table->timestamp('transaction_date'); // When the transaction occurred
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Indexes for better performance
            $table->index(['user_id', 'transaction_date']);
            $table->index(['user_id', 'type']);
            $table->index(['user_id', 'status']);
            $table->index('transaction_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banking_history');
    }
};
