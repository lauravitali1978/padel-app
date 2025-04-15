<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Prenotazione - {{ $campo->nome }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4">Prenota il campo: {{ $campo->nome }}</h2>
        <p>Seleziona l'orario per il campo <strong>{{ $campo->nome }}</strong>, situato in <em>{{ $campo->posizione }}</em>.</p>

        <!-- Mostra la data scelta dall'utente -->
        <h4 class="mt-4">Data selezionata: <strong>{{ $data }}</strong></h4>

        <!-- Form di prenotazione -->
        <form action="{{ route('prenotazione.submit', ['id' => $campo->id]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="data" class="form-label">Seleziona la data</label>
                <input type="date" name="data" id="data" class="form-control" required value="{{ $data }}">
            </div>
            <div class="mb-3">
                <label for="orario" class="form-label">Seleziona l'orario</label>
                <select name="orario" id="orario" class="form-select" required>
                    <option value="08:00">08:00</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Prenota</button>
        </form>
        
        

        <a href="{{ route('home') }}" class="btn btn-secondary mt-3">← Torna alla Home</a>
    </div>
</body>
</html>

