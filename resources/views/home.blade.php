<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Padel Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">PadelApp</a>
            <div class="ms-auto">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary me-2">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">Registrati</a>
                @endauth
            </div>
        </div>
    </nav>

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
    

    <!-- Bootstrap JS (opzionale) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
