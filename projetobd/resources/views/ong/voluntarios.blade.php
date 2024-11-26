@include('components.navbar')

<style>
    .largura {
        width: 21%;
    }
</style>

<section class="container">
    @if(session('success'))
    <div class="alert alert-success mt-5">
        {{ session('success') }}
    </div>
    @endif

    <div class="text-center">
        <h2 class="mt-5">Cadastro de Voluntários</h2>
    </div>

    <div class="table-responsive">
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
                    <td><a class="btn btn-primary" href="{{ route('ong.editarVoluntario', $voluntario->id) }}">Editar</a></td>
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

    </div>
    <div class="text-end">
        <a href="{{ route('ong.cadastro_voluntario') }}" class="btn btn-success">Adicionar Voluntário</a>
        <a href="/" class="btn btn-danger">Voltar</a>
    </div>
</section>