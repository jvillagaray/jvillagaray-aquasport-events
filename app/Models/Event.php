<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'edition',
        'type',
        'description',
        'location',
        'venue',
        'start_date',
        'end_date',
        'registration_opens_at',
        'registration_closes_at',
        'max_participants',
        'banner_path',
        'regulations_path',
        'status',
    ];

    protected $casts = [
        'start_date'               => 'date',
        'end_date'                 => 'date',
        'registration_opens_at'    => 'datetime',
        'registration_closes_at'   => 'datetime',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    public function phases(): HasMany
    {
        return $this->hasMany(EventPhase::class)->orderBy('order');
    }

    public function distances(): HasMany
    {
        return $this->hasMany(EventDistance::class);
    }

    public function modes(): HasMany
    {
        return $this->hasMany(EventMode::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(EventCategory::class)->orderBy('order');
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

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    // ─── Accessors / Helpers ───────────────────────────────────────────────────

    /** Retorna la fase de inscripción vigente en este momento */
    public function activePhase(): ?EventPhase
    {
        return $this->phases()
            ->where('is_active', true)
            ->where('starts_at', '<=', now())
            ->where('ends_at', '>=', now())
            ->first();
    }

    /** Indica si las inscripciones están abiertas */
    public function isRegistrationOpen(): bool
    {
        return $this->status === 'published'
            && ($this->registration_opens_at === null || $this->registration_opens_at->lte(now()))
            && ($this->registration_closes_at === null || $this->registration_closes_at->gte(now()));
    }
}
