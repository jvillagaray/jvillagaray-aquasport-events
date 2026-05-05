<!DOCTYPE html>
<html class="dark" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Términos y Condiciones – IV Copa Laguna de Paca 2026</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f97415",
                    },
                    fontFamily: { "display": ["Inter", "sans-serif"] },
                }
            }
        }
    </script>
    <style>
        ::-webkit-scrollbar { width: 8px }
        ::-webkit-scrollbar-track { background: #0f172a }
        ::-webkit-scrollbar-thumb { background: #334155; border-radius: 4px }
        .glass-card {
            background-color: rgb(10 52 120 / 75%);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5)
        }
        .prose-terms h3 { @apply text-base font-bold text-cyan-300 mt-6 mb-2; }
        .prose-terms p  { @apply text-sm text-slate-300 leading-relaxed mb-3; }
        .prose-terms ul { @apply list-disc list-inside text-sm text-slate-300 leading-relaxed space-y-1 mb-3 pl-2; }
        .prose-terms hr { @apply border-white/10 my-4; }
        .prose-terms strong { @apply text-slate-100 font-semibold; }
        .prose-terms a  { @apply text-cyan-400 hover:text-cyan-300 underline; }
    </style>
</head>

<body class="font-display antialiased text-slate-200">
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('assets/web/images/capi_10_2c.png') }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-navy-overlay/50"></div>
    </div>

    <div class="relative z-10 min-h-screen w-full px-4 py-10">
        <div class="mx-auto max-w-3xl">

            {{-- Header --}}
            <div class="mb-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/web/images/logo_paca.png') }}" width="60px" alt="Logo Paca" />
                    <div>
                        <h1 class="text-xl font-black text-white leading-tight">Términos y Condiciones</h1>
                        <p class="text-xs text-cyan-400 uppercase tracking-widest">IV Copa Laguna de Paca 2026</p>
                    </div>
                </div>
                <a href="{{ route('registro.create') }}"
                    class="inline-flex items-center gap-2 rounded-xl border border-slate-600 bg-slate-800/60 px-4 py-2 text-sm font-semibold text-slate-300 transition hover:bg-slate-700 hover:text-white">
                    <span class="material-symbols-outlined text-base">arrow_back</span>
                    Volver a inscripción
                </a>
            </div>

            {{-- Card --}}
            <div class="glass-card rounded-2xl p-6 sm:p-8 prose-terms">

                <p class="text-xs text-slate-500 mb-4">
                    Última actualización: abril 2026 &nbsp;·&nbsp;
                    Organizador: Asociación Club Deportivo Cultural Aqua Sport
                </p>

                <hr>

                <h3>1. Aceptación de los términos</h3>
                <p>
                    Al completar el proceso de inscripción en la IV Copa Laguna de Paca 2026, el participante
                    (o su representante legal en caso de menores de edad) declara haber leído, comprendido y
                    aceptado en su totalidad los presentes Términos y Condiciones, así como el Reglamento
                    Oficial del evento.
                </p>

                <hr>

                <h3>2. Requisitos de participación</h3>
                <ul>
                    <li>El participante debe tener un mínimo de <strong>12 años cumplidos</strong> al momento del evento.</li>
                    <li>Los participantes <strong>menores de 18 años</strong> deben contar con autorización escrita de su padre, madre o tutor legal, la cual deberá ser presentada el día del evento.</li>
                    <li>El participante declara encontrarse en condiciones físicas y mentales aptas para competir en la disciplina y distancia seleccionada.</li>
                    <li>Es responsabilidad única e intransferible del participante garantizar que cuenta con las condiciones de salud óptimas para la actividad a realizarse.</li>
                    <li>Se recomienda la presentación de un certificado médico vigente.</li>
                </ul>

                <hr>

                <h3>3. Proceso de inscripción y pago</h3>
                <ul>
                    <li>La inscripción se considera <strong>reservada</strong> únicamente tras completar el formulario y adjuntar el comprobante de pago.</li>
                    <li>La inscripción se considera <strong>confirmada</strong> una vez que el equipo organizador valide el pago, lo cual ocurrirá en un plazo de 24 a 48 horas hábiles.</li>
                    <li>El participante recibirá una notificación por correo electrónico al confirmar su inscripción.</li>
                    <li>Los precios varían según la fase de inscripción (Fase 1, Fase 2, Fase 3). El precio aplicable es el vigente al momento de realizar el pago.</li>
                </ul>

                <hr>

                <h3>4. Política de cancelaciones y devoluciones</h3>
                <ul>
                    <li><strong>Cancelación por el participante:</strong> No se realizan devoluciones del monto pagado una vez confirmada la inscripción. El participante podrá ceder su inscripción a otra persona previa comunicación y aprobación del organizador, hasta 7 días antes del evento.</li>
                    <li><strong>Cancelación o suspensión del evento:</strong> En caso de que el evento sea cancelado por causas de fuerza mayor (condiciones climáticas extremas, disposición de autoridades, causas de seguridad, entre otras), el organizador comunicará las alternativas disponibles, que podrán incluir reprogramación o crédito para futuros eventos. No se garantiza devolución del monto pagado en casos de fuerza mayor.</li>
                    <li><strong>Modificación del evento:</strong> El organizador se reserva el derecho de modificar recorridos, distancias, horarios o categorías por razones de seguridad o logística, sin que ello implique devolución del monto pagado.</li>
                </ul>

                <hr>

                <h3>5. Exoneración de responsabilidad</h3>
                <ul>
                    <li>El participante asume plena responsabilidad por cualquier lesión, accidente, daño físico o material que pudiera ocurrir durante su traslado, preparación, participación o retiro del evento.</li>
                    <li>La Asociación Club Deportivo Cultural Aqua Sport, sus directivos, colaboradores y voluntarios no serán responsables por accidentes, lesiones, enfermedades, robos, pérdidas o daños de cualquier naturaleza que ocurran durante el evento.</li>
                    <li>El participante declara conocer los riesgos inherentes a la natación en aguas abiertas y acepta participar bajo su propia responsabilidad.</li>
                    <li>Se contará con personal de seguridad acuática y primeros auxilios durante el evento; sin embargo, el organizador no garantiza la ausencia de riesgos.</li>
                </ul>

                <hr>

                <h3>6. Uso de imagen</h3>
                <ul>
                    <li>El participante autoriza expresamente a la Asociación Club Deportivo Cultural Aqua Sport a capturar, reproducir y publicar fotografías y videos tomados durante el evento en los que aparezca su imagen, para fines de difusión en redes sociales, medios de comunicación y material promocional del evento, sin que ello genere derecho a compensación alguna.</li>
                    <li>En caso de no autorizar el uso de imagen, el participante deberá comunicarlo por escrito al organizador antes del evento.</li>
                </ul>

                <hr>

                <h3>7. Protección de datos personales</h3>
                <p>
                    Los datos personales recopilados en el formulario de inscripción serán tratados conforme a la
                    <strong>Ley N° 29733 — Ley de Protección de Datos Personales del Perú</strong> y su reglamento.
                    Los datos serán utilizados exclusivamente para la gestión del evento: comunicaciones, publicación
                    de resultados y emisión de certificados. No serán cedidos a terceros sin consentimiento previo del
                    titular, salvo obligación legal.
                </p>
                <p>
                    Para ejercer sus derechos de acceso, rectificación, cancelación u oposición, contáctanos:
                    <a href="mailto:inscripciones@clubaquasport.com">inscripciones@clubaquasport.com</a>
                </p>

                <hr>

                <h3>8. Reglamento del evento</h3>
                <ul>
                    <li>El participante declara conocer y aceptar el Reglamento Oficial de la IV Copa Laguna de Paca 2026, disponible para descarga en el sitio web del evento.</li>
                    <li>El incumplimiento del reglamento podrá resultar en descalificación sin devolución del monto pagado.</li>
                    <li>Las decisiones del jurado y del comité organizador son inapelables.</li>
                </ul>

                <hr>

                <h3>9. Contacto</h3>
                <ul>
                    <li><strong>Correo:</strong> <a href="mailto:inscripciones@clubaquasport.com">inscripciones@clubaquasport.com</a></li>
                    <li><strong>WhatsApp:</strong> <a href="https://wa.me/51980588656" target="_blank">+51 980 588 656</a></li>
                    <li><strong>Organizador:</strong> Asociación Club Deportivo Cultural Aqua Sport</li>
                </ul>

                <hr>

                <p class="text-xs text-slate-500 mt-4">
                    Al marcar la casilla "Acepto los términos y condiciones" en el formulario de inscripción,
                    el participante confirma haber leído y aceptado íntegramente el contenido de este documento.
                </p>

            </div>

            {{-- Footer --}}
            <div class="mt-6 text-center">
                <a href="{{ route('registro.create') }}"
                    class="inline-flex items-center gap-2 rounded-xl bg-primary px-6 py-3 text-sm font-bold text-white shadow-[0_0_20px_rgba(249,116,21,0.3)] transition hover:bg-orange-500 hover:shadow-[0_0_30px_rgba(249,116,21,0.6)]">
                    <span class="material-symbols-outlined text-base">app_registration</span>
                    Ir a inscripción
                </a>
            </div>

        </div>
    </div>

</body>
</html>
