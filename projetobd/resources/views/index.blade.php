<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrados da ONG</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<style>
    .largura {
        width: 21%;
    }
</style>

<body>
    <section class="container">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="text-center">
            <h2 class="mt-5">Cadastro de Voluntários</h2>
        </div>

        <table class="table text-center mt-5 table-striped table-dark">
            <thead>
                <tr>
                    <th class="largura" scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th class="largura" scope="col">Email</th>
                    <th class="largura" scope="col">Telefone</th>
                    <th class="largura" scope="col">Área de Atuação</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Pablo</th>
                    <td>21</td>
                    <td>pablomoura2016@gmail.com</td>
                    <td>(18) 997526520</td>
                    <td>Médico</td>
                    <td><button class="btn btn-primary">Editar</button></td>
                    <td><button class="btn btn-danger">Excluir</button></td>
                </tr>

                @if(isset($voluntarios))
                @foreach($voluntarios as $voluntario)
                <tr>
                    <th scope="row">{{ $voluntario->nome }}</th>
                    <td>{{ $voluntario->idade }}</td>
                    <td>{{ $voluntario->email }}</td>
                    <td>{{ $voluntario->telefone }}</td>
                    <td>{{ $voluntario->atuacao }}</td>
                    <td><button class="btn btn-primary">Editar</button></td>
                    <td><button class="btn btn-danger">Excluir</button></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="7">Nenhum voluntário encontrado.</td>
                </tr>
                @endif

            </tbody>
        </table>
        <div class="text-end">
            <a href="{{ route('voluntarios.create') }}" class="btn btn-success">Adicionar Voluntário</a>
        </div>
    </section>
</body>

</html>