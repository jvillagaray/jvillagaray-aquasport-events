<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Participant extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'club_id',
        'first_name',
        'last_name',
        'document_type',
        'document_number',
        'birthdate',
        'gender',
        'email',
        'phone',
        'nationality',
        'emergency_contact_name',
        'emergency_contact_phone',
        'photo_path',
    ];

    protected $casts = [
        'birthdate' => 'date',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }

    // ─── Accessors ─────────────────────────────────────────────────────────────

    /** Nombre completo */
    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /** Edad calculada desde la fecha de nacimiento */
    public function getAgeAttribute(): int
    {
        return $this->birthdate->age;
    }

    /** Género legible */
    public function getGenderLabelAttribute(): string
    {
        return $this->gender === 'M' ? 'Masculino' : 'Femenino';
    }
}
