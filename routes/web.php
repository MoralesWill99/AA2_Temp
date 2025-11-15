<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ServiciosController;
use Illuminate\Support\Facades\Route;

/* ---------- PÁGINAS PÚBLICAS (sin login) ---------- */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/herreria',   [ServiciosController::class, 'herreria']);
Route::get('/carpinteria',[ServiciosController::class, 'carpinteria']);
Route::get('/servicios-web',[ServiciosController::class, 'serviciosWeb']);

/* ---------- AUTH BREEZE (login, registro, verificación) ---------- */
require __DIR__.'/auth.php';

/* ---------- USUARIOS AUTENTICADOS ---------- */
Route::middleware(['auth', 'verified'])->group(function () {

    /* ---- ROL: USUARIO y ADMINISTRADOR ---- */
    Route::middleware(['rol:usuario,administrador'])->group(function () {
        Route::get('/servicios', function () {
            return view('servicios');
        })->name('servicios');
    });

    /* ---- ROL: ADMINISTRADOR ---- */
    Route::middleware(['rol:administrador'])->group(function () {
        Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
        Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
        Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
        Route::get('/clientes/{id}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
        Route::put('/clientes/{id}', [ClientesController::class, 'update'])->name('clientes.update');
        Route::delete('/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
    });

    /* ---- BREEZE ORIGINAL (perfil, dashboard) ---- */
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});