<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Mostra il form di login
    public function create()
    {
        return view('auth.login');  // Assicurati che il file di vista sia corretto
    }

    // Gestisci il login
    public function store(Request $request)
    {
        // Validazione dei dati di login
        $validated = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Tentativo di login
        if (Auth::attempt($validated)) {
            // Se il login è riuscito, redirect alla home
            return redirect()->route('home');
        }

        // Se il login fallisce, ritorna con un errore
        return back()->withErrors(['email' => 'Le credenziali non sono corrette.']);
    }
}

