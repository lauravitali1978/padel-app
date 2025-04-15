<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campo;

class PrenotazioneController extends Controller
{
    public function showCalendario($id)
    {
        $campo = Campo::findOrFail($id);
        return view('calendario', compact('campo'));
    }
}
