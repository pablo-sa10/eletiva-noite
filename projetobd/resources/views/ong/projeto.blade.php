@include('components.navbar')

<section class="container">
    @if(session('success'))
    <div class="alert alert-success mt-5">
        {{ session('success') }}
    </div>
    @endif

    <div class="text-center">
        <h2 class="mt-5">Gerenciar Projetos</h2>
    </div>

    <div class="table-responsive">
        <table class="table text-center mt-5 table-striped table-dark">
            <thead>
                <tr>
                    <th class="largura" scope="col">Nome</th>
                    <th class="largura" scope="col">Descrição</th>
                    <th scope="col">Data Início</th>
                    <th scope="col">Data Fim</th>
                    <th class="largura" scope="col">Status</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projetos as $projeto)
                <tr>
                    <th scope="row">{{ $projeto->nome }}</th>
                    <td>{{ $projeto->descricao }}</td>
                    <td>{{ \Carbon\Carbon::parse($projeto->data_inicio)->format('d/m/Y') }}</td>
                    <td>{{ $projeto->data_fim ? \Carbon\Carbon::parse($projeto->data_fim)->format('d/m/Y') : 'Sem previsão' }}</td>
                    <td>{{ $projeto->status }}</td>
                    <td><a href="{{ route('ong.projeto.edit', $projeto->id) }}" class="btn btn-primary">Editar</a></td>
                    <td>
                        <form action="{{ route('ong.projeto.destroy', $projeto->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este projeto?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">Nenhum projeto encontrado.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="text-end">
        <a href="{{ route('ong.cadastro_projeto') }}" class="btn btn-success">Adicionar Projeto</a>
        <a href="/" class="btn btn-danger">Voltar</a>
    </div>
</section>
