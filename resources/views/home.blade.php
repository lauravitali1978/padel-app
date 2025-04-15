@extends('layouts.app')

@section('title', 'Padel Booking')

@section('content')

    <!-- Hero con immagine -->
    <section class="container-fluid p-0 mb-4">
        <img src="{{ asset('images/campi/herosection.png') }}" 
             alt="Banner PadelApp" 
             class="img-fluid w-100 d-block" 
             style="max-height: 650px; object-fit: cover;">
    </section>

    <!-- Testo introduttivo -->
    <header class="container text-center mb-5">
        <h1 class="display-5 fw-bold">Prenota il tuo campo da Padel</h1>
        <p class="lead">Scegli tra 6 campi disponibili e prenota il tuo slot!</p>
    </header>

    <!-- Call to Action (Campi) -->
    <section class="container mb-5">
        <div class="row g-4">
            @foreach ($campi as $campo)
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="{{ $campo->immagine_url }}" class="card-img-top" alt="{{ $campo->nome }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $campo->nome }}</h5>
                            <p class="card-text">Posizione: {{ $campo->posizione }}</p>
                            <a href="{{ route('calendario.campo', $campo->id) }}" class="btn btn-primary w-100">Prenota ora</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
