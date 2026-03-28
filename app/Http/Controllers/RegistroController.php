<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Models\Club;
use App\Models\EventDistance;
use App\Models\EventMode;
use App\Models\EventPhase;
use App\Models\EventPrice;
use App\Models\Participant;
use App\Models\Registration;
use App\Models\RegistrationPayment;
use App\Models\ShirtSize;
use App\Models\Waiver;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class RegistroController extends Controller
{
    public function create(): View
    {
        return view('web.registro');
    }

    /**
     * Muestra el formulario con todos los selects inyectados server-side.
     */
    public function showForm(): View
    {
        $clubs = Club::active()->orderBy('name')->get(['id', 'name', 'city']);

        // Evento hardcodeado: IV Copa Laguna de Paca (id=1)
        $eventDistances = EventDistance::active()
            ->where('event_id', 1)
            ->orderBy('distance_meters')
            ->get(['id', 'name', 'distance_meters']);

        $eventModes = EventMode::active()
            ->where('event_id', 1)
            ->orderBy('name')
            ->get(['id', 'name']);

        $shirtSizes = ShirtSize::active()->get(['id', 'code', 'label']);

        // Fases de precios del evento para cálculo dinámico en el cliente
        $eventPhases = EventPhase::where('event_id', 1)
            ->where('is_active', true)
            ->orderBy('order')
            ->get(['id', 'name', 'starts_at', 'ends_at']);

        // Precios pivot: fase + distancia + modalidad
        $eventPrices = EventPrice::whereIn('event_phase_id', $eventPhases->pluck('id'))
            ->get(['id', 'event_phase_id', 'event_distance_id', 'event_mode_id', 'price']);

        return view('web.register', compact(
            'clubs', 'eventDistances', 'eventModes', 'shirtSizes',
            'eventPhases', 'eventPrices'
        ));
    }

    /**
     * Procesa el formulario de inscripción completo.
     * Flujo: Participant → Registration → RegistrationPayment → Waiver
     */
    public function store(StoreRegistrationRequest $request): RedirectResponse
    {
        DB::transaction(function () use ($request) {

            // 1. Buscar o crear el participante por documento (evita duplicados)
            $participant = Participant::firstOrCreate(
                [
                    'document_type'   => $request->document_type,
                    'document_number' => $request->document_number,
                ],
                [
                    'club_id'                  => $request->club_id,
                    'first_name'               => $request->first_name,
                    'last_name'                => $request->last_name,
                    'birthdate'                => $request->birthdate,
                    'gender'                   => $request->gender,
                    'email'                    => $request->email,
                    'phone'                    => $request->phone,
                ]
            );

            // Si el participante ya existe, actualiza datos de contacto
            if (!$participant->wasRecentlyCreated) {
                $participant->update([
                    'club_id'   => $request->club_id,
                    'email'     => $request->email,
                    'phone'     => $request->phone,
                ]);
            }

            // 2. Obtener el precio para calcular amount_paid
            $price = EventPrice::findOrFail($request->event_price_id);

            // 3. Guardar comprobante de pago en storage/app/private/vouchers/ (no accesible desde el navegador)
            $voucherPath = $request->file('voucher')
                ->store('vouchers/' . date('Y/m'), 'local');

            // 4. Crear la inscripción
            $registration = Registration::create([
                'registration_number' => Registration::generateNumber($request->event_id),
                'event_id'            => $request->event_id,
                'participant_id'      => $participant->id,
                'event_distance_id'   => $request->event_distance_id,
                'event_category_id'   => $request->event_category_id,
                'event_mode_id'       => $request->event_mode_id,
                'event_price_id'      => $request->event_price_id,
                'shirt_size_id'       => $request->shirt_size_id,
                'team_id'             => null, // null para modalidad individual
                'status'              => 'reviewing', // pago subido, pendiente de validación
                'amount_paid'         => $price->price,
                'voucher_path'        => $voucherPath,
            ]);

            // 5. Registrar el pago
            RegistrationPayment::create([
                'registration_id' => $registration->id,
                'amount'          => $price->price,
                'payment_method'  => 'bank_transfer', // método por defecto (pago manual)
                'voucher_path'    => $voucherPath,
                'payment_date'    => now()->toDateString(),
                'status'          => 'pending',
            ]);

            // 6. Registrar aceptación del waiver
            Waiver::create([
                'registration_id'    => $registration->id,
                'accepted_digitally' => true,
                'accepted_at'        => now(),
                'ip_address'         => $request->ip(),
            ]);

            // Guardar número de registro en sesión para mostrarlo en la confirmación
            session(['registration_number' => $registration->registration_number]);
        });

        return redirect()->route('registro.confirmacion');
    }

    // ── Endpoints API ──────────────────────────────────────────────────────────

    public function confirmacion(): View
    {
        $number = session('registration_number');

        // Si alguien accede directamente sin pasar por el formulario, lo redirigimos
        if (!$number) {
            abort(redirect()->route('registro.create'));
        }

        return view('web.registration-success', ['registrationNumber' => $number]);
    }

    public function clubs(): JsonResponse
    {
        return response()->json(
            Club::active()->orderBy('name')->get(['id', 'name', 'city'])
        );
    }

    public function eventDistances(Request $request): JsonResponse
    {
        return response()->json(
            EventDistance::active()
                ->where('event_id', 1)
                ->orderBy('distance_meters')
                ->get(['id', 'name', 'distance_meters'])
        );
    }

    public function eventModes(Request $request): JsonResponse
    {
        return response()->json(
            EventMode::active()
                ->where('event_id', 1)
                ->orderBy('name')
                ->get(['id', 'name'])
        );
    }
}
