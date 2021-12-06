<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas protegidas
Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('/vacantes', [App\Http\Controllers\VacanteController::class, 'index'])->name('vacantes.index');
    Route::get('/vacantes/create', [App\Http\Controllers\VacanteController::class, 'create'])->name('vacantes.create');
    Route::post('/vacantes', [App\Http\Controllers\VacanteController::class, 'store'])->name('vacantes.store');

    // Subir imágenes
    Route::post('/vacantes/imagen', [App\Http\Controllers\VacanteController::class, 'imagen'])->name('vacantes.imagen');
    Route::post('/vacantes/borrarimagen', [App\Http\Controllers\VacanteController::class, 'borrarimagen'])->name('vacantes.borrar');

    // Notificaciones
    Route::get('notificaciones', 'App\Http\Controllers\NotificacionesController')->name('notificaciones');
});

// Enviar candidato
Route::get('/candidatos/{id}', [App\Http\Controllers\CandidatoController::class, 'index'])->name('candidatos.index');
Route::post('/candidatos/store', [App\Http\Controllers\CandidatoController::class, 'store'])->name('candidatos.store');

// Rutas de vacantes
Route::get('/vacantes/{vacante}', [App\Http\Controllers\VacanteController::class, 'show'])->name('vacantes.show');



