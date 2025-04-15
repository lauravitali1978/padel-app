<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Accedi a PadelApp</h4>
                </div>
                <div class="card-body">
                    <!-- Form di login -->
                    <form action="{{ route('login.store') }}" method="POST">
                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <!-- Remember Me Checkbox -->
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Ricordami</label>
                        </div>

                        <!-- Bottone di login -->
                        <button type="submit" class="btn btn-primary w-100">Accedi</button>
                    </form>

                    <p class="text-center mt-3">
                        Non hai un account? <a href="{{ route('register') }}">Registrati</a>
                    </p>

                    <!-- Link per il reset della password -->
                    <p class="text-center">
                        <a href="{{ route('password.request') }}">Hai dimenticato la password?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <p>&copy; 2025 PadelApp - Tutti i diritti riservati</p>
    <p>Indirizzo: Via Fittizia 123, 72100 Brindisi, Italia</p>
    <p>Telefono: +39 123 456 7890</p>
    <p>Email: info@padelapp.com</p>
    <p><a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Cookie Policy</a> | Partita IVA: 12345678901</p>
</footer>
<!-- Bootstrap JS (opzionale) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

