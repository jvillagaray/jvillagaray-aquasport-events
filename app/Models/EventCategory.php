<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventCategory extends Model
{
    protected $fillable = [
        'event_id',
        'name',
        'gender',
        'min_age',
        'max_age',
        'description',
        'order',
        'status',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }

    // ─── Scopes ────────────────────────────────────────────────────────────────

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeForGender($query, string $gender)
    {
        return $query->whereIn('gender', [$gender, 'X']);
    }

    // ─── Helpers ───────────────────────────────────────────────────────────────

    /** Retorna el rango de edad como string legible: "15 – 17 años" */
    public function getAgeRangeAttribute(): string
    {
        if (is_null($this->min_age) && is_null($this->max_age)) {
            return 'Abierta';
        }

        if (is_null($this->min_age)) {
            return "Hasta {$this->max_age} años";
        }

        if (is_null($this->max_age)) {
            return "{$this->min_age}+ años";
        }

        return "{$this->min_age} – {$this->max_age} años";
    }

    /** Verifica si una edad califica para esta categoría */
    public function qualifies(int $age): bool
    {
        return ($this->min_age === null || $age >= $this->min_age)
            && ($this->max_age === null || $age <= $this->max_age);
    }
}
