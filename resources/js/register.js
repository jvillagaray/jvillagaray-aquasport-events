/**
 * register.js — Validación de formulario de inscripción
 *
 * Responsabilidades:
 *  1. Validar formato de número de documento según tipo (DNI / CE / Pasaporte)
 *  2. Validar todos los campos del Paso 1 antes de avanzar al Paso 2
 *  3. Mostrar mensajes de error inline bajo cada campo
 *  4. Feedback visual del archivo subido (nombre + tamaño)
 */

// ── Reglas de formato por tipo de documento ───────────────────────────────────
const DOC_RULES = {
    DNI: {
        pattern:     /^\d{8}$/,
        message:     'El DNI debe tener exactamente 8 dígitos numéricos.',
        placeholder: '12345678  (8 dígitos)',
    },
    CE: {
        pattern:     /^[A-Z0-9]{8,12}$/,
        message:     'El CE debe tener entre 8 y 12 caracteres alfanuméricos (mayúsculas).',
        placeholder: 'AB12345678  (8–12 caracteres)',
    },
    PASSPORT: {
        pattern:     /^[A-Z0-9]{6,15}$/,
        message:     'El pasaporte debe tener entre 6 y 15 caracteres alfanuméricos.',
        placeholder: 'AB1234567  (6–15 caracteres)',
    },
};

// ─────────────────────────────────────────────────────────────────────────────

document.addEventListener('DOMContentLoaded', () => {
    initDocumentValidation();
    initCategoryFromBirthdate();
    initStepValidation();
    initPriceFromSelections();
    initFileUploadFeedback();
});

// ── Paso 1 → Paso 2: bloquear avance si hay errores ──────────────────────────

function initStepValidation() {
    const step2Trigger = document.querySelector('label[for="step2"]');
    if (step2Trigger) {
        step2Trigger.addEventListener('click', (e) => {
            if (!validateStep1()) {
                e.preventDefault();
                const firstError = document.querySelector('[id^="error-"]:not(.hidden), #alert-age-restriction:not(.hidden)');
                firstError?.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    }

    // Validar que el precio esté calculado antes de enviar el formulario (paso 2)
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', (e) => {
            const priceId = document.getElementById('event-price-id')?.value;
            if (!priceId) {
                e.preventDefault();
                const noPrice = document.getElementById('alert-no-price');
                if (noPrice) {
                    noPrice.querySelector('p').textContent =
                        'Selecciona una distancia y modalidad válidas para continuar.';
                    noPrice.classList.remove('hidden');
                    noPrice.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
                return;
            }

            // Deshabilitar botón para evitar envíos duplicados
            const btn     = document.getElementById('submit-btn');
            const label   = document.getElementById('submit-label');
            const loading = document.getElementById('submit-loading');
            if (btn) {
                btn.disabled = true;
                btn.classList.add('opacity-75', 'cursor-not-allowed', 'pointer-events-none');
                label?.classList.add('hidden');
                loading?.classList.remove('hidden');
            }
        });
    }
}

function validateStep1() {
    let valid = true;

    // Tipo y número de documento
    const docType  = document.getElementById('document-type')?.value ?? '';
    const docValue = (document.getElementById('document-number')?.value ?? '').trim().toUpperCase();
    const docErr   = validateDocumentNumber(docType, docValue);
    if (docErr) { setError('document-number', docErr); valid = false; }
    else clearError('document-number');

    // Nombres
    if (!getValue('first-name')) {
        setError('first-name', 'El nombre es obligatorio.'); valid = false;
    } else clearError('first-name');

    // Apellidos
    if (!getValue('last-name')) {
        setError('last-name', 'Los apellidos son obligatorios.'); valid = false;
    } else clearError('last-name');

    // Fecha de nacimiento + restricción de edad mínima (12 años)
    const birthDateVal = getValue('birth-date');
    if (!birthDateVal) {
        setError('birth-date', 'La fecha de nacimiento es obligatoria.'); valid = false;
    } else {
        const age = calculateAge(birthDateVal);
        if (age < 12) {
            document.getElementById('alert-age-restriction')?.classList.remove('hidden');
            setError('birth-date', 'No se permite la inscripción para menores de 12 años.');
            valid = false;
        } else {
            document.getElementById('alert-age-restriction')?.classList.add('hidden');
            clearError('birth-date');
        }
    }

    // Género
    if (!document.querySelector('input[name="gender"]:checked')) {
        setError('gender', 'Selecciona el género.'); valid = false;
    } else clearError('gender');

    // Teléfono
    if (!getValue('phone')) {
        setError('phone', 'El teléfono es obligatorio.'); valid = false;
    } else clearError('phone');

    // Email
    const email = getValue('email');
    if (!email) {
        setError('email', 'El correo electrónico es obligatorio.'); valid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        setError('email', 'El correo no tiene un formato válido.'); valid = false;
    } else clearError('email');

    return valid;
}

// ── Validación en tiempo real del número de documento ────────────────────────

function initDocumentValidation() {
    const typeSelect = document.getElementById('document-type');
    const numInput   = document.getElementById('document-number');

    if (!typeSelect || !numInput) return;

    // Al cambiar el tipo → actualizar placeholder y revalidar si ya había un valor
    typeSelect.addEventListener('change', () => {
        updatePlaceholder(typeSelect.value);
        if (numInput.value.trim()) checkDocumentFormat();
    });

    // Al escribir → validar con debounce de 350 ms
    let debounceTimer;
    numInput.addEventListener('input', () => {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(checkDocumentFormat, 350);
    });

    // Estado inicial al cargar la página
    updatePlaceholder(typeSelect.value);

    function checkDocumentFormat() {
        const type  = typeSelect.value;
        const value = numInput.value.trim().toUpperCase();

        if (!value) {
            clearError('document-number');
            return;
        }

        const err = validateDocumentNumber(type, value);
        err ? setError('document-number', err) : clearError('document-number');
    }
}

/**
 * Devuelve un mensaje de error si el valor no cumple el patrón del tipo dado,
 * o null si es válido.
 */
function validateDocumentNumber(type, value) {
    if (!value) return 'El número de documento es obligatorio.';

    const rule = DOC_RULES[type?.toUpperCase()];
    if (!rule) return null;   // Tipo desconocido: no bloquear

    return rule.pattern.test(value.toUpperCase()) ? null : rule.message;
}

function updatePlaceholder(type) {
    const input = document.getElementById('document-number');
    if (!input) return;
    input.placeholder = DOC_RULES[type?.toUpperCase()]?.placeholder ?? 'Número de documento';
}

// ── Feedback visual del archivo subido ────────────────────────────────────────

function initFileUploadFeedback() {
    const fileInput = document.querySelector('input[type="file"]');
    if (!fileInput) return;

    fileInput.addEventListener('change', () => {
        const file = fileInput.files[0];
        if (!file) return;

        const container = fileInput.closest('.group') ?? fileInput.parentElement;
        const textEl    = container?.querySelector('p.text-sm.font-medium');
        const sizeEl    = container?.querySelector('p.text-xs');

        if (textEl) textEl.textContent = file.name;

        if (sizeEl) {
            const kb = file.size / 1024;
            sizeEl.textContent = kb >= 1024
                ? `${(kb / 1024).toFixed(2)} MB`
                : `${Math.round(kb)} KB`;
        }
    });
}

// ── Cálculo dinámico de event_category_id (basado en birthdate) ──────────────

/**
 * Busca la categoría cuyo rango min_age–max_age contiene la edad calculada
 * a partir del birthdate. Los rangos provienen del JSON embebido por Blade.
 *
 * Ejemplo: birthdate 24/04/1989 → edad 36 → min_age=30, max_age=39 → id=4
 */
function initCategoryFromBirthdate() {
    const birthdateInput = document.getElementById('birth-date');
    const categoryInput  = document.getElementById('event-category-id');
    const ageAlert       = document.getElementById('alert-age-restriction');

    if (!birthdateInput || !categoryInput) return;

    const data       = parseEventData();
    const categories = data?.categories ?? [];

    birthdateInput.addEventListener('change', () => updateCategory());

    // Aplicar al cargar si ya hay valor (ej: old() tras error de servidor)
    if (birthdateInput.value) updateCategory();

    function updateCategory() {
        const age = calculateAge(birthdateInput.value);
        if (age === null) return;

        if (age < 12) {
            categoryInput.value = '';
            ageAlert?.classList.remove('hidden');
            return;
        }

        ageAlert?.classList.add('hidden');

        const match = categories.find(c => age >= c.min_age && age <= c.max_age);
        categoryInput.value = match ? match.id : '';
    }
}

// ── Cálculo dinámico de event_price_id (fase activa + distancia + modalidad) ──

function initPriceFromSelections() {
    const data = parseEventData();
    if (!data) return;

    const distanceSelect = document.getElementById('distances');
    const modeSelect     = document.getElementById('modalities');
    const priceInput     = document.getElementById('event-price-id');

    if (!distanceSelect || !modeSelect || !priceInput) return;

    function updatePrice() {
        const distanceId = parseInt(distanceSelect.value);
        const modeId     = parseInt(modeSelect.value);

        if (!distanceId || !modeId) {
            priceInput.value = '';
            renderPriceDisplay(null, null);
            return;
        }

        const phase = findCurrentPhase(data.phases);
        if (!phase) {
            priceInput.value = '';
            renderPriceDisplay(null, 'no_phase');
            return;
        }

        const priceObj = findPrice(data.prices, phase.id, distanceId, modeId);
        if (!priceObj) {
            priceInput.value = '';
            renderPriceDisplay(null, 'no_price');
            return;
        }

        priceInput.value = priceObj.id;
        renderPriceDisplay(priceObj, phase);
    }

    distanceSelect.addEventListener('change', updatePrice);
    modeSelect.addEventListener('change', updatePrice);

    // Ejecutar al cargar (útil cuando old() repopula los selects)
    updatePrice();
}

// ── Helpers de cálculo ────────────────────────────────────────────────────────

/** Lee el bloque JSON embebido en el DOM por Blade. */
function parseEventData() {
    const el = document.getElementById('aquasport-data');
    if (!el) return null;
    try { return JSON.parse(el.textContent); }
    catch { return null; }
}

/** Calcula la edad en años completos a partir de un string de fecha (YYYY-MM-DD). */
function calculateAge(dateString) {
    if (!dateString) return null;
    const birth = new Date(dateString);
    const today = new Date();
    let age = today.getFullYear() - birth.getFullYear();
    const m = today.getMonth() - birth.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birth.getDate())) age--;
    return age;
}

/** Devuelve la fase cuyo rango starts_at–ends_at contiene la fecha actual, o null. */
function findCurrentPhase(phases) {
    const now = new Date();
    return phases.find(p => {
        const start = new Date(p.starts_at);
        const end   = new Date(p.ends_at);
        end.setHours(23, 59, 59, 999); // incluir todo el último día
        return now >= start && now <= end;
    }) ?? null;
}

/** Busca el registro de precio para la combinación fase + distancia + modalidad. */
function findPrice(prices, phaseId, distanceId, modeId) {
    return prices.find(p =>
        // == en lugar de === para evitar fallo por int vs string
        p.event_phase_id    == phaseId &&
        p.event_distance_id == distanceId &&
        p.event_mode_id     == modeId
    ) ?? null;
}

/**
 * Actualiza el badge #price-display y la alerta #alert-no-price.
 *
 * @param {object|null} priceObj  - Registro de precio encontrado
 * @param {object|string|null} context
 *   - object  → fase activa (precio encontrado)
 *   - 'no_phase' → no hay fase activa en este momento
 *   - 'no_price' → combinación sin precio configurado
 *   - null → selección incompleta
 */
function renderPriceDisplay(priceObj, context) {
    const display  = document.getElementById('price-display');
    const alertEl  = document.getElementById('alert-no-price');

    if (priceObj && context && typeof context === 'object') {
        // Precio encontrado → mostrar badge
        const priceEl = display?.querySelector('[data-price]');
        const phaseEl = display?.querySelector('[data-phase]');
        if (priceEl) priceEl.textContent = `S/ ${parseFloat(priceObj.price).toFixed(2)}`;
        if (phaseEl) phaseEl.textContent = context.name;
        display?.classList.remove('hidden');
        alertEl?.classList.add('hidden');
    } else {
        display?.classList.add('hidden');

        if (context === 'no_phase' || context === 'no_price') {
            const msgEl = alertEl?.querySelector('p');
            if (msgEl) {
                msgEl.textContent = context === 'no_phase'
                    ? 'No hay una fase de inscripción activa en este momento. Contacta al organizador.'
                    : 'Esta combinación de distancia y modalidad no tiene precio configurado. Contacta al organizador.';
            }
            alertEl?.classList.remove('hidden');
        } else {
            alertEl?.classList.add('hidden');
        }
    }
}

// ── Helpers ───────────────────────────────────────────────────────────────────

/** Obtiene y recorta el valor de un input por su id. */
function getValue(id) {
    return (document.getElementById(id)?.value ?? '').trim();
}

/**
 * Muestra un mensaje de error bajo el campo indicado.
 * Añade `!border-red-500` al campo y elimina `hidden` del contenedor de error.
 */
function setError(fieldId, message) {
    document.getElementById(fieldId)?.classList.add('!border-red-500');

    const errEl = document.getElementById('error-' + fieldId);
    if (errEl) {
        errEl.textContent = message;
        errEl.classList.remove('hidden');
    }
}

/**
 * Limpia el estado de error de un campo.
 */
function clearError(fieldId) {
    document.getElementById(fieldId)?.classList.remove('!border-red-500');

    const errEl = document.getElementById('error-' + fieldId);
    if (errEl) {
        errEl.textContent = '';
        errEl.classList.add('hidden');
    }
}
