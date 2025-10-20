<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankingHistory extends Model
{
    protected $table = 'banking_history';

    protected $fillable = [
        'user_id',
        'transaction_id',
        'description',
        'details',
        'type',
        'amount',
        'balance_after',
        'status',
        'category',
        'reference_number',
        'account_number',
        'merchant_name',
        'location',
        'transaction_date'
    ];

    protected $casts = [
        'transaction_date' => 'datetime',
        'amount' => 'decimal:2',
        'balance_after' => 'decimal:2'
    ];

    /**
     * Get the user that owns the transaction
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope to get transactions for a specific user
     */
    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    /**
     * Scope to get transactions by type
     */
    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Scope to get transactions by status
     */
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Scope to get recent transactions
     */
    public function scopeRecent($query, $days = 30)
    {
        return $query->where('transaction_date', '>=', now()->subDays($days));
    }

    /**
     * Get formatted amount with currency symbol
     */
    public function getFormattedAmountAttribute()
    {
        return '$' . number_format($this->amount, 2);
    }

    /**
     * Get formatted balance with currency symbol
     */
    public function getFormattedBalanceAttribute()
    {
        return '$' . number_format($this->balance_after, 2);
    }
}
