<!DOCTYPE html>
<html class="dark" lang="es">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Inscripción Recibida — IV Copa Laguna de Paca</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f97415",
                        "navy-overlay": "#0f172a",
                    },
                    fontFamily: { "display": ["Inter", "sans-serif"] }
                }
            }
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
</head>
<body class="font-display antialiased bg-[#0f172a] text-slate-200 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md text-center">

        {{-- Ícono de éxito --}}
        <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-green-500/15 border border-green-500/30">
            <span class="material-symbols-outlined text-5xl text-green-400">check_circle</span>
        </div>

        {{-- Título --}}
        <h1 class="text-2xl font-black text-white mb-2">¡Inscripción recibida!</h1>
        <p class="text-slate-400 text-sm mb-6">
            Tu solicitud ha sido registrada correctamente. Nuestro equipo validará tu comprobante de pago en las próximas horas.
        </p>

        {{-- Número de inscripción --}}
        <div class="mb-6 rounded-xl border border-slate-700 bg-slate-800/60 p-5">
            <p class="text-xs text-slate-400 uppercase tracking-wider mb-1">N° de inscripción</p>
            <p class="text-2xl font-black tracking-widest text-primary">{{ $registrationNumber }}</p>
            <p class="mt-2 text-xs text-slate-500">Guarda este número para consultar el estado de tu registro.</p>
        </div>

        {{-- Pasos siguientes --}}
        <div class="mb-8 rounded-xl border border-slate-700 bg-slate-800/40 p-5 text-left space-y-3">
            <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">¿Qué sigue?</p>

            <div class="flex items-start gap-3">
                <span class="material-symbols-outlined text-cyan-400 mt-0.5 text-lg">schedule</span>
                <p class="text-sm text-slate-300">Revisaremos tu comprobante de pago en un plazo de <strong class="text-white">24–48 horas hábiles</strong>.</p>
            </div>
            <div class="flex items-start gap-3">
                <span class="material-symbols-outlined text-cyan-400 mt-0.5 text-lg">mail</span>
                <p class="text-sm text-slate-300">Recibirás un correo de confirmación cuando tu inscripción sea aprobada.</p>
            </div>
            <div class="flex items-start gap-3">
                <span class="material-symbols-outlined text-cyan-400 mt-0.5 text-lg">assignment</span>
                <p class="text-sm text-slate-300">Recuerda llevar el waiver (exoneración) firmado el día del evento.</p>
            </div>
        </div>

        {{-- Acciones --}}
        <div class="flex flex-col gap-3">
            <a href="{{ route('home') }}"
               class="rounded-xl bg-primary px-6 py-3 text-sm font-bold text-white hover:bg-orange-500 transition-all">
                Volver al inicio
            </a>
            <a href="https://wa.me/51980588656?text=Hola, mi número de inscripción es {{ $registrationNumber }}"
               target="_blank"
               class="rounded-xl border border-slate-600 px-6 py-3 text-sm font-medium text-slate-300 hover:bg-slate-800 hover:text-white transition-all">
                <span class="material-symbols-outlined text-sm align-middle mr-1">chat</span>
                Consultar por WhatsApp
            </a>
        </div>

    </div>

</body>
</html>
