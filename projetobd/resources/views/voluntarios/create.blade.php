<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <section class="container mt-5">
        <h2 class="mb-5">Cadastro de Voluntário</h2>
        <form method="POST" action="{{ route('voluntarios.store') }}">
            @csrf
            <div class="mb-3 row">
                <div class="col-md-7">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control border border-dark" id="nome" name="nome" required>
                </div>
                <div class="col-md-1">
                    <label for="idade" class="form-label">Idade</label>
                    <input type="number" class="form-control border border-dark" id="idade" name="idade" required>
                </div>
                <div class="col-md-5">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control border border-dark" id="email" name="email" required>
                </div>
                <div class="col-md-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control border border-dark" id="telefone" name="telefone" required>
                </div>
                <div class="col-md-8">
                    <label for="atuacao" class="form-label">Atuação</label>
                    <input type="text" class="form-control border border-dark" id="atuacao" name="atuacao" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

    </section>
</body>

</html>