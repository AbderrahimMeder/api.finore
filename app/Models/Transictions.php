<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transictions extends Model
{
    use HasUuids;
    protected $table = 'transactions';

    protected $fillable = [
        'account_id',
        'amount',
        'title',
        'type',
        'category',
        'description',
        'date',
        'currency',
        'payment_method',
        'status',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'date' => 'date',
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
    
}