<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventDistance extends Model
{
    protected $fillable = [
        'event_id',
        'name',
        'distance_meters',
        'description',
        'max_participants',
        'status',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    /** Precios configurados para esta distancia (en distintas fases y modalidades) */
    public function prices(): HasMany
    {
        return $this->hasMany(EventPrice::class);
    }

    /** Inscripciones en esta distancia */
    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }

    // ─── Scopes ────────────────────────────────────────────────────────────────

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // ─── Helpers ───────────────────────────────────────────────────────────────

    /** Retorna la distancia en kilómetros formateada */
    public function getDistanceKmAttribute(): string
    {
        return number_format($this->distance_meters / 1000, 2) . ' km';
    }
}
