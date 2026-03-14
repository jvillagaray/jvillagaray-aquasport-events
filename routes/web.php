<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

Route::get('/registro', [RegistroController::class,'create']);
Route::post('/registro', [RegistroController::class,'store']);



require __DIR__.'/auth.php';
