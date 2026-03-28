<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Waiver extends Model
{
    protected $fillable = [
        'registration_id',
        'accepted_digitally',
        'accepted_at',
        'signed_document_path',
        'physical_delivered_at',
        'ip_address',
        'notes',
    ];

    protected $casts = [
        'accepted_digitally'     => 'boolean',
        'accepted_at'            => 'datetime',
        'physical_delivered_at'  => 'datetime',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }

    // ─── Helpers ───────────────────────────────────────────────────────────────

    public function isFullySigned(): bool
    {
        return $this->accepted_digitally && $this->physical_delivered_at !== null;
    }
}
