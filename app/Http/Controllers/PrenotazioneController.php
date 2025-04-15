<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campo;
use App\Models\Prenotazione; // Aggiungi questa riga

class PrenotazioneController extends Controller
{
    public function showCalendario($id)
    {
        $campo = Campo::findOrFail($id);

        // Eventi finti per testing
        $eventi = [
            [
                'title' => 'Prenotazione Laura',
                'start' => '2025-04-19',
            ],
            [
                'title' => 'Torneo del venerdì',
                'start' => '2025-04-26',
            ],
        ];

        return view('calendario', compact('campo', 'eventi'));
    }

    // Metodo per mostrare il form di prenotazione
    public function mostraFormPrenotazione($id, Request $request)
    {
        $campo = Campo::findOrFail($id);
        $data = $request->query('data'); // es. ?data=2025-04-20

        return view('prenotazione', compact('campo', 'data'));
    }

    // Metodo per inviare i dati di prenotazione
    public function submitPrenotazione(Request $request, $id)
{
    // Verifica se l'utente è autenticato
    if ($request->user()) {
        // Recuperiamo il campo selezionato
        $campo = Campo::findOrFail($id);
    
        // Validazione dei dati
        $validated = $request->validate([
            'data' => 'required|date',
            'orario' => 'required|date_format:H:i',
        ]);
    
        // Salviamo la prenotazione nel database
        Prenotazione::create([
            'campo_id' => $campo->id,
            'nome' => $request->user()->name,  // Recupera il nome dell'utente (opzionale)
            'data' => $validated['data'],
            'orario' => $validated['orario'],
        ]);
    
        // Redirect dopo aver salvato la prenotazione
        return redirect()->route('home')->with('success', 'Prenotazione effettuata con successo!');
    } else {
        // Se l'utente non è autenticato, redirigi alla pagina di login
        return redirect()->route('login')->with('error', 'Devi essere loggato per prenotare.');
    }
}

}


