<?php

namespace App\Http\Requests;

use App\Models\Participant;
use App\Models\Registration;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StoreRegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Formulario público
    }

    public function rules(): array
    {
        return [
            // ── Paso 1: Datos personales ──────────────────────────────────────
            'document_type'   => ['required', 'in:DNI,CE,PASSPORT'],
            'document_number' => [
                'required', 'string', 'max:20',
                // Formato según tipo de documento
                function ($attribute, $value, $fail) {
                    $type  = strtoupper($this->document_type ?? '');
                    $clean = strtoupper(trim($value));
                    if ($type === 'DNI' && !preg_match('/^\d{8}$/', $clean)) {
                        $fail('El DNI debe tener exactamente 8 dígitos numéricos.');
                    } elseif ($type === 'CE' && !preg_match('/^[A-Z0-9]{8,12}$/', $clean)) {
                        $fail('El CE debe tener entre 8 y 12 caracteres alfanuméricos.');
                    } elseif ($type === 'PASSPORT' && !preg_match('/^[A-Z0-9]{6,15}$/', $clean)) {
                        $fail('El pasaporte debe tener entre 6 y 15 caracteres alfanuméricos.');
                    }
                },
            ],
            'first_name'      => ['required', 'string', 'max:100'],
            'last_name'       => ['required', 'string', 'max:100'],
            'birthdate'       => ['required', 'date', 'before:today'],
            'gender'          => ['required', 'in:M,F'],
            'phone'           => ['required', 'digits:9'],
            'email'           => ['required', 'email', 'max:150'],

            // ── Paso 2: Datos de competición ──────────────────────────────────
            'club_id'            => ['nullable', 'integer'],
            'shirt_size_id'      => ['required', 'exists:shirt_sizes,id'],
            'event_distance_id'  => ['required', 'exists:event_distances,id'],
            'event_mode_id'      => ['required', 'exists:event_modes,id'],

            // Campos fijos (hardcodeados en el form como hidden)
            'event_id'           => ['required', 'exists:events,id'],
            'event_category_id'  => ['required', 'exists:event_categories,id'],
            'event_price_id'     => ['required', 'exists:event_prices,id'],

            // ── Comprobante de pago ───────────────────────────────────────────
            'voucher'            => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:5120'],

            // ── Términos y condiciones ────────────────────────────────────────
            'terms'              => ['accepted'], // debe ser "1", "on", "yes" o "true"
        ];
    }

    public function messages(): array
    {
        return [
            'document_type.required'    => 'Selecciona el tipo de documento.',
            'document_type.in'          => 'Tipo de documento no válido.',
            'document_number.required'  => 'El número de documento es obligatorio.',
            'first_name.required'       => 'El nombre es obligatorio.',
            'last_name.required'        => 'Los apellidos son obligatorios.',
            'birthdate.required'        => 'La fecha de nacimiento es obligatoria.',
            'birthdate.before'          => 'La fecha de nacimiento debe ser anterior a hoy.',
            'gender.required'           => 'Selecciona el género.',
            'gender.in'                 => 'Género no válido.',
            'phone.required'            => 'El teléfono es obligatorio.',
            'email.required'            => 'El correo electrónico es obligatorio.',
            'email.email'               => 'El correo electrónico no tiene un formato válido.',
            'shirt_size_id.required'    => 'Selecciona la talla de camiseta.',
            'shirt_size_id.exists'      => 'Talla de camiseta no válida.',
            'event_distance_id.required'=> 'Selecciona la distancia.',
            'event_distance_id.exists'  => 'Distancia no válida.',
            'event_mode_id.required'    => 'Selecciona la modalidad.',
            'event_mode_id.exists'      => 'Modalidad no válida.',
            'voucher.required'          => 'Debes subir el comprobante de pago.',
            'voucher.mimes'             => 'El comprobante debe ser JPG, PNG o PDF.',
            'voucher.max'               => 'El comprobante no puede superar los 5 MB.',
            'terms.accepted'            => 'Debes aceptar los términos y condiciones para continuar.',
        ];
    }

    /**
     * Normaliza el club_id: si viene "none" o vacío, lo convierte a null.
     */
    protected function prepareForValidation(): void
    {
        if ($this->club_id === 'none' || $this->club_id === '') {
            $this->merge(['club_id' => null]);
        }
    }

    /**
     * Verifica después de las validaciones básicas si el participante
     * ya tiene una inscripción activa para el mismo evento.
     */
    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator) {
            // Solo ejecutar si el documento ya pasó validaciones básicas
            if ($validator->errors()->hasAny(['document_type', 'document_number', 'event_id'])) {
                return;
            }

            $participant = Participant::where('document_type', strtoupper($this->document_type))
                ->where('document_number', strtoupper(trim($this->document_number)))
                ->first();

            if (!$participant) {
                return; // Participante nuevo → sin inscripción previa
            }

            $yaInscrito = Registration::where('event_id', $this->event_id)
                ->where('participant_id', $participant->id)
                ->whereNotIn('status', ['cancelled', 'rejected'])
                ->exists();

            if ($yaInscrito) {
                $validator->errors()->add(
                    'document_number',
                    'duplicate_registration' // Código interno que el Blade identifica
                );
            }
        });
    }
}
