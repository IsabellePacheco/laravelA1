<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula de Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-lg border-0 rounded-4 p-5 text-center" style="width: 400px;">
        <h1 class="mb-3 text-primary">❤️ Olá ❤️</h1>
        <h2 class="mb-4">Sejam Bem-Vindos!!!</h2>
        <a href="{{ route('user.create') }}" class="btn btn-lg bg-primary-subtle">
             Cadastrar
        </a>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
