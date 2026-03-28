<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegistrationPayment extends Model
{
    protected $fillable = [
        'registration_id',
        'amount',
        'payment_method',
        'operation_number',
        'voucher_path',
        'payment_date',
        'status',
        'reviewed_by',
        'reviewed_at',
        'rejection_reason',
    ];

    protected $casts = [
        'amount'       => 'decimal:2',
        'payment_date' => 'date',
        'reviewed_at'  => 'datetime',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }

    /** Administrador que revisó el pago */
    public function reviewer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }

    // ─── Helpers ───────────────────────────────────────────────────────────────

    public function isApproved(): bool
    {
        return $this->status === 'approved';
    }

    public function getPaymentMethodLabelAttribute(): string
    {
        return match ($this->payment_method) {
            'bank_transfer' => 'Transferencia bancaria',
            'yape'          => 'Yape',
            'plin'          => 'Plin',
            'cash'          => 'Efectivo',
            default         => 'Otro',
        };
    }
}
