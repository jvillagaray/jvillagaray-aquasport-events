<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    protected $fillable = [
        'event_id',
        'event_mode_id',
        'club_id',
        'name',
        'captain_name',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function mode(): BelongsTo
    {
        return $this->belongsTo(EventMode::class, 'event_mode_id');
    }

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }

    /** Participantes del equipo a través de sus inscripciones */
    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
}
