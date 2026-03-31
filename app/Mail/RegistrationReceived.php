<?php

namespace App\Mail;

use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationReceived extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly Registration $registration,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Inscripción recibida – IV Copa Laguna de Paca 2026',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.registration-received',
        );
    }
}
