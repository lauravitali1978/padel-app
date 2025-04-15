<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Mostra il form di registrazione
    public function create()
    {
        return view('auth.register');
    }

    // Gestisci il salvataggio dei dati di registrazione
    public function store(Request $request)
    {
        // Validazione dei dati di registrazione
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crea un nuovo utente
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Logga l'utente dopo la registrazione
        auth()->loginUsingId(User::where('email', $validated['email'])->first()->id);

        // Redirect alla home
        return redirect()->route('home')->with('success', 'Registrazione completata con successo!');
    }
}
