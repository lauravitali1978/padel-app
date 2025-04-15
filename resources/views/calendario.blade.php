<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <title>Calendario - {{ $campo->nome }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- FullCalendar CSS -->
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css' rel='stylesheet' />
    </head>
    
<body class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4">Prenota: {{ $campo->nome }}</h2>
        <p>Qui potrai selezionare data e orario per il campo <strong>{{ $campo->nome }}</strong> situato in <em>{{ $campo->posizione }}</em>.</p>

        <div id="calendar" class="bg-white p-3 rounded shadow-sm"></div>

        <div class="alert alert-info">Calendario in fase di sviluppo...</div>

        <a href="{{ route('home') }}" class="btn btn-secondary mt-3">← Torna alla Home</a>
    </div>
        <!-- FullCalendar JS -->
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const calendarEl = document.getElementById('calendar');
        
                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'it',
                    selectable: true,
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: @json($eventi),
        
                    // 👇 Aggiungiamo il comportamento al click su una data
                    dateClick: function(info) {
                        const data = info.dateStr;
                        if (confirm(`Vuoi prenotare il campo per il giorno ${data}?`)) {
                            window.location.href = `/prenota/{{ $campo->id }}?data=${data}`;
                        }
                    }
                });
        
                calendar.render();
            });
        </script>
        

    </body>
    
</body>
</html>
