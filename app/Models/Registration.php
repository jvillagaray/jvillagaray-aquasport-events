<?php

namespace App\Models;

use App\Models\EventDistance;
use App\Models\EventMode;
use App\Models\EventCategory;
use App\Models\EventPrice;
use App\Models\ShirtSize;
use App\Models\Team;
use App\Models\Waiver;
use App\Models\RaceResult;
use App\Models\RegistrationPayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Registration extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'registration_number',
        'event_id',
        'participant_id',
        'event_distance_id',
        'event_category_id',
        'event_mode_id',
        'event_price_id',
        'shirt_size_id',
        'team_id',
        'status',
        'amount_paid',
        'voucher_path',
        'notes',
        'confirmed_at',
    ];

    protected $casts = [
        'amount_paid'  => 'decimal:2',
        'confirmed_at' => 'datetime',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function participant(): BelongsTo
    {
        return $this->belongsTo(Participant::class);
    }

    public function distance(): BelongsTo
    {
        return $this->belongsTo(EventDistance::class, 'event_distance_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    public function mode(): BelongsTo
    {
        return $this->belongsTo(EventMode::class, 'event_mode_id');
    }

    public function price(): BelongsTo
    {
        return $this->belongsTo(EventPrice::class, 'event_price_id');
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function shirtSize(): BelongsTo
    {
        return $this->belongsTo(ShirtSize::class);
    }

    /** Historial de pagos (puede tener múltiples intentos) */
    public function payments(): HasMany
    {
        return $this->hasMany(RegistrationPayment::class);
    }

    /** Último pago registrado */
    public function latestPayment(): HasOne
    {
        return $this->hasOne(RegistrationPayment::class)->latestOfMany();
    }

    /** Waiver (1-1) */
    public function waiver(): HasOne
    {
        return $this->hasOne(Waiver::class);
    }

    /** Resultado en carrera (1-1) */
    public function result(): HasOne
    {
        return $this->hasOne(RaceResult::class);
    }

    // ─── Scopes ────────────────────────────────────────────────────────────────

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeReviewing($query)
    {
        return $query->where('status', 'reviewing');
    }

    // ─── Helpers ───────────────────────────────────────────────────────────────

    public function isApproved(): bool
    {
        return $this->status === 'approved';
    }

    public function isPending(): bool
    {
        return in_array($this->status, ['pending', 'reviewing']);
    }

    /** Genera el número de inscripción único. Ej: AQS-2026-0042 */
    public static function generateNumber(int $eventId): string
    {
        $count = static::where('event_id', $eventId)->withTrashed()->count() + 1;

        return sprintf('AQS-%d-%04d', now()->year, $count);
    }
}
