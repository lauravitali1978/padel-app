<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrenotazioneController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/calendario/{id}', [PrenotazioneController::class, 'showCalendario'])->name('calendario.campo');
