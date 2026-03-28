<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Club extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'city',
        'logo_path',
        'status',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    /** Participantes que pertenecen a este club */
    public function participants(): HasMany
    {
        return $this->hasMany(Participant::class);
    }

    /** Equipos de este club en cualquier evento */
    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    // ─── Scopes ────────────────────────────────────────────────────────────────

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
