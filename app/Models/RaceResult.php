<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RaceResult extends Model
{
    protected $fillable = [
        'registration_id',
        'bib_number',
        'chip_code',
        'swim_time_seconds',
        't1_time_seconds',
        'bike_time_seconds',
        't2_time_seconds',
        'run_time_seconds',
        'total_time_seconds',
        'position_overall',
        'position_gender',
        'position_category',
        'position_mode',
        'dns',
        'dnf',
        'dsq',
        'notes',
    ];

    protected $casts = [
        'dns' => 'boolean',
        'dnf' => 'boolean',
        'dsq' => 'boolean',
    ];

    // ─── Relaciones ────────────────────────────────────────────────────────────

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }

    // ─── Accessors ─────────────────────────────────────────────────────────────

    /** Convierte segundos a formato HH:MM:SS legible */
    public function getFormattedTotalTimeAttribute(): ?string
    {
        return $this->formatSeconds($this->total_time_seconds);
    }

    public function getFormattedSwimTimeAttribute(): ?string
    {
        return $this->formatSeconds($this->swim_time_seconds);
    }

    public function getFormattedBikeTimeAttribute(): ?string
    {
        return $this->formatSeconds($this->bike_time_seconds);
    }

    public function getFormattedRunTimeAttribute(): ?string
    {
        return $this->formatSeconds($this->run_time_seconds);
    }

    /** Indica si el resultado tiene un estado especial (DNS/DNF/DSQ) */
    public function getStatusLabelAttribute(): string
    {
        if ($this->dns) return 'DNS';
        if ($this->dnf) return 'DNF';
        if ($this->dsq) return 'DSQ';

        return $this->total_time_seconds ? $this->formatted_total_time : '—';
    }

    // ─── Helpers privados ──────────────────────────────────────────────────────

    private function formatSeconds(?int $seconds): ?string
    {
        if ($seconds === null) {
            return null;
        }

        $h = intdiv($seconds, 3600);
        $m = intdiv($seconds % 3600, 60);
        $s = $seconds % 60;

        return sprintf('%02d:%02d:%02d', $h, $m, $s);
    }
}
