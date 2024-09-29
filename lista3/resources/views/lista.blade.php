<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Exercícios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <section class="container">
        <h1 class="mt-5 text-center">Lista de Exercícios</h1>
        <div class="table-responsive">
            <table class="table w-50 my-5">
                <thead>
                    <tr>
                        <th class="fs-4" scope="col">Exercício</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 20; $i++)
                        <tr>
                            <td class="fs-5">Exercício {{ $i }}</td>
                            <td><a class="btn btn-primary" href="{{ route('exer', ['id' => $i]) }}">Calcular</a></td>
                        </tr>
                    @endfor;
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>