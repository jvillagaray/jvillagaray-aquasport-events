<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>IV Copa Laguna de Paca</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#f97316", // High-contrast Orange
                        secondary: "#06b6d4", // Cyan accents
                        "background-dark": "#0f172a", // Deep Navy
                        "surface-dark": "#1e293b", // Lighter Navy for cards
                        "surface-border": "#334155", // Slate 700 for borders
                        "text-dim": "#94a3b8", // Slate 400
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"],
                    },
                    backgroundImage: {
                        'water-texture': 'url("https://images.unsplash.com/photo-1551244072-5d12893278ab?q=80&w=2832&auto=format&fit=crop")',
                        'map-texture': 'url("https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=2674&auto=format&fit=crop")',
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
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0f172a;
        }

        ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }

        html {
            scroll-behavior: smooth;
        }

        details>summary {
            list-style: none;
        }

        details>summary::-webkit-details-marker {
            display: none;
        }
    </style>

    <style>
    .wa-container {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 9999;
        font-family: Arial, sans-serif;
    }
    .wa-button {
        width: 65px;
        height: 65px;
        background-color: #25d366;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }
    .wa-button:hover {
        transform: scale(1.1);
    }
    .wa-message {
        position: absolute;
        bottom: 80px;
        right: 0;
        width: 220px;
        background: white;
        padding: 15px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        animation: fadeIn 0.5s ease forwards;
        opacity: 0;
    }
    .wa-message p {
        margin: 5px 0;
        font-size: 14px;
        color: #333;
    }
    .wa-close {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
        color: #aaa;
        font-size: 18px;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    </style>

</head>

<body class="bg-background-dark text-white font-display overflow-x-hidden antialiased selection:bg-primary selection:text-white">
    <nav class="sticky top-0 z-50 w-full border-b border-surface-border bg-background-dark/80 backdrop-blur-md">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between">
                <div class="flex items-center gap-2">
                    <!-- <div
                        class="flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-br from-secondary to-blue-600 text-white shadow-lg shadow-cyan-500/20">
                        <span class="material-symbols-outlined" style="font-size: 20px;">waves</span>
                    </div> -->
                    <img src="{{ asset('assets/web/images/logo_paca.png') }}" width="70px" alt="">
                    <span class="text-lg font-bold tracking-tight text-white">IV Copa Laguna de Paca</span>
                </div>
                <div class="hidden md:flex items-center gap-8">
                    <a class="text-sm font-medium text-gray-300 hover:text-white transition-colors"
                        href="#experience">La experiencia</a>
                    <a class="text-sm font-medium text-gray-300 hover:text-white transition-colors"
                        href="#distances">Distancia</a>
                    <a class="text-sm font-medium text-gray-300 hover:text-white transition-colors"
                        href="#prices">Precios</a>
                    <a class="text-sm font-medium text-gray-300 hover:text-white transition-colors"
                        href="#schedule">Programa</a>
                    <a class="text-sm font-medium text-gray-300 hover:text-white transition-colors"
                        href="#kit">Kit</a>
                    
                    <a class="text-sm font-medium text-gray-300 hover:text-white transition-colors" href="#faq">FAQ</a>
                </div>
                <div class="flex items-center gap-4">
                    <a type="button" href="{{ route('registro.create') }}" class="group relative flex h-12 min-w-[160px] items-center justify-center overflow-hidden rounded-lg bg-primary px-6 text-base font-bold text-white shadow-[0_0_20px_rgba(249,115,22,0.3)] transition-all hover:bg-orange-600 hover:scale-105">                                                        
                        Inscríbete Ahora
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <div id="whatsapp-widget" class="wa-container">
  <div class="wa-message">
    <span class="wa-close" onclick="this.parentElement.style.display='none'">×</span>
    <p><strong>AquaSport Support</strong></p>
    <p>¡Hola! 👋 ¿En qué podemos ayudarte hoy?</p>
  </div>
  <a href="https://wa.me/51980588656?text=Hola,%20solicito%20información" class="wa-button" target="_blank">
    <svg width="30" height="30" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
      <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.412 2.503 1.112 3.485l-.733 2.678 2.736-.718a5.722 5.722 0 002.653.654h.002c3.181 0 5.767-2.586 5.768-5.766 0-3.18-2.587-5.765-5.77-5.765zm3.375 8.203c-.147.415-.852.793-1.201.847-.33.05-.762.068-1.218-.08-.276-.09-1.21-.424-2.103-1.217-.714-.633-1.196-1.413-1.336-1.65-.14-.238-.015-.367.105-.487.107-.107.238-.276.357-.415.118-.139.158-.237.237-.396.08-.16.04-.297-.02-.416-.06-.119-.535-1.287-.732-1.762-.192-.462-.387-.398-.535-.406l-.455-.008c-.158 0-.416.06-.634.297-.218.238-.832.812-.832 1.98s.851 2.297.97 2.456c.119.158 1.674 2.557 4.056 3.586.567.246 1.008.391 1.356.502.57.18 1.088.155 1.498.094.457-.069 1.406-.574 1.605-1.128.197-.554.197-1.03.138-1.128-.059-.098-.218-.158-.476-.287z"/>
      <path d="M12 0a12 12 0 1012 12A12.013 12.013 0 0012 0zm0 21.093a9.093 9.093 0 110-18.186 9.093 9.093 0 010 18.186z"/>
    </svg>
  </a>
</div>
    
    <section class="relative flex min-h-[90vh] w-full flex-col justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 overflow-hidden">
            
            <iframe 
                allow="autoplay; encrypted-media" 
                class="absolute top-1/2 left-1/2 min-w-full min-h-full w-[150%] h-[150%] -translate-x-1/2 -translate-y-1/2 object-cover opacity-50 pointer-events-none" 
                frameborder="0" 
                src="https://www.youtube.com/embed/nRmWQY-v1nk?autoplay=1&amp;mute=1&amp;controls=0&amp;loop=1&amp;playlist=nRmWQY-v1nk&amp;playsinline=1&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;disablekb=1" 
                tabindex="-1" 
                referrerpolicy="strict-origin-when-cross-origin"
                title="Background Video">
            </iframe>
            <div class="absolute inset-0 bg-gradient-to-t  via-background-dark/50 to-transparent">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-background-dark/80 to-transparent"></div>
        </div>
        <div class="relative z-10 mx-auto w-full max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <div class="mb-6 h-10 inline-flex items-center gap-2 rounded-full border border-secondary/30 bg-secondary/10 px-3 py-1 text-xs font-semibold text-secondary backdrop-blur-sm">
                    <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                    6 Junio, 2026 • La Náutica – Laguna de Paca, Jauja, Perú
                </div>
                <h1 class="mb-8 text-5xl font-black leading-[1.1] tracking-tight text-white sm:text-6xl lg:text-7xl">
                    La Leyenda de Paca no se cuenta…<br />
                    SE NADA
                    <!-- <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">Solo quienes creen en la leyenda cruzan la meta.
                    </span> -->
                </h1>                
                <div class="mb-10 flex flex-wrap gap-3 sm:gap-6" id="countdown-container">
                    <div
                        class="group relative flex min-w-[80px] flex-col items-center justify-center overflow-hidden rounded-2xl border border-white/10 bg-surface-dark/40 px-3 py-3 shadow-[0_0_20px_rgba(6,182,212,0.1)] backdrop-blur-md transition-all hover:border-secondary/30 hover:shadow-[0_0_25px_rgba(6,182,212,0.25)] sm:min-w-[100px] sm:px-4 sm:py-4">
                        <span id="countdown-days"
                            class="text-3xl font-black text-secondary drop-shadow-[0_0_8px_rgba(6,182,212,0.6)] sm:text-4xl">0</span>
                        <span
                            class="mt-1 text-[10px] font-bold uppercase tracking-widest text-text-dim sm:text-xs">Días</span>
                        <div
                            class="absolute -right-4 -top-4 h-16 w-16 rounded-full bg-secondary/10 blur-xl transition-all group-hover:bg-secondary/20">
                        </div>
                    </div>
                    <div
                        class="group relative flex min-w-[80px] flex-col items-center justify-center overflow-hidden rounded-2xl border border-white/10 bg-surface-dark/40 px-3 py-3 shadow-[0_0_20px_rgba(6,182,212,0.1)] backdrop-blur-md transition-all hover:border-secondary/30 hover:shadow-[0_0_25px_rgba(6,182,212,0.25)] sm:min-w-[100px] sm:px-4 sm:py-4">
                        <span id="countdown-hours"
                            class="text-3xl font-black text-secondary drop-shadow-[0_0_8px_rgba(6,182,212,0.6)] sm:text-4xl">0</span>
                        <span
                            class="mt-1 text-[10px] font-bold uppercase tracking-widest text-text-dim sm:text-xs">Horas</span>
                        <div
                            class="absolute -right-4 -top-4 h-16 w-16 rounded-full bg-secondary/10 blur-xl transition-all group-hover:bg-secondary/20">
                        </div>
                    </div>
                    <div
                        class="group relative flex min-w-[80px] flex-col items-center justify-center overflow-hidden rounded-2xl border border-white/10 bg-surface-dark/40 px-3 py-3 shadow-[0_0_20px_rgba(6,182,212,0.1)] backdrop-blur-md transition-all hover:border-secondary/30 hover:shadow-[0_0_25px_rgba(6,182,212,0.25)] sm:min-w-[100px] sm:px-4 sm:py-4">
                        <span id="countdown-minutes"
                            class="text-3xl font-black text-secondary drop-shadow-[0_0_8px_rgba(6,182,212,0.6)] sm:text-4xl">0</span>
                        <span
                            class="mt-1 text-[10px] font-bold uppercase tracking-widest text-text-dim sm:text-xs">Minutos</span>
                        <div
                            class="absolute -right-4 -top-4 h-16 w-16 rounded-full bg-secondary/10 blur-xl transition-all group-hover:bg-secondary/20">
                        </div>
                    </div>
                    <div
                        class="group relative flex min-w-[80px] flex-col items-center justify-center overflow-hidden rounded-2xl border border-white/10 bg-surface-dark/40 px-3 py-3 shadow-[0_0_20px_rgba(6,182,212,0.1)] backdrop-blur-md transition-all hover:border-secondary/30 hover:shadow-[0_0_25px_rgba(6,182,212,0.25)] sm:min-w-[100px] sm:px-4 sm:py-4">
                        <span id="countdown-seconds"
                            class="text-3xl font-black text-secondary drop-shadow-[0_0_8px_rgba(6,182,212,0.6)] sm:text-4xl">0</span>
                        <span
                            class="mt-1 text-[10px] font-bold uppercase tracking-widest text-text-dim sm:text-xs">Segundos</span>
                        <div
                            class="absolute -right-4 -top-4 h-16 w-16 rounded-full bg-secondary/10 blur-xl transition-all group-hover:bg-secondary/20">
                        </div>
                    </div>
                </div>
                <p class="mb-10 max-w-xl text-lg text-gray-300 sm:text-xl">
                    No todos nadan en Paca…
                    solo aquellos que quieren ser parte de la leyenda
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('registro.create') }}" class="group relative flex h-12 min-w-[160px] items-center justify-center overflow-hidden rounded-lg bg-primary px-6 text-base font-bold text-white shadow-[0_0_20px_rgba(249,115,22,0.3)] transition-all hover:bg-orange-600 hover:scale-105">
                        <span class="relative z-10">Inscríbete Ahora</span>
                        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-orange-600 to-orange-500 opacity-0 transition-opacity group-hover:opacity-100"></div>
                    </a>
                    <button  class="flex h-12 min-w-[160px] items-center justify-center gap-2 rounded-lg border border-surface-border bg-surface-dark/50 px-6 text-base font-bold text-white backdrop-blur-sm transition-all hover:bg-surface-dark hover:border-gray-400">
                        <span class="material-symbols-outlined">play_arrow</span>
                        Ver Video
                    </button>
                </div>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce text-gray-500">
            <span class="material-symbols-outlined text-4xl">keyboard_arrow_down</span>
        </div>
    </section>

    <div class="border-y border-surface-border bg-surface-dark/30 py-8">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-center gap-4 px-4 text-center sm:flex-row sm:justify-between sm:px-6 lg:px-8">
            <span class="text-sm font-semibold uppercase tracking-wider text-text-dim">Organizador del Evento</span>
            <div class="flex items-center gap-3 opacity-90">
                <!-- <div class="flex h-10 w-10 items-center justify-center rounded bg-white/10">
                    <span class="material-symbols-outlined text-white">water_full</span>
                </div>
                <span class="text-xl font-bold tracking-tight text-white">CLUB AQUA SPORT</span> -->
                <img src="{{ asset('assets/web/images/logo.png') }}" alt="CLUB AQUA SPORT">
            </div>
            <div class="hidden sm:block w-32"></div>
        </div>
    </div>

    <section class="py-24 bg-background-dark relative overflow-hidden" id="experience">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 h-[500px] w-[500px] rounded-full bg-secondary/5 blur-[100px]">
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mb-16 md:text-center max-w-3xl md:mx-auto">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">La Experiencia</h2>
                <p class="mt-4 text-lg text-text-dim">
                    Aquí no basta con nadar. El agua exige carácter, silencio interior y una voluntad que no se quiebra.
                </p>
            </div>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div
                    class="group relative overflow-hidden rounded-2xl border border-surface-border bg-surface-dark p-8 transition-all hover:border-secondary/50 hover:shadow-[0_0_30px_rgba(6,182,212,0.1)]">
                    <div
                        class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-xl bg-surface-dark border border-surface-border shadow-inner">
                        <span class="material-symbols-outlined text-3xl text-secondary">landscape</span>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-white">Desafío de Altitud</h3>
                    <p class="mb-4 text-3xl font-black tracking-tight text-white">3,418 <span
                            class="text-base font-black tracking-tight text-white ">msnm</span></p>
                    <p class="text-sm leading-relaxed text-text-dim">
                        El aire se vuelve escaso, la voluntad se vuelve infinita.
                        Un reto reservado para quienes se atreven a ir más allá.
                    </p>
                    <div
                        class="absolute bottom-0 right-0 h-32 w-32 translate-x-8 translate-y-8 rounded-full bg-secondary/10 blur-2xl transition-transform group-hover:scale-150">
                    </div>
                </div>
                <div
                    class="group relative overflow-hidden rounded-2xl border border-surface-border bg-surface-dark p-8 transition-all hover:border-secondary/50 hover:shadow-[0_0_30px_rgba(6,182,212,0.1)]">
                    <div
                        class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-xl bg-surface-dark border border-surface-border shadow-inner">
                        <span class="material-symbols-outlined text-3xl text-secondary">thermostat</span>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-white">Temperatura del Agua</h3>
                    <p class="mb-4 text-3xl font-black tracking-tight text-white">14°C - 16°C</p>
                    <p class="text-sm leading-relaxed text-text-dim">
                        El frío despierta los sentidos. La adaptación es clave y el wetsuit acompaña el desafío para una experiencia segura.
                    </p>
                    <div
                        class="absolute bottom-0 right-0 h-32 w-32 translate-x-8 translate-y-8 rounded-full bg-secondary/10 blur-2xl transition-transform group-hover:scale-150">
                    </div>
                </div>
                <div
                    class="group relative overflow-hidden rounded-2xl border border-surface-border bg-surface-dark p-8 transition-all hover:border-secondary/50 hover:shadow-[0_0_30px_rgba(6,182,212,0.1)]">
                    <div
                        class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-xl bg-surface-dark border border-surface-border shadow-inner">
                        <span class="material-symbols-outlined text-3xl text-secondary">location_on</span>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-white">Ubicación Mística</h3>
                    <p class="mb-4 text-3xl font-black tracking-tight text-white">Jauja, Perú</p>
                    <p class="text-sm leading-relaxed text-text-dim">
                        Un escenario natural donde el agua, la historia y la leyenda se encuentran.
                    </p>
                    <div
                        class="absolute bottom-0 right-0 h-32 w-32 translate-x-8 translate-y-8 rounded-full bg-secondary/10 blur-2xl transition-transform group-hover:scale-150">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-surface-dark/20" id="distances">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-16 md:text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Elige tu Distancia</h2>
                <p class="mt-4 text-lg text-text-dim">Modalidades y categorías diseñadas para todos los niveles de nadadores </p>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                <div class="relative flex flex-col rounded-2xl border border-primary/50 bg-background-dark p-8 shadow-[0_0_40px_rgba(249,115,22,0.1)] transform md:-translate-y-4 md:scale-105 z-10">
                    <div class="mb-4">
                        <h3 class="text-3xl font-bold text-white">1.5 Kilómetros</h3>                                                       
                    </div>
                    <br>
                    <p class="text-sm font-bold  tracking-widest text-white mb-2"> Modalidad</p>                                          
                    <div class="mb-6 mt-1 rounded-xl  border-surface-border/50">
                        <div class="">
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">Con Aletas</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">Sin Aletas</span>
                        </div>
                    </div>                    
                    <p class="text-sm  font-bold  tracking-widest text-white mb-2"> Categoría Promocional</p>
                    <div class="mb-6 mt-1 rounded-xl  border-surface-border/50">                        
                        <div class="grid grid-cols-4 gap-3">
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20"> 12-15</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20"> 16-19</span>                        
                        </div>
                    </div>
                    <p class="text-sm  font-bold  tracking-widest text-white mb-2"> Categoría Master</p>
                    <div class="mb-6 mt-1 rounded-xl  border-surface-border/50">                        
                        <div class="grid grid-cols-4 gap-3">                        
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">20-29</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">30-39</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">40-49</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">50-59</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">60-69</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">70+</span>
                        </div>
                    </div>                    
                </div>
                <div class="relative flex flex-col rounded-2xl border border-primary/50 bg-background-dark p-8 shadow-[0_0_40px_rgba(249,115,22,0.1)] transform md:-translate-y-4 md:scale-105 z-10">
                    <!-- <div class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-full bg-primary px-4 py-1 text-xs font-bold uppercase tracking-wide text-white shadow-lg">
                        Most Popular
                    </div> -->
                    <div class="mb-4">
                        <h3 class="text-3xl font-bold text-white">3 Kilómetros</h3>                        
                    </div>
                    <br>
                    <p class="text-sm font-bold  tracking-widest text-white mb-2"> Modalidad</p>                                          
                    <div class="mb-6 mt-1 rounded-xl  border-surface-border/50">
                        <div class="">
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">Con Aletas</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">Sin Aletas</span>
                        </div>
                    </div>                    
                    <p class="text-sm  font-bold  tracking-widest text-white mb-2"> Categoría Promocional</p>
                    <div class="mb-6 mt-1 rounded-xl  border-surface-border/50">                        
                        <div class="grid grid-cols-4 gap-3">
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20"> 12-15</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20"> 16-19</span>                        
                        </div>
                    </div>
                    <p class="text-sm  font-bold  tracking-widest text-white mb-2"> Categoría Master</p>
                    <div class="mb-6 mt-1 rounded-xl  border-surface-border/50">                        
                        <div class="grid grid-cols-4 gap-3">                        
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">20-29</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">30-39</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">40-49</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">50-59</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">60-69</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">70+</span>
                        </div>
                    </div>  
                </div>
                <div class="relative flex flex-col rounded-2xl border border-primary/50 bg-background-dark p-8 shadow-[0_0_40px_rgba(249,115,22,0.1)] transform md:-translate-y-4 md:scale-105 z-10">
                    <div class="mb-4">
                        <h3 class="text-3xl font-bold text-white">6 Kilómetros</h3>
                    </div>
                    <br>
                    <p class="text-sm font-bold  tracking-widest text-white mb-2"> Modalidad</p>                                          
                    <div class="mb-6 mt-1 rounded-xl  border-surface-border/50">
                        <div class="">
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">Con Aletas</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">Sin Aletas</span>
                        </div>
                    </div>  
                    <p class="text-sm  font-bold  tracking-widest text-white mb-2"> Categoría Master</p>
                    <div class="mb-6 mt-1 rounded-xl  border-surface-border/50">                        
                        <div class="grid grid-cols-4 gap-3">                        
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">20-29</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">30-39</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">40-49</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">50-59</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">60-69</span>
                            <span class="px-2 py-1 rounded-md bg-secondary/10 text-secondary text-sm font-bold border border-secondary/20">70+</span>
                        </div>
                    </div>  
                </div>
            </div>

            <p class="mt-4 text-sm text-text-dim italic">* Las Edades se calculan al 31 de diciembre del presente año.</p>

            <div class="mb-16 md:text-center mt-16">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Circuito</h2>                
            </div>

            <div class="grid gap-8 md:grid-cols-3 mt-16">                   
                <div class="flex flex-col gap-4">
                    <div class="order-1 lg:order-2 h-[500px] w-full overflow-hidden rounded-2xl bg-surface-dark relative border border-surface-border group">
                        <img alt="Stylized dark map view of a lake area"
                            class="h-full w-full object-fill transition-transform duration-700 group-hover:scale-105 opacity-80"
                            data-location="Distancia 1.5K"
                            src="{{ asset('assets/web/images/circuitos/1_5k.jpg') }}" />                                                        
                    </div>

                </div>
                <div class="flex flex-col gap-4">
                    <div class="order-1 lg:order-2 h-[500px] w-full overflow-hidden rounded-2xl bg-surface-dark relative border border-surface-border group">
                        <img alt="Stylized dark map view of a lake area"
                            class="h-full w-full object-fill transition-transform duration-700 group-hover:scale-105 opacity-80"
                            data-location="Distancia 3K"
                            src="{{ asset('assets/web/images/circuitos/3k.jpg') }}" />                                                        
                    </div>

                </div>
                <div class="flex flex-col gap-4">
                    <div class="order-1 lg:order-2 h-[500px] w-full overflow-hidden rounded-2xl bg-surface-dark relative border border-surface-border group">
                        <img alt="Stylized dark map view of a lake area"
                            class="h-full w-full object-fill transition-transform duration-700 group-hover:scale-105 opacity-80"
                            data-location="Distancia 6K"
                            src="{{ asset('assets/web/images/circuitos/6k.jpg') }}" />                                                        
                    </div>

                </div>                
            </div>
        </div>
    </section>

    <section class="py-16 bg-surface-dark/20" id="prices">
        <div class="pt-12 border-t border-surface-border/30 relative max-w-5xl mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold text-white">Precios</h3>
                <p class="mt-4 text-lg text-text-dim">La inscripción se realizará en 3 fases y hasta completar el <b>cupón límite de inscripción</b></p>
            </div>
            <div class="relative">
                <div class="hidden md:block absolute top-[14px] left-[16%] right-[16%] h-0.5 bg-surface-border z-0">
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="relative flex flex-col items-center group">
                        <div
                            class="hidden md:flex items-center justify-center w-8 h-8 rounded-full bg-secondary border-4 border-background-dark z-10 mb-8 shadow-[0_0_15px_rgba(6,182,212,0.6)]">
                        </div>
                        <div
                            class="w-full rounded-xl border-primary/50 bg-background-dark border  p-6 relative  transition-all shadow-lg shadow-[0_0_40px_rgba(249,115,22,0.1)] ">
                            <!-- relative flex flex-col rounded-2xl border border-primary/50 bg-background-dark p-8 shadow-[0_0_40px_rgba(249,115,22,0.1)] transform md:-translate-y-4 md:scale-105 z-10 -->
                            <div
                                class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 bg-secondary text-background-dark text-xs font-black uppercase tracking-wider rounded-full whitespace-nowrap shadow-md">
                                del 12 de marzo al 11 de abril
                            </div>
                            <h4 class="text-xl font-bold text-white text-center mt-3 mb-6">Fase 1</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-sm border-b border-white/5 pb-2">
                                    <span class="text-white font-bold text-lg">1.5 Kilómentros</span>
                                    <span class="text-white text-lg font-bold">S/ 150.00</span>
                                </div>
                                <div class="flex justify-between items-center text-sm border-b border-white/5 pb-2">
                                    <span class="text-white font-bold text-lg">3 Kilómentros</span>
                                    <span class="text-white font-bold text-lg">S/ 200.00</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-white font-bold text-lg">6 Kilómentros</span>
                                    <span class="text-white font-bold text-lg">S/ 250.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative flex flex-col items-center group opacity-60  transition-opacity">
                        <div
                            class="hidden md:flex items-center justify-center w-8 h-8 rounded-full bg-surface-border border-4 border-background-dark z-10 mb-8">
                        </div>
                        <div
                            class="w-full bg-background-dark border border-surface-border rounded-xl p-6 relative ">
                            <div
                                class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 bg-surface-border text-gray-300 text-xs font-bold uppercase tracking-wider rounded-full whitespace-nowrap shadow-md">
                                del 12 de abril al 2 de mayo
                            </div>
                            <h4 class="text-xl font-bold text-white text-center mt-3 mb-6">Fase 2</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-sm border-b border-white/5 pb-2">
                                    <span class="text-gray-400 text-lg">1.5 Kilómentros</span>
                                    <span class="text-white font-bold text-lg">S/ 180.00</span>
                                </div>
                                <div class="flex justify-between items-center text-sm border-b border-white/5 pb-2">
                                    <span class="text-gray-400 text-lg">3 Kilómentros</span>
                                    <span class="text-white font-bold text-lg">S/ 230.00</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-400 text-lg">6 Kilómentros</span>
                                    <span class="text-white font-bold text-lg">S/ 280.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative flex flex-col items-center group opacity-60  transition-opacity">
                        <div
                            class="hidden md:flex items-center justify-center w-8 h-8 rounded-full bg-surface-border border-4 border-background-dark z-10 mb-8">
                        </div>
                        <div
                            class="w-full bg-background-dark border border-surface-border rounded-xl p-6 relative ">
                            <div
                                class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 bg-surface-border text-gray-300 text-xs font-bold uppercase tracking-wider rounded-full whitespace-nowrap shadow-md">
                                del 3 de mayo al 24 de mayo
                            </div>
                            <h4 class="text-xl font-bold text-white text-center mt-3 mb-6">Fase 3</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-sm border-b border-white/5 pb-2">
                                    <span class="text-gray-400 text-lg">1.5 Kilómentros</span>
                                    <span class="text-white font-bold text-lg">S/ 210.00</span>
                                </div>
                                <div class="flex justify-between items-center text-sm border-b border-white/5 pb-2">
                                    <span class="text-gray-400 text-lg">3 Kilómentros</span>
                                    <span class="text-white font-bold text-lg">S/ 260.00</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-400  text-lg">6 Kilómentros</span>
                                    <span class="text-white font-bold text-lg">S/ 310.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        <div class="mt-24 pt-16 border-t border-surface-border/30 max-w-7xl mx-auto px-4">
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">¿Cómo inscribirme?</h2>
                <p class="mt-4 text-lg text-text-dim">Las inscripciones van del 20 de marzo al 29 de mayo de 2026. <br>Para inscribirte puedes hacerlo de la siguiente manera</p>
            </div>
            <div class="grid gap-6 md:grid-cols-3">
                
                    <!-- Step 1: Banl Details -->
                <div class="flex flex-col rounded-2xl border border-surface-border bg-surface-dark/40 p-8 backdrop-blur-md">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-secondary/20 text-secondary font-black text-xl border border-secondary/30">
                        1
                    </div>
                    <h3 class="mb-4 text-xl font-bold text-white">Realizar el pago</h3>
                    <p class="text-sm leading-relaxed text-text-dim">
                        <span class="material-symbols-outlined text-secondary text-[15px]">arrow_forward_ios</span> Depositar a el N° cuenta a nombre de:
                    </p>
                    <p class="mt-3 text-sm  leading-relaxed text-white">Asociación Club Deportivo Cultural Aqua Sport
                    </p>                        
                    <div class="flex items-center gap-4 mt-4">
                        <img class="img-fluid border-surface-border/30 rounded-lg"  src="{{ asset('assets/web/images/bcp.webp') }}" width="80" alt="">
                        <div>
                            <p class="text-sm  text-text-dim">N° de cuenta</p>
                            <p class="text-sm font-bold tracking-widest text-white">193-2671168-0-93</p>
                            <i class="copy" ></i> 
                            <p class="mt-2 text-sm text-text-dim">N° de cuenta interbancaria</p>
                            <p class="text-sm font-bold tracking-widest text-white">002-19300267116809319</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <img class="img-fluid border-surface-border/30 rounded-lg" src="{{ asset('assets/web/images/bbva.webp') }}" width="80" alt="">
                        <div>
                            <p class="text-sm  text-text-dim">N° de cuenta</p>
                            <p class="text-sm font-bold tracking-widest text-white">0011 0284 0100033580</p> 
                            <p class="mt-2 text-sm text-text-dim">N° de cuenta interbancaria</p>
                            <p class="text-sm font-bold tracking-widest text-white">011 284 000100033580 70</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <img class="img-fluid border-surface-border/30 rounded-lg" src="{{ asset('assets/web/images/yape_plin.png') }}" width="80" alt="">
                        <div>
                            <p class="text-sm  text-text-dim">Yape/Plin</p>
                            <p class="text-sm  text-text-dim">Edith Hellen Vadillo Dionicio</p>
                            <p class="text-sm font-bold tracking-widest text-white">980 579 173</p> 
                            
                        </div>
                    </div>
                </div>
                <!-- Step 2: Form -->
                <div class="flex flex-col rounded-2xl border border-surface-border bg-surface-dark/40 p-8 backdrop-blur-md">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-secondary/20 text-secondary font-black text-xl border border-secondary/30">
                        2
                    </div>
                    <h3 class="mb-4 text-xl font-bold text-white">Formulario de inscripción</h3>
                    <p class="text-sm leading-relaxed text-text-dim">
                        <span class="material-symbols-outlined text-secondary text-[15px]">arrow_forward_ios</span> Ingresa tus datos el formulario de inscripción y adjuntando el comprobante de pago.                             
                    </p>
                    <p class="text-sm  mt-3 leading-relaxed text-text-dim">
                        <span class="material-symbols-outlined text-secondary text-[15px]">arrow_forward_ios</span> Selecciona la distancia y modalidad en la que participaras.                             
                    </p>
                    <p class="text-sm mt-3  leading-relaxed text-text-dim">
                        <span class="material-symbols-outlined text-secondary text-[15px]">arrow_forward_ios</span> Carga tu comprobante de pago.                             
                    </p>
                    <p  class="text-sm mt-3 leading-relaxed text-text-dim">
                        <span class="material-symbols-outlined text-secondary text-[15px]">arrow_forward_ios</span> Descargar y firmar el formulario de exención de responsabilidad el cual debera ser entregado el mismo día del evento durante el marcaje.
                    </p>
                    <a href="{{ route('registro.create') }}" class="rounded-lg mt-8 bg-primary px-5 h-12 py-2 text-sm font-bold text-white shadow-[0_0_20px_rgba(249,115,22,0.3)] hover:bg-orange-600 hover:shadow-[0_0_25px_rgba(249,115,22,0.5)] transition-all transform hover:-translate-y-0.5 flex items-center justify-center">
                        Inscríbete Ahora
                    </a>
                </div>
                <!-- Step 3: Confirmation -->
                <div class="flex flex-col rounded-2xl border border-surface-border bg-surface-dark/40 p-8 backdrop-blur-md">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-secondary/20 text-secondary font-black text-xl border border-secondary/30">
                        3
                    </div>
                    <h3 class="mb-4 text-xl font-bold text-white">Validación de inscripción</h3>
                    <p class="text-sm leading-relaxed text-text-dim">                            
                        <span class="material-symbols-outlined text-secondary text-[15px]">arrow_forward_ios</span> Una vez que su registro esté completo y validado, se le enviará una confirmación a la dirección de correo electrónico que proporcionó.
                    </p>
                    <p class="text-sm mt-3 leading-relaxed text-text-dim">                            
                        <span class="material-symbols-outlined text-secondary text-[15px]">arrow_forward_ios</span> El costo de la inscripción es personal e intransferible.
                    </p>
                </div>
                <!-- Inquiry Card -->
                <!-- <div
                    class="flex flex-col justify-center rounded-2xl border border-primary/30 bg-primary/5 p-8 backdrop-blur-md">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/20 text-primary">
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Have Questions?</h3>
                    <p class="text-sm text-gray-300">
                        For inquiries, please write to the following email address: <br />
                        <span class="font-bold text-primary">xxxxxxx@gmail.com</span>
                    </p>
                </div> -->
            </div>
        </div>
    </section>

    <section class="py-24 bg-surface-dark/30 relative" id="schedule">
        <div class="absolute inset-0 z-0 opacity-10">
            <div
                class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_bottom_left,_var(--tw-gradient-stops))] from-blue-900/40 via-transparent to-transparent">
            </div>
        </div>
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mb-12 text-center">
                <!-- <span class="mb-3 inline-block text-sm font-bold uppercase tracking-wider text-primary">Cronología del evento</span> -->
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-4xl">Programa</h2>
                <p class="mt-4 text-lg text-text-dim">
                    Todas las actividades se realizan en el área principal del evento.
                </p>
            </div>
            <div class="overflow-hidden rounded-2xl border border-surface-border shadow-2xl bg-surface-dark">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[600px] text-left border-collapse">
                        <thead>
                            <tr class="bg-background-dark/80 text-white border-b border-surface-border">
                                <th class="py-5 px-6 font-bold uppercase tracking-wider text-sm w-1/4">Hora</th>
                                <th class="py-5 px-6 font-bold uppercase tracking-wider text-sm w-2/4">Actividad</th>
                                <th class="py-5 px-6 font-bold uppercase tracking-wider text-sm w-1/4">Ubicación</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-border/50 text-gray-300">
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="py-4 px-6 font-bold text-secondary font-mono text-lg">7:30 AM <br> 8:45 AM</td>
                                <td class="py-4 px-6 font-medium text-white group-hover:text-secondary transition-colors">
                                    Entrega de kits, verificación de inscripción y marcación oficial de nadadores
                                </td>
                                <td class="py-4 px-6 text-sm text-text-dim flex items-center gap-1">
                                    <span class="material-symbols-outlined text-base">pin_drop</span> Mesa Control
                                </td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="py-4 px-6 font-bold text-secondary font-mono text-lg">8:50 AM</td>
                                <td class="py-4 px-6 font-medium text-white group-hover:text-secondary transition-colors">
                                    Cierre de cámara de llamadas 6K
                                </td>
                                <td class="py-4 px-6 text-sm text-text-dim flex items-center gap-1">
                                    <span class="material-symbols-outlined text-base">pin_drop</span> Mesa Control
                                </td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="py-4 px-6 font-bold text-secondary font-mono text-lg">9:00 AM</td>
                                <td class="py-4 px-6 font-medium text-white group-hover:text-secondary transition-colors">
                                    Charla técnica obligatoria</td>
                                <td class="py-4 px-6 text-sm text-text-dim flex items-center gap-1"><span
                                        class="material-symbols-outlined text-base">pin_drop</span> Campus</td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors border-l-4 border-l-primary/60">
                                <td class="py-4 px-6 font-bold text-secondary font-mono text-lg">9:30 AM</td>
                                <td class="py-4 px-6 font-medium text-white group-hover:text-secondary transition-colors">Salida 1.5 km con aletas</td>
                                <td class="py-4 px-6 text-sm text-text-dim flex items-center gap-1"><span
                                        class="material-symbols-outlined text-base">flag</span> Boya Partida</td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors border-l-4 border-l-transparent hover:border-l-secondary/60">
                                <td class="py-4 px-6 font-bold text-secondary font-mono text-lg">9:35 AM </td>
                                <td
                                    class="py-4 px-6 font-medium text-white group-hover:text-secondary transition-colors">Salida 1.5 km sin aletas</td>
                                <td class="py-4 px-6 text-sm text-text-dim flex items-center gap-1"><span
                                        class="material-symbols-outlined text-base">flag</span> Boya Partida</td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors border-l-4 border-l-transparent hover:border-l-secondary/60">
                                <td class="py-4 px-6 font-bold text-secondary font-mono text-lg">9:45 AM</td>
                                <td
                                    class="py-4 px-6 font-medium text-white group-hover:text-secondary transition-colors">Salida 3 km con aletas</td>
                                <td class="py-4 px-6 text-sm text-text-dim flex items-center gap-1"><span
                                        class="material-symbols-outlined text-base">flag</span> Boya Partida</td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="py-4 px-6 font-bold text-secondary font-mono text-lg">9:50 AM</td>
                                <td
                                    class="py-4 px-6 font-medium text-white group-hover:text-secondary transition-colors">Salida 3 km sin aletas</td>
                                <td class="py-4 px-6 text-sm text-text-dim flex items-center gap-1"><span
                                        class="material-symbols-outlined text-base">flag</span> Boya Partida</td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="py-4 px-6 font-bold text-secondary font-mono text-lg">9:55 AM</td>
                                <td
                                    class="py-4 px-6 font-medium text-white group-hover:text-secondary transition-colors">Salida 6 km con aletas</td>
                                <td class="py-4 px-6 text-sm text-text-dim flex items-center gap-1"><span
                                        class="material-symbols-outlined text-base">flag</span> Boya Partida</td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="py-4 px-6 font-bold text-secondary font-mono text-lg">10:00 AM</td>
                                <td
                                    class="py-4 px-6 font-medium text-white group-hover:text-secondary transition-colors">Salida 6 km sin aletas</td>
                                <td class="py-4 px-6 text-sm text-text-dim flex items-center gap-1"><span
                                        class="material-symbols-outlined text-base">flag</span> Boya Partida</td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="py-4 px-6 font-bold text-secondary font-mono text-lg">1:20 PM</td>
                                <td
                                    class="py-4 px-6 font-medium text-white group-hover:text-secondary transition-colors"> Cierre oficial del circuito y retiro de boyado</td>
                                <td class="py-4 px-6 text-sm text-text-dim flex items-center gap-1"><span
                                        class="material-symbols-outlined text-base">emoji_events</span> Campus</td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="py-4 px-6 font-bold text-secondary font-mono text-lg">1:30 PM</td>
                                <td
                                    class="py-4 px-6 font-medium text-white group-hover:text-secondary transition-colors"> Ceremonia de premiación</td>
                                <td class="py-4 px-6 text-sm text-text-dim flex items-center gap-1"><span
                                        class="material-symbols-outlined text-base">emoji_events</span> Campus</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-background-dark border-y border-surface-border">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                
                <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="p-2 bg-secondary/10 rounded-lg">
                        <span class="material-symbols-outlined text-primary">emoji_events</span>
                    </div>
                    <h3 class="text-4xl font-bold text-white">Premiación</h3>
                </div>
                <div class="flex flex-col gap-6">
                    <div
                        class="flex items-start gap-4 p-4 rounded-xl bg-surface-dark border border-surface-border hover:border-secondary/30 transition-colors">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-surface-dark border border-surface-border/50 text-secondary shadow-lg">
                            <span class="material-symbols-outlined">military_tech</span>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-white mb-1">Medallas Finishers</h4>
                            <p class="text-sm text-text-dim">Para todos los participantes.</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 p-4 rounded-xl bg-surface-dark border border-surface-border hover:border-secondary/30 transition-colors">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-surface-dark border border-surface-border/50 text-secondary shadow-lg">
                            <span class="material-symbols-outlined">social_leaderboard</span>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-white mb-1">Podio por categoría</h4>
                            <p class="text-sm text-text-dim">A los tres primeros puestos por categoría, sexo y modalidad, en las pruebas 1.5k, 3k y 6k, con y sin aletas.</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 p-4 rounded-xl bg-surface-dark border border-surface-border hover:border-secondary/30 transition-colors">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-surface-dark border border-surface-border/50 text-secondary shadow-lg">
                            <span class="material-symbols-outlined">trophy</span>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-white mb-1">Trofeos general 
                            </h4>
                            <p class="text-sm text-text-dim">Trofeos al primer lugar general (damas y varones) en categorías Máster y Promocional, con y sin aletas, en distancias 1.5 km, 3.0 km y 6.0 km..</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 p-4 rounded-xl bg-surface-dark border border-surface-border hover:border-secondary/30 transition-colors">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-surface-dark border border-surface-border/50 text-secondary shadow-lg">
                            <span class="material-symbols-outlined">groups</span>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-white mb-1">Premiación por clubes<span
                                    class="text-xs uppercase bg-primary/20 text-primary px-2 py-0.5 rounded ml-2">Solo Máster</span>
                            </h4>
                            <p class="text-sm text-text-dim mb-2">Trofeos al 1er, 2do y 3er puesto por puntaje acumulado.</p>
                            <p class="text-xs text-text-dim italic border-t border-surface-border/50 pt-2 mt-2">Desempate: Basado en el conteo de medallas de oro, plata y bronce, en ese orden.</p>
                        </div>
                    </div>
                </div>
                </div>
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-2 bg-primary/10 rounded-lg">
                            <span class="material-symbols-outlined text-primary">leaderboard</span>
                        </div>
                        <h3 class="text-4xl font-bold text-white">Puntuación</h3>
                    </div>
                    <div class="bg-surface-dark border border-surface-border rounded-xl p-6 relative overflow-hidden">
                        <div class="relative z-10">
                            <p class="text-gray-300 mb-6">Los clubes obtendrán puntaje por sus ocho (8) nadadores mejor ubicados.</p>
                            <div class="grid grid-cols-4 gap-2 text-center">
                                <div class="bg-background-dark rounded p-2 border border-primary/20">
                                    <span class="block text-xs text-text-dim ">1er.</span>
                                    <span class="block text-xl font-bold text-white">10pt</span>
                                </div>
                                <div class="bg-background-dark rounded p-2 border border-surface-border">
                                    <span class="block text-xs text-text-dim ">2do.</span>
                                    <span class="block text-xl font-bold text-white">9pt</span>
                                </div>
                                <div class="bg-background-dark rounded p-2 border border-surface-border">
                                    <span class="block text-xs text-text-dim ">3er.</span>
                                    <span class="block text-xl font-bold text-white">8pt</span>
                                </div>
                                <div class="bg-background-dark rounded p-2 border border-surface-border">
                                    <span class="block text-xs text-text-dim ">4to.</span>
                                    <span class="block text-xl font-bold text-white">7pt</span>
                                </div>
                                <div class="bg-background-dark rounded p-2 border border-surface-border">
                                    <span class="block text-xs text-text-dim ">5to.</span>
                                    <span class="block text-xl font-bold text-white">6pt</span>
                                </div>
                                <div class="bg-background-dark rounded p-2 border border-surface-border">
                                    <span class="block text-xs text-text-dim ">6to.</span>
                                    <span class="block text-xl font-bold text-white">5pt</span>
                                </div>
                                <div class="bg-background-dark rounded p-2 border border-surface-border">
                                    <span class="block text-xs text-text-dim ">7mo.</span>
                                    <span class="block text-xl font-bold text-white">4pt</span>
                                </div>
                                <div class="bg-background-dark rounded p-2 border border-surface-border">
                                    <span class="block text-xs text-text-dim ">8vo.</span>
                                    <span class="block text-xl font-bold text-white">3pt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 mt-6 mb-6">
                        <div class="p-2 bg-primary/10 rounded-lg">
                            <span class="material-symbols-outlined text-primary">gavel</span>
                        </div>
                        <h3 class="text-4xl font-bold text-white">Reglamento</h3><br>                        
                    </div>
                    <div class="p-3 relative">
                        <button 
                            onclick="window.location.href='{{ route('descargar.reglamento') }}'"
                            class="rounded-lg bg-secondary/50 px-5 h-12 py-2 text-sm font-bold text-white shadow-[0_0_20px_rgba(249,115,22,0.3)] transition-all transform hover:-translate-y-0.5 flex items-center gap-2">

                            <span class="material-symbols-outlined text-base">download</span>
                            Descargar Reglamento

                        </button>
                    </div>

                    
                </div>
            </div>
        </div>
    </section>  

    <section class="relative overflow-hidden py-24" id="kit">
        <div class="absolute inset-0 bg-background-dark"></div>
        <div class="absolute inset-0 bg-water-texture bg-cover bg-center opacity-5 mix-blend-overlay"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-background-dark via-transparent to-background-dark"></div>
        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-16 text-center">
                <!-- <span class="mb-3 inline-block text-sm font-bold uppercase tracking-wider text-secondary">Equipo premium</span> -->
                <h2 class="text-34l font-bold tracking-tight text-white sm:text-4xl">¿Qué hay en tu kit?</h2>
                <p class="mx-auto mt-4 max-w-2xl text-lg text-text-dim">
                   El kit del nadador incluye:
                </p>
            </div>
            <div class="flex flex-wrap justify-center gap-6">
                <div
                    class="group relative flex w-full max-w-[240px] flex-col items-center rounded-2xl border border-white/10 bg-surface-dark/40 p-6 text-center shadow-lg backdrop-blur-md transition-all hover:-translate-y-2 hover:border-primary/50 hover:bg-surface-dark/60 hover:shadow-[0_0_25px_rgba(249,115,22,0.15)]">
                    <div
                        class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-primary/20 to-orange-500/20 text-primary shadow-inner ring-1 ring-white/10 transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-[32px]">shopping_bag</span>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-white">Bolso del evento</h3>
                    <p class="text-sm leading-relaxed text-text-dim group-hover:text-gray-300">Bolso oficial del campeonato para llevar tu equipo con comodidad.</p>
                </div>
                <div
                    class="group relative flex w-full max-w-[240px] flex-col items-center rounded-2xl border border-white/10 bg-surface-dark/40 p-6 text-center shadow-lg backdrop-blur-md transition-all hover:-translate-y-2 hover:border-secondary/50 hover:bg-surface-dark/60 hover:shadow-[0_0_25px_rgba(6,182,212,0.15)]">
                    <div
                        class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-primary/20 to-orange-500/20 text-primary shadow-inner ring-1 ring-white/10 transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-[32px]">apparel</span>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-white">Polo</h3>
                    <p class="text-sm leading-relaxed text-text-dim group-hover:text-gray-300">Polo conmemorativo del evento, incluido para todos los participantes.</p>
                </div>
                <div
                    class="group relative flex w-full max-w-[240px] flex-col items-center rounded-2xl border border-white/10 bg-surface-dark/40 p-6 text-center shadow-lg backdrop-blur-md transition-all hover:-translate-y-2 hover:border-secondary/50 hover:bg-surface-dark/60 hover:shadow-[0_0_25px_rgba(6,182,212,0.15)]">
                    <div
                        class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-primary/20 to-orange-500/20 text-primary shadow-inner ring-1 ring-white/10 transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-[32px]">child_hat</span>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-white">Gorra de natación</h3>
                    <p class="text-sm leading-relaxed text-text-dim group-hover:text-gray-300">Gorra oficial para la competencia, de uso obligatorio durante la prueba.</p>
                </div>
                
                <div
                    class="group relative flex w-full max-w-[240px] flex-col items-center rounded-2xl border border-white/10 bg-surface-dark/40 p-6 text-center shadow-lg backdrop-blur-md transition-all hover:-translate-y-2 hover:border-secondary/50 hover:bg-surface-dark/60 hover:shadow-[0_0_25px_rgba(6,182,212,0.15)]">
                    <div
                        class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-primary/20 to-orange-500/20 text-primary shadow-inner ring-1 ring-white/10 transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-[32px]">local_activity</span>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-white">Cupón de descuento</h3>
                    <p class="text-sm leading-relaxed text-text-dim group-hover:text-gray-300">Cupón de descuento en tiendas Arena.</p>
                </div>
                <div
                    class="group relative flex w-full max-w-[240px] flex-col items-center rounded-2xl border border-white/10 bg-surface-dark/40 p-6 text-center shadow-lg backdrop-blur-md transition-all hover:-translate-y-2 hover:border-secondary/50 hover:bg-surface-dark/60 hover:shadow-[0_0_25px_rgba(6,182,212,0.15)]">
                    <div
                        class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-primary/20 to-orange-500/20 text-primary shadow-inner ring-1 ring-white/10 transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-[32px]">water_bottle</span>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-white">Tomatodo</h3>
                    <p class="text-sm leading-relaxed text-text-dim group-hover:text-gray-300">Tomatodo reutilizable para mantenerte hidratado antes y después de la prueba.</p>
                </div>
                 <div
                    class="group relative flex w-full max-w-[240px] flex-col items-center rounded-2xl border border-white/10 bg-surface-dark/40 p-6 text-center shadow-lg backdrop-blur-md transition-all hover:-translate-y-2 hover:border-secondary/50 hover:bg-surface-dark/60 hover:shadow-[0_0_25px_rgba(6,182,212,0.15)]">
                    <div
                        class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-primary/20 to-orange-500/20 text-primary shadow-inner ring-1 ring-white/10 transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-[32px]">coffee</span>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-white">Bebida caliente</h3>
                    <p class="text-sm leading-relaxed text-text-dim group-hover:text-gray-300">Bebida caliente al finalizar el recorrido.</p>
                </div>
            </div>
        </div>
    </section>

     <section class="py-16 bg-background-dark border-t border-surface-border">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 mb-10">
                <div>
                    <h2 class="text-4xl font-bold tracking-tight text-white">Seguridad </h2>
                    <p class="text-text-dim mt-2">Protocolo de seguridad coordinado con las autoridades locales.</p>
                </div>
                <!-- <div class="h-px flex-1 bg-surface-border hidden md:block mx-8"></div>
                <button
                    class="text-sm text-secondary font-bold hover:text-white transition-colors flex items-center gap-1">
                    Ver Protocolos <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </button> -->
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="flex items-start gap-4 p-4 rounded-xl bg-surface-dark border border-surface-border">
                    <div class="bg-blue-900/30 p-3 rounded-lg text-blue-400">
                        <span class="material-symbols-outlined text-3xl">local_police</span>
                    </div>
                    <div>
                        <h3 class="text-white font-bold mb-1">Seguridad Policial</h3>
                        <p class="text-sm text-text-dim">Unidades de la Policía Nacional del Perú asegurando el perímetro del evento y los accesos.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-4 rounded-xl bg-surface-dark border border-surface-border">
                    <div class="bg-red-900/30 p-3 rounded-lg text-red-400">
                        <span class="material-symbols-outlined text-3xl">medical_services</span>
                    </div>
                    <div>
                        <h3 class="text-white font-bold mb-1">Respuesta Médica</h3>
                        <p class="text-sm text-text-dim">Se contara con paramédicos y ambulancia en coordinación con la Municipalidad Distrital de Paca.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-4 rounded-xl bg-surface-dark border border-surface-border">
                    <div class="bg-orange-900/30 p-3 rounded-lg text-orange-400">
                        <span class="material-symbols-outlined text-3xl">kayaking</span>
                    </div>
                    <div>
                        <h3 class="text-white font-bold mb-1">Soporte Acuático</h3>
                        <p class="text-sm text-text-dim">Flota de 5 botes, kayaks y paddleboards  monitoreando a los nadadores.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="py-24 bg-background-dark" id="location">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-3xl font-bold tracking-tight text-white mb-6">Como llegar a Jauja</h2>
                    <p class="text-text-dim mb-8">
                        Jauja se encuentra en la región de Junín, en el centro del Perú. Es fácilmente accesible por aire o tierra, lo que la convierte en un destino ideal para su aventura en las alturas.
                    </p>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-surface-dark border border-surface-border">
                                <span class="material-symbols-outlined text-secondary">flight</span>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-white">Vuelo</h4>
                                <p class="text-sm text-text-dim">Vuelos diarios desde Lima al Aeropuerto de Jauja (Aeropuerto Francisco Carle). La duración del vuelo es de aproximadamente 45 minutos.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-surface-dark border border-surface-border">
                                <span class="material-symbols-outlined text-secondary">directions_bus</span>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-white">Bus</h4>
                                <p class="text-sm text-text-dim">Recorrido panorámico en autobús de 6 a 8 horas desde Lima por la Carretera Central. Varias compañías reconocidas operan rutas diarias.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-surface-dark border border-surface-border">
                                <span class="material-symbols-outlined text-secondary">hotel</span>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-white">Alojamiento</h4>
                                <p class="text-sm text-text-dim">Hemos establecido alianzas con hoteles locales para ofrecer tarifas exclusivas a participantes. Consulta la guía después de registrarte.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="order-1 lg:order-2 h-[400px] w-full overflow-hidden rounded-2xl bg-surface-dark relative border border-surface-border group">
                    <img alt="Stylized dark map view of a lake area"
                        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-80"
                        data-location="Jauja, Peru"
                        src="./assets/landing/images/circuito-copa-laguna-de-paca-2025.webp" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-background-dark/90 via-transparent to-transparent">
                    </div>
                    <div class="absolute bottom-6 right-6">                        
                        <h3 class="text-2xl font-bold text-white">Laguna de Paca</h3>
                        <p class="text-sm text-gray-300">Jauja Province, Junín Region, Peru</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="border-y border-surface-border/30 bg-[#0f172a] py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- <p class="mb-8 text-center text-sm font-semibold uppercase tracking-widest text-text-dim">Auspiciadores</p> -->
            <p class="mb-8 text-center text-4xl font-bold text-white ">Auspiciadores</p>   <br>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-12 sm:gap-16 lg:justify-between lg:gap-8 opacity-60 hover:opacity-100 transition-opacity duration-300">
                <div class="flex items-center gap-2 group cursor-default">                   
                    <img src="{{ asset('assets/web/images/escudo_jauja.png') }}" class="img-fluid" width="100px" alt="">                
                </div>                     
                <div class="flex items-center gap-2 group cursor-default">                    
                    <img src="{{ asset('assets/web/images/logo.png') }}" class="img-fluid" width="100px" alt="">                
                </div>
                <div class="flex items-center gap-2 group cursor-default">
                    <img src="{{ asset('assets/web/images/escudo_jauja.png') }}" class="img-fluid" width="100px" alt="">                
                </div>
                <div class="flex items-center gap-2 group cursor-default">
                    <img src="{{ asset('assets/web/images/logo.png') }}" class="img-fluid" width="100px" alt="">                
                </div>
                <div class="flex items-center gap-2 group cursor-default">
                    <img src="{{ asset('assets/web/images/escudo_jauja.png') }}" class="img-fluid" width="100px" alt="">                
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-surface-dark/20" id="faq">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <h2 class="mb-12 text-center text-4xl font-bold tracking-tight text-white">Preguntas Frecuentes</h2>
            <div class="space-y-4">
                <details class="group rounded-lg border border-surface-border bg-surface-dark">
                    <summary
                        class="flex cursor-pointer items-center justify-between p-6 font-medium text-white transition hover:bg-white/5">
                        <span class="text-lg font-semibold">¿Qué debo presentar el día del evento?</span>
                        <span class="ml-4 flex-shrink-0 transition-transform duration-300 group-open:-rotate-180">
                            <span class="material-symbols-outlined text-text-dim">expand_more</span>
                        </span>
                    </summary>
                    <div class="border-t border-surface-border p-6 pt-0 text-gray-300">
                        <p class="mt-4 leading-relaxed">
                           El formulario de liberación de responsabilidad firmado.                            
                        </p>
                        <p class="mt-4 leading-relaxed">
                            Menores de edad: debe firmarlo el padre o apoderado.
                    </div>
                </details>
                <details class="group rounded-lg border border-surface-border bg-surface-dark">
                    <summary
                        class="flex cursor-pointer items-center justify-between p-6 font-medium text-white transition hover:bg-white/5">
                        <span class="text-lg font-semibold">¿Es obligatorio usar el gorro del evento?</span>
                        <span class="ml-4 flex-shrink-0 transition-transform duration-300 group-open:-rotate-180">
                            <span class="material-symbols-outlined text-text-dim">expand_more</span>
                        </span>
                    </summary>
                    <div class="border-t border-surface-border p-6 pt-0 text-gray-300">
                        <p class="mt-4 leading-relaxed">
                            Sí. El gorro oficial es obligatorio. No usarlo implica descalificación.
                        </p>
                    </div>
                </details>
                <details class="group rounded-lg border border-surface-border bg-surface-dark">
                    <summary
                        class="flex cursor-pointer items-center justify-between p-6 font-medium text-white transition hover:bg-white/5">
                        <span class="text-lg font-semibold">¿Puedo usar wetsuit o boya?</span>
                        <span class="ml-4 flex-shrink-0 transition-transform duration-300 group-open:-rotate-180">
                            <span class="material-symbols-outlined text-text-dim">expand_more</span>
                        </span>
                    </summary>
                    <div class="border-t border-surface-border p-6 pt-0 text-gray-300">
                        <p class="mt-4 leading-relaxed">
                            El wetsuit es opcional.
                            
                        </p>
                        <p class="mt-4 leading-relaxed">
                            La boya es opcional, pero no puede usarse para descansar.
                        </p>

                    </div>
                </details>
                <details class="group rounded-lg border border-surface-border bg-surface-dark">
                    <summary
                        class="flex cursor-pointer items-center justify-between p-6 font-medium text-white transition hover:bg-white/5">
                        <span class="text-lg font-semibold">¿Por qué motivos puedo ser descalificado?</span>
                        <span class="ml-4 flex-shrink-0 transition-transform duration-300 group-open:-rotate-180">
                            <span class="material-symbols-outlined text-text-dim">expand_more</span>
                        </span>
                    </summary>
                    <div class="border-t border-surface-border p-6 pt-0 text-gray-300">
                        <p class="mt-4 leading-relaxed">
                            Por no seguir el recorrido, no pasar por boyas, apoyarse en botes, mala conducta o no usar el gorro oficial.
                        </p>
                    </div>
                </details>
                <details class="group rounded-lg border border-surface-border bg-surface-dark">
                    <summary
                        class="flex cursor-pointer items-center justify-between p-6 font-medium text-white transition hover:bg-white/5">
                        <span class="text-lg font-semibold">¿Hay reembolso si no puedo participar?</span>
                        <span class="ml-4 flex-shrink-0 transition-transform duration-300 group-open:-rotate-180">
                            <span class="material-symbols-outlined text-text-dim">expand_more</span>
                        </span>
                    </summary>
                    <div class="border-t border-surface-border p-6 pt-0 text-gray-300">
                        <p class="mt-4 leading-relaxed">
                            No. La inscripción no es reembolsable bajo ninguna circunstancia.
                        </p>
                    </div>
                </details>
            </div>
        </div>
    </section>

    <footer class="border-t border-surface-border bg-background-dark py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-between gap-6 md:flex-row">
                <div class="flex items-center gap-2">
                    <!-- <span class="material-symbols-outlined text-secondary">waves</span> -->
                    <!-- <span class="text-xl font-bold text-white">Club Aqua Sport</span> -->
                     <img src="{{ asset('assets/web/images/logo.png') }}" alt="Club Aqua Sport" class="img-fluid" width="100px">
                </div>
                <div class="text-sm text-text-dim">
                    © 2026 All rights reserved.
                </div>
                
                <div class="flex gap-8 text-sm text-text-dim">
                    <a class="hover:text-primary transition-colors" href="#">Terminos de Servicio</a>
                    <a class="hover:text-primary transition-colors" href="#">Política de Privacidad</a>
                    <a class="hover:text-primary transition-colors" href="#">Contacto</a>
                </div>
                <div class="flex items-center gap-4 ml-6" id="social-links">
                    <a href="https://www.instagram.com/club_aqua_sport/" target="_blank" class="flex items-center justify-center w-8 h-8 rounded-full border border-surface-border text-text-dim hover:text-primary hover:border-primary transition-all duration-300" href="#">
                    <img src="{{ asset('assets/web/images/redes/facebook.png') }}" alt="Facebook" class="w-8 h-8">
                    </a>
                    <a href="https://www.instagram.com/club_aqua_sport/" target="_blank" class="flex items-center justify-center w-8 h-8 rounded-full border border-surface-border text-text-dim hover:text-primary hover:border-primary transition-all duration-300" href="#">
                    <img src="{{ asset('assets/web/images/redes/instagram.png') }}" alt="Instagram" class="w-8 h-8">
                    </a>
                    <a href="https://www.youtube.com/@ClubAquaSport" target="_blank" class="flex items-center justify-center w-8 h-8 rounded-full border border-surface-border text-text-dim hover:text-primary hover:border-primary transition-all duration-300" href="#">
                    <img src="{{ asset('assets/web/images/redes/youtube.png') }}" alt="YouTube" class="w-8 h-8">
                    </a>
                    <a href="http://tiktok.com/@clubaquasport" target="_blank" class="flex items-center justify-center w-8 h-8 rounded-full border border-surface-border text-text-dim hover:text-primary hover:border-primary transition-all duration-300" href="#">
                    <img src="{{ asset('assets/web/images/redes/tik-tok.png') }}" alt="TikTok" class="w-8 h-8">
                    </a>
                </div>
                
            </div>
        </div>
    </footer>

</body>

<script>
    // Fecha del evento: 6 junio 2026, 07:00:00 (hora local Perú)
    const eventDate = new Date('2026-06-06T07:09:00-05:00');

    function updateCountdown() {
        const now = new Date();
        const diff = eventDate - now;

        if (diff <= 0) {
            document.getElementById('countdown-days').textContent = '0';
            document.getElementById('countdown-hours').textContent = '0';
            document.getElementById('countdown-minutes').textContent = '0';
            document.getElementById('countdown-seconds').textContent = '0';
            return;
        }

        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((diff / (1000 * 60)) % 60);
        const seconds = Math.floor((diff / 1000) % 60);

        document.getElementById('countdown-days').textContent = days.toString().padStart(2, '0');
        document.getElementById('countdown-hours').textContent = hours.toString().padStart(2, '0');
        document.getElementById('countdown-minutes').textContent = minutes.toString().padStart(2, '0');
        document.getElementById('countdown-seconds').textContent = seconds.toString().padStart(2, '0');
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
</script>

</html>
