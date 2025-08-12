<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-lg border-0 rounded-4" style="width: 400px;">
        <div class="card-header bg-primary text-white text-center fs-4">
            📄 Cadastrar Usuário📄
        </div>
        <div class="card-body p-4">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" id="name" 
                           class="form-control" placeholder="Digite seu nome" 
                           value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" 
                           class="form-control" placeholder="Digite seu e-mail" 
                           value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" 
                           class="form-control" placeholder="Digite sua senha" 
                           required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('../voltar') }}" class="btn bg-primary-subtle">⬅ Voltar</a>
                    <button type="submit" class="btn bg-primary-subtle">Cadastrar</button>
                    
                </div>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
