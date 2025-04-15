<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Calendario - {{ $campo->nome }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4">Prenota: {{ $campo->nome }}</h2>
        <p>Qui potrai selezionare data e orario per il campo <strong>{{ $campo->nome }}</strong> situato in <em>{{ $campo->posizione }}</em>.</p>

        {{-- Qui in futuro inseriremo il calendario --}}
        <div class="alert alert-info">Calendario in fase di sviluppo...</div>

        <a href="{{ route('home') }}" class="btn btn-secondary mt-3">← Torna alla Home</a>
    </div>
</body>
</html>
