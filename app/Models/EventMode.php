<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventMode extends Model
{
    protected $fillable = [
        'event_id',
        'name',
        'code',
        'team_size',
        'description',
        'status',
    ];

    protected $casts = [
        'team_size' => 'integer',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function prices(): HasMany
    {
        return $this->hasMany(EventPrice::class);
    }

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    // ─── Scopes ────────────────────────────────────────────────────────────────

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // ─── Helpers ───────────────────────────────────────────────────────────────

    public function isRelay(): bool
    {
        return $this->team_size > 1;
    }
}
