<?php

namespace App\Providers;

use Illuminate\Mail\Events\MessageSent;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // ── Evidencia de correos enviados ──────────────────────────────────
        // Loguea automáticamente cada correo en storage/logs/laravel-YYYY-MM-DD.log
        // Para desactivar: comentar el bloque completo Event::listen(...)
        Event::listen(MessageSent::class, function (MessageSent $event) {
            $to = array_keys($event->message->getTo() ?? []);
            Log::channel('daily')->info('\u0001f4e7 Correo enviado', [
                'to'      => implode(', ', $to),
                'subject' => $event->message->getSubject(),
                'sent_at' => now()->toDateTimeString(),
            ]);
        });
    }
}
