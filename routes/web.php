<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrenotazioneController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/calendario/{id}', [PrenotazioneController::class, 'showCalendario'])->name('calendario.campo');
// Questa rotta serve per il form di prenotazione
Route::get('/prenota/{id}', [PrenotazioneController::class, 'mostraFormPrenotazione'])->name('prenotazione.form');

// Questa rotta serve per il submit del form di prenotazione
Route::post('/prenota/{id}', [PrenotazioneController::class, 'submitPrenotazione'])->name('prenotazione.submit');

// Routes form registrazione e login 
Route::get('/login', [LoginController::class, 'create'])->name('login'); // Aggiungi questa riga per il login
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');