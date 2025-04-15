<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campo;

class HomeController extends Controller
{
    public function index()
    {
        $campi = Campo::all(); // Prende i 6 campi dal DB
        return view('home', compact('campi'));
    }
}
