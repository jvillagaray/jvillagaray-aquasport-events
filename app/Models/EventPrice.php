<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventPrice extends Model
{
    protected $fillable = [
        'event_phase_id',
        'event_distance_id',
        'event_mode_id',
        'price',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    public function phase(): BelongsTo
    {
        return $this->belongsTo(EventPhase::class, 'event_phase_id');
    }

    public function distance(): BelongsTo
    {
        return $this->belongsTo(EventDistance::class, 'event_distance_id');
    }

    public function mode(): BelongsTo
    {
        return $this->belongsTo(EventMode::class, 'event_mode_id');
    }

    /** Inscripciones que usaron este precio */
    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
}
