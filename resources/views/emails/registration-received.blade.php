<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscripción recibida – IV Copa Laguna de Paca 2026</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-color: #f1f5f9;
            font-family: 'Inter', Arial, sans-serif;
            color: #1e293b;
            padding: 32px 16px;
        }

        .wrapper {
            max-width: 560px;
            margin: 0 auto;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 100%);
            border-radius: 12px 12px 0 0;
            padding: 32px 40px;
            text-align: center;
        }

        .header img {
            width: 80px;
            margin-bottom: 16px;
        }

        .header h1 {
            color: #ffffff;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -0.3px;
        }

        .header p {
            color: #67e8f9;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-top: 6px;
        }

        /* Body */
        .body {
            background: #ffffff;
            padding: 36px 40px;
        }

        .greeting {
            font-size: 16px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
        }

        .intro {
            font-size: 14px;
            line-height: 1.7;
            color: #475569;
            margin-bottom: 24px;
        }

        /* Número de registro */
        .registration-badge {
            background: #f0f9ff;
            border: 2px solid #bae6fd;
            border-radius: 10px;
            padding: 16px 20px;
            text-align: center;
            margin-bottom: 24px;
        }

        .registration-badge .label {
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #0284c7;
            margin-bottom: 4px;
        }

        .registration-badge .number {
            font-size: 22px;
            font-weight: 900;
            color: #0369a1;
            letter-spacing: 2px;
        }

        /* Datos del participante */
        .section-title {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #94a3b8;
            margin-bottom: 12px;
            padding-bottom: 8px;
            border-bottom: 1px solid #f1f5f9;
        }

        .data-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 24px;
        }

        .data-item .item-label {
            font-size: 11px;
            color: #94a3b8;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 2px;
        }

        .data-item .item-value {
            font-size: 14px;
            font-weight: 600;
            color: #0f172a;
        }

        /* Timeline de pasos */
        .steps-title {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #94a3b8;
            margin-bottom: 16px;
            padding-bottom: 8px;
            border-bottom: 1px solid #f1f5f9;
        }

        .step {
            display: flex;
            gap: 14px;
            margin-bottom: 16px;
            align-items: flex-start;
        }

        .step-indicator {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .step-indicator.done   { background: #dcfce7; color: #16a34a; }
        .step-indicator.active { background: #fef9c3; color: #ca8a04; }
        .step-indicator.next   { background: #f1f5f9; color: #94a3b8; }

        .step-text strong {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 2px;
        }

        .step-text span {
            font-size: 12px;
            color: #64748b;
            line-height: 1.5;
        }

        /* Alerta de pago */
        .payment-note {
            background: #fffbeb;
            border-left: 4px solid #f59e0b;
            border-radius: 6px;
            padding: 14px 16px;
            margin: 24px 0;
            font-size: 13px;
            color: #92400e;
            line-height: 1.6;
        }

        .payment-note strong { color: #78350f; }

        /* CTA */
        .cta-block {
            text-align: center;
            margin: 28px 0 8px;
        }

        .cta-button {
            display: inline-block;
            background: #f97316;
            color: #ffffff !important;
            font-size: 14px;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 8px;
            text-decoration: none;
        }

        /* Footer */
        .footer {
            background: #f8fafc;
            border-radius: 0 0 12px 12px;
            padding: 20px 40px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }

        .footer p {
            font-size: 12px;
            color: #94a3b8;
            line-height: 1.6;
        }

        .footer a {
            color: #0284c7;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="wrapper">

    {{-- ── HEADER ──────────────────────────────────────────────────────── --}}
    <div class="header">
        <img src="{{ asset('assets/web/images/logo_paca.png') }}" alt="Copa Laguna de Paca" />
        <h1>IV Copa Laguna de Paca 2026</h1>
        <p>Confirmación de inscripción</p>
    </div>

    {{-- ── BODY ─────────────────────────────────────────────────────────── --}}
    <div class="body">

        <p class="greeting">Hola, {{ $registration->participant->first_name }} 👋</p>

        <p class="intro">
            Hemos recibido tu inscripción para la <strong>IV Copa Laguna de Paca 2026</strong>.
            Nuestro equipo revisará tu comprobante de pago y en un plazo de
            <strong>24 a 48 horas hábiles</strong> recibirás la confirmación oficial de tu participación.
        </p>

        {{-- Número de registro --}}
        <div class="registration-badge">
            <div class="label">Número de registro</div>
            <div class="number">{{ $registration->registration_number }}</div>
        </div>

        {{-- Datos del participante --}}
        <p class="section-title">Datos registrados</p>
        <div class="data-grid">
            <div class="data-item">
                <div class="item-label">Participante</div>
                <div class="item-value">{{ $registration->participant->first_name }} {{ $registration->participant->last_name }}</div>
            </div>
            <div class="data-item">
                <div class="item-label">Documento</div>
                <div class="item-value">{{ $registration->participant->document_type }} {{ $registration->participant->document_number }}</div>
            </div>
            <div class="data-item">
                <div class="item-label">Distancia</div>
                <div class="item-value">{{ $registration->distance->name ?? '—' }}</div>
            </div>
            <div class="data-item">
                <div class="item-label">Modalidad</div>
                <div class="item-value">{{ $registration->mode->name ?? '—' }}</div>
            </div>
            <div class="data-item">
                <div class="item-label">Monto pagado</div>
                <div class="item-value">S/ {{ number_format($registration->amount_paid, 2) }}</div>
            </div>
            <div class="data-item">
                <div class="item-label">Talla camiseta</div>
                <div class="item-value">{{ $registration->shirtSize->label ?? '—' }}</div>
            </div>
        </div>

        {{-- Pasos --}}
        <p class="steps-title">¿Qué sigue?</p>

        <div class="step">
            <div class="step-indicator done">✓</div>
            <div class="step-text">
                <strong>Inscripción recibida</strong>
                <span>Tu formulario y comprobante de pago fueron registrados correctamente.</span>
            </div>
        </div>

        <!-- <div class="step">
            <div class="step-indicator active">2</div>
            <div class="step-text">
                <strong>Revisión del pago (24–48 h)</strong>
                <span>El equipo organizador verificará tu comprobante de depósito o transferencia.</span>
            </div>
        </div>

        <div class="step">
            <div class="step-indicator next">3</div>
            <div class="step-text">
                <strong>Confirmación de inscripción</strong>
                <span>Recibirás un correo con tu confirmación oficial y número de dorsal.</span>
            </div>
        </div> -->

        <div class="step">
            <div class="step-indicator next">2</div>
            <div class="step-text">
                <strong>Día del evento — llevar waiver firmado</strong>
                <span>Descarga, firma y presenta el documento de descargo el día de la competencia.</span>
            </div>
        </div>

        {{-- Nota de pago --}}
        <div class="payment-note">
            <strong>⚠ Importante:</strong> Si tu comprobante no es legible o el monto no coincide,
            nos comunicaremos contigo al correo o teléfono registrado para coordinar la regularización.
        </div>

        {{-- CTA WhatsApp --}}
        <div class="cta-block">
            <a class="cta-button" href="https://wa.me/51980588656">
                Consultar por WhatsApp
            </a>
        </div>

    </div>

    {{-- ── FOOTER ───────────────────────────────────────────────────────── --}}
    <div class="footer">
        <p>
            Este correo fue generado automáticamente al completar tu inscripción.<br />
            Por favor no respondas a este mensaje directamente.<br />
            ¿Dudas? Escríbenos a <a href="mailto:inscripciones@clubaquasport.com">inscripciones@clubaquasport.com</a>
            o por <a href="https://wa.me/51980588656">WhatsApp</a>.
        </p>
    </div>

</div>
</body>
</html>
