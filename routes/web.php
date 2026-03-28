<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/descargar-reglamento', function () {
    return response()->download(public_path('docs/reglamento.pdf'));
})->name('descargar.reglamento');


// La vista recibe los clubes desde el servidor: cero AJAX, cero datos en el DOM
Route::get('/inscripcion', [RegistroController::class, 'showForm'])->name('registro.create');
Route::post('/inscripcion', [RegistroController::class, 'store'])->name('registro.store');
Route::get('/inscripcion/confirmacion', [RegistroController::class, 'confirmacion'])->name('registro.confirmacion');

// Endpoint complementario: útil para futuros consumidores (admin, app móvil, etc.)
// Protegido con throttle: máx. 30 peticiones/minuto por IP
Route::get('/api/clubes', [RegistroController::class, 'clubs'])
    ->middleware('throttle:30,1')
    ->name('api.clubs');

Route::get('/api/eventdistances', [RegistroController::class, 'eventDistances'])
    ->middleware('throttle:30,1')
    ->name('api.eventdistances');

Route::get('/api/eventmodes', [RegistroController::class, 'eventModes'])
    ->middleware('throttle:30,1')
    ->name('api.eventmodes');

Route::get('/registro', [RegistroController::class,'create']);
Route::post('/registro', [RegistroController::class,'store']);



require __DIR__.'/auth.php';
