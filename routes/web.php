<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\avisoController;
use App\Http\Controllers\privacidadController;
use App\Http\Controllers\cookiesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('aviso-privacidad', avisoController::class, 'index')->name('aviso-privacidad');
Route::get('politicas-cookies', cookiesController::class, 'index')->name('politicas-cookies');
Route::get('terminos-condiciones', privacidadController::class, 'index')->name('terminos-condiciones');
Route::post('/cotizacion/enviar', [CotizacionController::class, 'enviar'])->name('mail');
