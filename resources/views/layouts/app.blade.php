<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PadelApp')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        footer a {
            color: #ccc;
        }
        footer a:hover {
            color: #fff;
        }
    </style>
</head>
<body>
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


    <!-- Contenuto principale -->
    <div class="container py-5">
        @yield('content') <!-- Questa sezione sarà riempita nelle viste figlie -->
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 PadelApp - Tutti i diritti riservati</p>
        <p>Indirizzo: Via Fittizia 123, 72100 Brindisi, Italia</p>
        <p>Telefono: +39 123 456 7890</p>
        <p>Email: info@padelapp.com</p>
        <p><a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Cookie Policy</a> | Partita IVA: 12345678901</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

