<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>IV Copa Laguna de Paca Registration</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f97415",
                        "background-light": "#f8f7f5",
                        "background-dark": "#23170f",
                        "navy-overlay": "#0f172a",
                        "glass-bg": "rgba(15, 23, 42, 0.6)",
                        "glass-border": "rgba(255, 255, 255, 0.1)",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                    keyframes: {
                        shimmer: {
                            '100%': { transform: 'translateX(100%)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    },
                    animation: {
                        'fade-in-up': 'fadeIn 0.5s ease-out forwards',
                    }
                },
            },
        }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-31M6WJ2267"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-31M6WJ2267');
    </script>
    <style>
        ::-webkit-scrollbar {
            width: 8px
        }

        ::-webkit-scrollbar-track {
            background: #0f172a
        }

        ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 4px
        }

        .glass-card {
            /* background: rgba(30, 41, 59, 0.75); */
            background-color: rgb(10 52 120 / 75%);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5)
        }

        .input-glass {
            background: rgba(15, 23, 42, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.2s ease;
            color: white
        }

        .input-glass:focus {
            background: rgba(15, 23, 42, 0.8);
            border-color: #f97415;
            box-shadow: 0 0 0 1px #f97415;
            outline: none
        }

        .custom-checkbox:checked {
            background-color: #06b6d4;
            border-color: #06b6d4;
            background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuCRXj9TcNKXppZz9fJjGb29Md8pqG71zrrTLCxGs18dkq38j4CyyfVFgOXvjrhFiQ7uUE4qiPIYc2JZ9LJlT3yidcWBy9UjZEmzhi8pkEx3gyZa33to_Hth5v6J39dwogVoWJX4KqlwMlghjkfhmRdkVxHzy6t_gq5iVQebRZM4zMPaIaNr-wl2ahKeYz_rbPxcyAJqtq0OhZngxQ4zLVJFr54bv-aimIdTFyy0YwdAUkHWvFJZuQzyLMIoJC6-87p5aUmPsjSYuHE)
        }

        .custom-radio:checked {
            background-color: #06b6d4;
            border-color: #06b6d4
        }

        select option {
            background-color: #1e293b;
            color: white
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
            opacity: 0.6;
            cursor: pointer;
            background-color: transparent;
        }

        input[type="text"],input[type="date"], input[type="email"], input[type="tel"], select {
            text-transform: uppercase;
            background-color: rgba(15, 23, 42, 0.5);;
        }

        /* ── Club searchable dropdown ─────────────────────────────────── */
        #club-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 50;
            margin-top: 4px;
            background: #1e293b;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 0.5rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            max-height: 200px;
            overflow-y: auto;
        }
        #club-dropdown.open { display: block; }
        #club-dropdown .club-option {
            padding: 8px 12px;
            margin: 2px 4px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.875rem;
            color: #cbd5e1;
            text-transform: none;
        }
        #club-dropdown .club-option:hover,
        #club-dropdown .club-option.highlighted {
            background: rgba(249,116,21,0.15);
            color: #fff;
        }
        #club-dropdown .club-no-results {
            padding: 10px 12px;
            font-size: 0.8rem;
            color: #64748b;
        }
        #club-dropdown::-webkit-scrollbar { width: 4px; }
        #club-dropdown::-webkit-scrollbar-thumb { background: #334155; border-radius: 2px; }
        /* El input de búsqueda no debe aplicar text-transform */
        #club-search { text-transform: none !important; }
    </style>
</head>

<body class="font-display antialiased text-slate-200">
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 bg-cover  bg-no-repeat"
            style="background-image: url('{{ asset('assets/web/images/capi_10_2c.png') }}');">
        </div>
        <div class="absolute inset-0  mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-navy-overlay/50 " style="--tw-gradient-to:rgb(83 89 120 / 46%)"></div>
    </div>
    <div class="relative z-10 flex min-h-screen w-full items-center justify-center p-4 py-8">
        <div class="glass-card w-full max-w-[600px] rounded-2xl overflow-hidden animate-fade-in-up flex flex-col">
            <div class="border-b border-white/5 bg-white/5 px-8 pt-6 pb-4 text-center relative">
                <div class="mb-2 flex justify-center">
                    <!-- <span
                        class="material-symbols-outlined text-4xl text-cyan-400 drop-shadow-[0_0_10px_rgba(34,211,238,0.5)]">water_drop</span> -->
                    <img src="{{ asset('assets/web/images/logo_paca.png') }}" width="120px" alt="">
                </div>
                <!-- <h1 class="text-2xl font-black tracking-tight text-white sm:text-3xl">IV Copa Laguna de Paca</h1> -->
                <p class="mt-1 text-sm font-medium text-cyan-400 uppercase tracking-widest">IV Copa Laguna de Paca</p>
            </div>
            <form method="POST" action="{{ route('registro.store') }}" enctype="multipart/form-data" class="flex flex-col flex-grow relative">
                @csrf
                <input {{ $errors->hasAny(['shirt_size_id','event_distance_id','event_mode_id','voucher','terms']) ? '' : 'checked' }} class="peer/step1 hidden" id="step1" name="step-control" type="radio" />
                <input {{ $errors->hasAny(['shirt_size_id','event_distance_id','event_mode_id','voucher','terms']) ? 'checked' : '' }} class="peer/step2 hidden" id="step2" name="step-control" type="radio" />
                <div class="bg-slate-800/50 h-1.5 w-full relative">
                    <div
                        class="absolute left-0 top-0 h-full bg-cyan-400 shadow-[0_0_10px_rgba(34,211,238,0.5)] transition-all duration-500 ease-in-out w-1/2 peer-checked/step2:w-full">
                    </div>
                </div>
                <div class="px-6 sm:px-8 pt-4 pb-0 flex justify-between items-end">
                    <h2 class="text-lg font-bold text-white flex items-center gap-2">
                        <span
                            class="flex items-center justify-center w-6 h-6 rounded-full bg-cyan-500/20 text-cyan-400 text-xs border border-cyan-500/50 peer-checked/step2:bg-slate-800 peer-checked/step2:text-slate-500 peer-checked/step2:border-slate-700">1</span>
                        <span class="peer-checked/step2:text-slate-500">Datos Personales</span>
                    </h2>
                    <h2 class="text-lg font-bold text-slate-500 peer-checked/step2:text-white flex items-center gap-2">
                        <span
                            class="flex items-center justify-center w-6 h-6 rounded-full bg-slate-800 text-slate-500 text-xs border border-slate-700 peer-checked/step2:bg-cyan-500/20 peer-checked/step2:text-cyan-400 peer-checked/step2:border-cyan-500/50">2</span>
                        <span>Detalles del Evento</span>
                    </h2>
                </div>
                <input type="hidden" name="event_id" value="1" />
                {{-- Calculados dinámicamente por register.js según birthdate y fase activa --}}
                <input type="hidden" id="event-category-id" name="event_category_id" value="{{ old('event_category_id') }}" />
                <input type="hidden" id="event-price-id" name="event_price_id" value="{{ old('event_price_id') }}" />

                {{-- Alerta: inscripción duplicada --}}
                @if($errors->has('document_number') && $errors->first('document_number') === 'duplicate_registration')
                <div class="mx-6 sm:mx-8 mt-4 rounded-xl border border-red-500/40 bg-red-500/10 p-4 flex gap-3">
                    <span class="material-symbols-outlined text-red-400 text-xl shrink-0 mt-0.5">warning</span>
                    <div>
                        <p class="text-sm font-bold text-red-300">Ya estás inscrito en este evento</p>
                        <p class="text-xs text-red-400 mt-1">El documento ingresado ya tiene una inscripción activa para la IV Copa Laguna de Paca. Si tienes alguna duda, contáctanos por WhatsApp.</p>
                        <a href="https://wa.me/51980588656" target="_blank" class="mt-2 inline-flex items-center gap-1 text-xs font-semibold text-red-300 hover:text-red-200 underline">
                            <span class="material-symbols-outlined text-sm">chat</span> Consultar por WhatsApp
                        </a>
                    </div>
                </div>
                @endif

                {{-- Alerta: errores generales del servidor (excepto duplicado) --}}
                @if($errors->any() && $errors->first('document_number') !== 'duplicate_registration')
                <div class="mx-6 sm:mx-8 mt-4 rounded-xl border border-orange-500/40 bg-orange-500/10 p-3 flex gap-2 items-start">
                    <span class="material-symbols-outlined text-orange-400 text-lg shrink-0 mt-0.5">info</span>
                    <p class="text-xs text-orange-300">Revisa los campos marcados en rojo antes de continuar.</p>
                </div>
                @endif
                <div class="p-6 sm:p-8 space-y-5 hidden peer-checked/step1:block animate-fade-in-up">
                    <p class="text-xs text-slate-400 font-medium uppercase tracking-wider mb-2">Datos Personales</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                        <div class="space-y-1.5 sm:col-span-1">
                            <label class="block text-xs font-semibold text-slate-300">Tipo Documento</label>
                            <select id="document-type" name="document_type"
                                    class="input-glass w-full rounded-lg px-3 py-2.5 text-sm outline-none">
                                <option value="DNI" {{ old('document_type') == 'DNI' ? 'selected' : '' }}>DNI</option>
                                <option value="CE" {{ old('document_type') == 'CE' ? 'selected' : '' }}>CE</option>
                                <option value="PASSPORT" {{ old('document_type') == 'PASSPORT' ? 'selected' : '' }}>Pasaporte</option>
                            </select>
                        </div>
                        <div class="space-y-1.5 sm:col-span-2">
                            <label class="block text-xs font-semibold text-slate-300">Número Documento</label>
                            <input id="document-number" name="document_number"
                                class="input-glass w-full rounded-lg px-3 py-2.5 text-sm placeholder-slate-500 outline-none {{ $errors->has('document_number') ? '!border-red-500' : '' }}"
                                placeholder="e.g. 72345678" type="text" value="{{ old('document_number') }}" />
                            <p id="error-document-number" class="mt-1 text-xs text-red-400 {{ ($errors->has('document_number') && $errors->first('document_number') !== 'duplicate_registration') ? '' : 'hidden' }}">
                                @if($errors->has('document_number') && $errors->first('document_number') !== 'duplicate_registration'){{ $errors->first('document_number') }}@endif
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-slate-300">Nombres</label>
                            <input id="first-name" name="first_name"
                                class="input-glass w-full rounded-lg px-3 py-2.5 text-sm placeholder-slate-500 outline-none {{ $errors->has('first_name') ? '!border-red-500' : '' }}"
                                placeholder="e.g. Mateo" type="text" value="{{ old('first_name') }}" />
                            <p id="error-first-name" class="mt-1 text-xs text-red-400 {{ $errors->has('first_name') ? '' : 'hidden' }}">@error('first_name'){{ $message }}@enderror</p>
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-slate-300">Apellidos</label>
                            <input id="last-name" name="last_name"
                                class="input-glass w-full rounded-lg px-3 py-2.5 text-sm placeholder-slate-500 outline-none {{ $errors->has('last_name') ? '!border-red-500' : '' }}"
                                placeholder="e.g. Rossi" type="text" value="{{ old('last_name') }}" />
                            <p id="error-last-name" class="mt-1 text-xs text-red-400 {{ $errors->has('last_name') ? '' : 'hidden' }}">@error('last_name'){{ $message }}@enderror</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-slate-300">Fecha de Nacimiento</label>
                            <input id="birth-date" name="birthdate"
                                class="input-glass w-full rounded-lg px-3 py-2.5 text-sm placeholder-slate-500 outline-none {{ $errors->has('birthdate') ? '!border-red-500' : '' }}"
                                type="date" value="{{ old('birthdate') }}" />
                            <p id="error-birth-date" class="mt-1 text-xs text-red-400 {{ $errors->has('birthdate') ? '' : 'hidden' }}">@error('birthdate'){{ $message }}@enderror</p>
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-slate-300">Género</label>
                            <div class="flex items-center space-x-4 h-[42px]">
                                <label class="flex items-center space-x-2 cursor-pointer group">
                                    <input id="gender-male"
                                        class="custom-radio form-radio h-4 w-4 text-cyan-500 border-slate-500 bg-slate-800 focus:ring-offset-0 focus:ring-0"
                                        name="gender" value="M" type="radio" {{ old('gender') == 'M' ? 'checked' : '' }} />
                                    <span class="text-sm text-slate-400 group-hover:text-white">Masculino</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer group">
                                    <input id="gender-female"
                                        class="custom-radio form-radio h-4 w-4 text-cyan-500 border-slate-500 bg-slate-800 focus:ring-offset-0 focus:ring-0"
                                        name="gender" value="F" type="radio" {{ old('gender') == 'F' ? 'checked' : '' }} />
                                    <span class="text-sm text-slate-400 group-hover:text-white">Femenino</span>
                                </label>
                            </div>
                            <p id="error-gender" class="mt-1 text-xs text-red-400 {{ $errors->has('gender') ? '' : 'hidden' }}">@error('gender'){{ $message }}@enderror</p>
                        </div>
                    </div>

                    {{-- Alerta: edad no permitida (< 12 años) — controlada por JS --}}
                    <div id="alert-age-restriction" class="hidden rounded-xl border border-red-500/40 bg-red-500/10 p-4 flex gap-3">
                        <span class="material-symbols-outlined text-red-400 text-xl shrink-0 mt-0.5">child_care</span>
                        <div>
                            <p class="text-sm font-bold text-red-300">Edad no permitida para este evento</p>
                            <p class="text-xs text-red-400 mt-1">La inscripción está habilitada para participantes de 12 años en adelante. Si tienes alguna duda, contáctanos.</p>
                            <a href="https://wa.me/51980588656" target="_blank" class="mt-2 inline-flex items-center gap-1 text-xs font-semibold text-red-300 hover:text-red-200 underline">
                                <span class="material-symbols-outlined text-sm">chat</span> Consultar por WhatsApp
                            </a>
                        </div>
                    </div>

                    <div class="h-px bg-white/5 my-2"></div>
                    <p class="text-xs text-slate-400 font-medium uppercase tracking-wider mb-2">Datos de Contacto</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-slate-300">Teléfono</label>
                            <div class="relative">
                                <input id="phone" name="phone"
                                    class="input-glass w-full rounded-lg px-3 py-2.5 pl-9 text-sm placeholder-slate-500 outline-none {{ $errors->has('phone') ? '!border-red-500' : '' }}"
                                    placeholder="999 000 000" type="tel" value="{{ old('phone') }}" />
                                <span class="material-symbols-outlined absolute left-2.5 top-2.5 text-slate-500 text-lg">call</span>
                            </div>
                            <p id="error-phone" class="mt-1 text-xs text-red-400 {{ $errors->has('phone') ? '' : 'hidden' }}">@error('phone'){{ $message }}@enderror</p>
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-slate-300">Correo</label>
                            <div class="relative">
                                <input id="email" name="email"
                                    class="input-glass w-full rounded-lg px-3 py-2.5 pl-9 text-sm placeholder-slate-500 outline-none {{ $errors->has('email') ? '!border-red-500' : '' }}"
                                    placeholder="mateo@example.com" type="email" value="{{ old('email') }}" />
                                <span class="material-symbols-outlined absolute left-2.5 top-2.5 text-slate-500 text-lg">mail</span>
                            </div>
                            <p id="error-email" class="mt-1 text-xs text-red-400 {{ $errors->has('email') ? '' : 'hidden' }}">@error('email'){{ $message }}@enderror</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <label
                            class="group relative block w-full cursor-pointer overflow-hidden rounded-xl bg-primary px-5 py-4 text-center font-bold text-white shadow-[0_0_20px_rgba(249,116,21,0.3)] transition-all hover:bg-orange-500 hover:shadow-[0_0_30px_rgba(249,116,21,0.6)] hover:scale-[1.01]"
                            for="step2">
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                Siguiente: Detalles del evento
                                <span
                                    class="material-symbols-outlined text-xl transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </span>
                            <div
                                class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent group-hover:animate-[shimmer_1.5s_infinite]">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="p-6 sm:p-8 space-y-5 hidden peer-checked/step2:block animate-fade-in-up">
                    <p class="text-xs text-slate-400 font-medium uppercase tracking-wider mb-2">Datos Competición</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-slate-300">Club</label>
                            <div class="relative">
                                {{-- Select oculto: mantiene el valor para envío del formulario --}}
                                <select id="clubs" name="club_id" class="hidden">
                                    <option value="">Selecciona un club...</option>
                                    <option value="none" {{ old('club_id') == 'none' ? 'selected' : '' }}>Independiente (sin club)</option>
                                    @foreach($clubs as $club)
                                        <option value="{{ $club->id }}" {{ old('club_id') == $club->id ? 'selected' : '' }}>
                                            {{ $club->name }}
                                        </option>
                                    @endforeach
                                </select>
                                {{-- Input visible con búsqueda integrada --}}
                                <input type="text" id="club-search"
                                    class="input-glass w-full rounded-lg px-3 py-2.5 pr-8 text-sm placeholder-slate-500 outline-none"
                                    placeholder="Buscar club..." autocomplete="off" />
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5 text-slate-400">
                                    <span class="material-symbols-outlined text-lg">expand_more</span>
                                </div>
                                <div id="club-dropdown"></div>
                            </div>
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-slate-300">Talla de Camiseta</label>
                            <div class="relative">
                                <select id="shirt-sizes" name="shirt_size_id"
                                    class="input-glass w-full appearance-none rounded-lg px-3 py-2.5 pr-8 text-sm outline-none">
                                    <option value="" disabled selected>Selecciona talla...</option>
                                    @foreach($shirtSizes as $size)
                                        <option value="{{ $size->id }}" {{ old('shirt_size_id') == $size->id ? 'selected' : '' }}>
                                            {{ $size->label }}
                                        </option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5 text-slate-400">
                                    <span class="material-symbols-outlined text-lg">expand_more</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-slate-300">Distancia</label>
                            <div class="relative">
                                <select id="distances" name="event_distance_id"
                                    class="input-glass w-full appearance-none rounded-lg px-3 py-2.5 pr-8 text-sm outline-none">
                                    <option value="" disabled selected>Selecciona distancia...</option>
                                    @foreach($eventDistances as $eventDistance)
                                        <option value="{{ $eventDistance->id }}" {{ old('event_distance_id') == $eventDistance->id ? 'selected' : '' }}>{{ $eventDistance->name }}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5 text-slate-400">
                                    <span class="material-symbols-outlined text-lg">expand_more</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-slate-300">Modalidad</label>
                            <div class="relative">
                                <select id="modalities" name="event_mode_id"
                                    class="input-glass w-full appearance-none rounded-lg px-3 py-2.5 pr-8 text-sm outline-none">
                                    <option value="" disabled selected>Selecciona modalidad...</option>
                                    @foreach($eventModes as $eventMode)
                                        <option value="{{ $eventMode->id }}" {{ old('event_mode_id') == $eventMode->id ? 'selected' : '' }}>{{ $eventMode->name }}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5 text-slate-400">
                                    <span class="material-symbols-outlined text-lg">expand_more</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Precio calculado dinámicamente por JS (+fase activa + distancia + modalidad) --}}
                    <div id="price-display" class="hidden rounded-xl border border-cyan-500/30 bg-cyan-500/10 px-4 py-3 flex items-center justify-between gap-3">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-cyan-400 text-lg">sell</span>
                            <span class="text-sm text-slate-300">Precio para <span data-phase class="font-semibold text-cyan-300"></span></span>
                        </div>
                        <span data-price class="text-lg font-black text-cyan-300"></span>
                    </div>

                    {{-- Alerta: sin precio configurado para la combinación seleccionada --}}
                    <div id="alert-no-price" class="hidden rounded-xl border border-orange-500/40 bg-orange-500/10 p-3 flex gap-2 items-start">
                        <span class="material-symbols-outlined text-orange-400 text-lg shrink-0 mt-0.5">info</span>
                        <p class="text-xs text-orange-300">No hay un precio disponible para esta combinación. Contacta al organizador.</p>
                    </div>

                    <div class="space-y-1.5">
                        <label class="block text-xs font-semibold text-slate-300">Subir Comprobante de Pago</label>
                        <div
                            class="group relative flex cursor-pointer flex-col items-center justify-center rounded-xl border-2 border-dashed border-slate-600 bg-slate-800/30 px-6 py-6 text-center transition hover:border-cyan-400 hover:bg-slate-800/50">
                            <input accept="image/*" name="voucher" old('voucher') value="{{ old('voucher') }}"
                                class="absolute inset-0 z-10 h-full w-full cursor-pointer opacity-0" type="file" />
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-700 text-slate-400 transition group-hover:bg-cyan-900/30 group-hover:text-cyan-400">
                                <span class="material-symbols-outlined text-xl">cloud_upload</span>
                            </div>
                            <p class="mt-2 text-sm font-medium text-slate-300 group-hover:text-white">Arrastra o haz clic para subir</p>
                            <p class="mt-0.5 text-xs text-slate-500">Máx. 5MB (JPG, PNG, PDF)</p>
                        </div>
                        @error('voucher')
                            <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-start space-x-3 pt-1">
                        <div class="flex h-6 items-center">
                            <input
                                class="custom-checkbox h-4 w-4 rounded border-slate-600 bg-slate-800 text-cyan-500 focus:ring-0 focus:ring-offset-0 cursor-pointer"
                                id="terms" name="terms" value="1" type="checkbox" {{ old('terms') ? 'checked' : '' }} />
                        </div>
                        <div class="text-xs">
                            <label class="font-medium text-slate-300 cursor-pointer" for="terms">Acepto los <a
                                    id="terms-link"
                                    class="text-cyan-400 hover:text-cyan-300 hover:underline" href="#terms-modal">Términos y
                                    Condiciones</a> y declaro que estoy físicamente apto para esta competencia.</label>
                            @error('terms')
                                <p class="mt-1 text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="pt-4 flex gap-3">
                        <label
                            class="w-1/3 cursor-pointer rounded-xl border border-slate-600 bg-transparent px-4 py-4 text-center text-sm font-bold text-slate-300 transition hover:bg-slate-800 hover:text-white hover:border-slate-500"
                            for="step1">
                            Anterior
                        </label>
                        <button type="submit" id="submit-btn"
                            class="group relative w-2/3 overflow-hidden rounded-xl bg-primary px-5 py-4 text-center font-bold text-white shadow-[0_0_20px_rgba(249,116,21,0.3)] transition-all hover:bg-orange-500 hover:shadow-[0_0_30px_rgba(249,116,21,0.6)] hover:scale-[1.01] focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-offset-2 focus:ring-offset-slate-900">
                            {{-- Estado normal --}}
                            <span id="submit-label" class="relative z-10 flex items-center justify-center gap-2">
                                Completar Registro
                                <span class="material-symbols-outlined text-xl">check_circle</span>
                            </span>
                            {{-- Estado cargando (oculto por defecto) --}}
                            <span id="submit-loading" class="hidden relative z-10 flex items-center justify-center gap-2">
                                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                </svg>
                                Enviando...
                            </span>
                            <div
                                class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent group-hover:animate-[shimmer_1.5s_infinite]">
                            </div>
                        </button>
                    </div>
                </div>
            </form>
            <div class="border-t border-white/5 bg-slate-900/40 p-4 text-center">
                <p class="text-xs text-slate-400">Already registered? <a
                        class="font-medium text-cyan-400 hover:text-cyan-300 transition-colors" href="#">Check your
                        status</a></p>
            </div>
        </div>
    </div>

    <script>
    (function () {
        function initClubSearch() {
            const select   = document.getElementById('clubs');
            const search   = document.getElementById('club-search');
            const dropdown = document.getElementById('club-dropdown');
            if (!select || !search || !dropdown) return;

            // Construir lista de opciones desde el select oculto
            const options = Array.from(select.options)
                .filter(o => o.value !== '')
                .map(o => ({ value: o.value, text: o.text.trim() }));

            let highlighted = -1;

            // Pre-rellenar si old() ya tiene un valor (tras error del servidor)
            if (select.value) {
                const match = options.find(o => o.value == select.value);
                if (match) search.value = match.text;
            }

            function renderOptions(list) {
                highlighted = -1;
                dropdown.innerHTML = list.length
                    ? list.map(o =>
                        `<div class="club-option" data-value="${o.value}">${o.text}</div>`
                      ).join('')
                    : '<div class="club-no-results">No se encontró ningún club</div>';
                dropdown.classList.add('open');
            }

            function applyHighlight() {
                dropdown.querySelectorAll('.club-option').forEach((el, i) => {
                    el.classList.toggle('highlighted', i === highlighted);
                    if (i === highlighted) el.scrollIntoView({ block: 'nearest' });
                });
            }

            function pick(value, text) {
                select.value = value;
                search.value = text;
                dropdown.classList.remove('open');
                search.blur();
            }

            // Abrir dropdown al hacer foco
            search.addEventListener('focus', () => {
                const q = search.value.trim().toLowerCase();
                renderOptions(q ? options.filter(o => o.text.toLowerCase().includes(q)) : options);
            });

            // Borrar selección al empezar a escribir de nuevo
            search.addEventListener('input', () => {
                const q = search.value.trim().toLowerCase();
                if (!q) select.value = '';
                renderOptions(q ? options.filter(o => o.text.toLowerCase().includes(q)) : options);
            });

            // Navegación con teclado
            search.addEventListener('keydown', (e) => {
                const items = dropdown.querySelectorAll('.club-option');
                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    highlighted = Math.min(highlighted + 1, items.length - 1);
                    applyHighlight();
                } else if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    highlighted = Math.max(highlighted - 1, 0);
                    applyHighlight();
                } else if (e.key === 'Enter' && highlighted >= 0) {
                    e.preventDefault();
                    const item = items[highlighted];
                    if (item) pick(item.dataset.value, item.textContent.trim());
                } else if (e.key === 'Escape') {
                    dropdown.classList.remove('open');
                    search.blur();
                }
            });

            // Clic en una opción
            dropdown.addEventListener('mousedown', (e) => {
                e.preventDefault();
                const item = e.target.closest('.club-option');
                if (item) pick(item.dataset.value, item.textContent.trim());
            });

            // Cerrar al perder el foco
            search.addEventListener('blur', () => {
                setTimeout(() => {
                    dropdown.classList.remove('open');
                    // Si no se seleccionó nada válido, limpiar
                    if (!select.value) search.value = '';
                }, 200);
            });
        }

        document.addEventListener('DOMContentLoaded', initClubSearch);
    })();
    </script>

    {{-- Datos de fases y precios embebidos como JSON (catalog público, no sensible) --}}
    <script id="aquasport-data" type="application/json">{!! json_encode([
        'phases' => $eventPhases->map(fn($p) => [
            'id'        => $p->id,
            'name'      => $p->name,
            'starts_at' => $p->starts_at->toISOString(),
            'ends_at'   => $p->ends_at->toISOString(),
        ]),
        'prices' => $eventPrices->map(fn($p) => [
            'id'                => $p->id,
            'event_phase_id'    => $p->event_phase_id,
            'event_distance_id' => $p->event_distance_id,
            'event_mode_id'     => $p->event_mode_id,
            'price'             => (float) $p->price,
        ]),
        'categories' => $eventCategories->map(fn($c) => [
            'id'      => $c->id,
            'name'    => $c->name,
            'min_age' => (int) $c->min_age,
            'max_age' => (int) $c->max_age,
        ]),
    ]) !!}</script>

    {{-- ══════════════════════════════════════════════════════
         MODAL: Términos y Condiciones
    ══════════════════════════════════════════════════════ --}}
    <div id="terms-modal"
         role="dialog" aria-modal="true" aria-labelledby="terms-modal-title"
         class="fixed inset-0 z-50 hidden items-center justify-center p-4">

        {{-- Backdrop --}}
        <div id="terms-backdrop" class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>

        {{-- Panel --}}
        <div class="relative z-10 w-full max-w-2xl max-h-[85vh] flex flex-col rounded-2xl"
             style="background-color:rgb(10 52 120/90%);border:1px solid rgba(255,255,255,.1);box-shadow:0 25px 50px -12px rgba(0,0,0,.6)">

            {{-- Header --}}
            <div class="flex items-center justify-between px-6 py-4 border-b border-white/10 shrink-0">
                <div>
                    <h2 id="terms-modal-title" class="text-base font-black text-white">Términos y Condiciones</h2>
                    <p class="text-xs text-cyan-400 uppercase tracking-widest">IV Copa Laguna de Paca 2026</p>
                </div>
                <button id="terms-close"
                        class="flex items-center justify-center w-8 h-8 rounded-lg text-slate-400 hover:text-white hover:bg-white/10 transition"
                        aria-label="Cerrar">
                    <span class="material-symbols-outlined text-xl">close</span>
                </button>
            </div>

            {{-- Cuerpo desplazable --}}
            <div class="overflow-y-auto px-6 py-5 space-y-4 text-sm text-slate-300 leading-relaxed flex-1">

                <p class="text-xs text-slate-500">Última actualización: abril 2026</p>

                <div>
                    <h3 class="text-xs font-bold text-cyan-300 uppercase tracking-wider mb-1">1. Aceptación</h3>
                    <p>Al completar la inscripción, el participante (o su representante legal si es menor) declara haber leído y aceptado íntegramente estos Términos y el Reglamento Oficial del evento.</p>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-cyan-300 uppercase tracking-wider mb-1">2. Requisitos de participación</h3>
                    <ul class="list-disc list-inside space-y-1 pl-1">
                        <li>Mínimo <strong class="text-slate-100">12 años cumplidos</strong> al día del evento.</li>
                        <li>Menores de 18 años deben presentar autorización escrita del padre, madre o tutor.</li>
                        <li>El participante declara encontrarse físicamente apto para la distancia y modalidad elegida.</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-cyan-300 uppercase tracking-wider mb-1">3. Inscripción y pago</h3>
                    <ul class="list-disc list-inside space-y-1 pl-1">
                        <li>La inscripción queda <strong class="text-slate-100">reservada</strong> al enviar el formulario con comprobante.</li>
                        <li>Queda <strong class="text-slate-100">confirmada</strong> una vez el organizador valide el pago (24–48 h hábiles).</li>
                        <li>El precio aplicable es el vigente en la fase activa al momento del pago.</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-cyan-300 uppercase tracking-wider mb-1">4. Cancelaciones y devoluciones</h3>
                    <ul class="list-disc list-inside space-y-1 pl-1">
                        <li><strong class="text-slate-100">Por el participante:</strong> No se realizan devoluciones tras confirmar la inscripción. Se puede ceder a otra persona con aprobación del organizador hasta 7 días antes del evento.</li>
                        <li><strong class="text-slate-100">Por fuerza mayor:</strong> El organizador comunicará alternativas (reprogramación o crédito). No se garantiza devolución de dinero.</li>
                        <li>El organizador puede modificar recorridos, horarios o categorías por seguridad sin derecho a devolución.</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-cyan-300 uppercase tracking-wider mb-1">5. Exoneración de responsabilidad</h3>
                    <p>El participante asume plena responsabilidad por lesiones, accidentes o daños ocurridos durante el evento. La Asociación Club Deportivo Cultural Aqua Sport no sera responsable por accidentes, robos o pérdidas de cualquier naturaleza. El participante declara conocer los riesgos inherentes a la natación en aguas abiertas.</p>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-cyan-300 uppercase tracking-wider mb-1">6. Uso de imagen</h3>
                    <p>El participante autoriza la captura y publicación de su imagen con fines de difusión del evento en redes sociales y medios de comunicación, sin compensación económica. Para no autorizar, deberá comunicarlo por escrito antes del evento.</p>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-cyan-300 uppercase tracking-wider mb-1">7. Protección de datos (Ley N° 29733)</h3>
                    <p>Los datos personales se usarán exclusivamente para la gestión del evento y no serán cedidos a terceros. Para ejercer sus derechos: <a href="mailto:inscripciones@clubaquasport.com" class="text-cyan-400 hover:underline">inscripciones@clubaquasport.com</a></p>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-cyan-300 uppercase tracking-wider mb-1">8. Reglamento</h3>
                    <p>El incumplimiento del Reglamento Oficial puede resultar en descalificación sin reembolso. Las decisiones del jurado son inapelables.</p>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-cyan-300 uppercase tracking-wider mb-1">9. Contacto</h3>
                    <p>
                        <a href="mailto:inscripciones@clubaquasport.com" class="text-cyan-400 hover:underline">inscripciones@clubaquasport.com</a><br>
                        WhatsApp: <a href="https://wa.me/51980588656" target="_blank" class="text-cyan-400 hover:underline">+51 980 588 656</a>
                    </p>
                </div>

            </div>

            {{-- Footer --}}
            <div class="flex items-center justify-between gap-3 px-6 py-4 border-t border-white/10 shrink-0">
                <!-- <a href="{{ route('terminos') }}" target="_blank"
                   class="flex items-center gap-1 text-xs text-slate-400 hover:text-cyan-300 transition">
                    <span class="material-symbols-outlined text-sm">open_in_new</span>
                    Ver página completa
                </a> -->
                <button id="terms-accept"
                        class="rounded-xl bg-primary px-5 py-2.5 text-sm font-bold text-white shadow-[0_0_15px_rgba(249,116,21,0.3)] transition hover:bg-orange-500">
                    Entendido, acepto
                </button>
            </div>

        </div>
    </div>

    <script>
    (function () {
        const modal    = document.getElementById('terms-modal');
        const backdrop = document.getElementById('terms-backdrop');
        const btnClose = document.getElementById('terms-close');
        const btnAccept= document.getElementById('terms-accept');
        const link     = document.getElementById('terms-link');
        const checkbox = document.getElementById('terms');

        function openModal(e) {
            if (e) e.preventDefault();
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }

        if (link)     link.addEventListener('click', openModal);
        if (backdrop) backdrop.addEventListener('click', closeModal);
        if (btnClose) btnClose.addEventListener('click', closeModal);
        if (btnAccept) {
            btnAccept.addEventListener('click', () => {
                if (checkbox) checkbox.checked = true;
                closeModal();
            });
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
        });
    })();
    </script>

    {{-- JS compilado por Vite: reside en resources/js/ y nunca se expone directamente --}}
    @vite('resources/js/register.js')
</body>

</html>