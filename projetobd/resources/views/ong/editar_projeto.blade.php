@include('components.navbar')

<section class="container">
    <div class="text-center">
        <h2 class="mt-5">Editar Projeto</h2>
    </div>

    <form action="{{ route('ong.atualizarProjeto', $projeto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Projeto</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $projeto->nome) }}" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="4" required>{{ old('descricao', $projeto->descricao) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="dt_inic" class="form-label">Data de Início</label>
            <input type="date" class="form-control" id="dt_inic" name="dt_inic" value="{{ old('dt_inic', $projeto->dt_inic) }}" required>
        </div>
        <div class="mb-3">
            <label for="dt_fim" class="form-label">Data de Fim (opcional)</label>
            <input type="date" class="form-control" id="dt_fim" name="dt_fim" value="{{ old('dt_fim', $projeto->dt_fim) }}">
        </div>

        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Atualizar Projeto</button>
            <a href="{{ route('ong.projeto') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</section>
