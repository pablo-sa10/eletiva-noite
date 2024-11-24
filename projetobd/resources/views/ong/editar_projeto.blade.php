@include('components.navbar')

<section class="container">
    <div class="text-center">
        <h2 class="mt-5">Editar Projeto</h2>
    </div>

    <form action="{{ route('ong.projeto.update', $projeto->id) }}" method="POST">
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
            <label for="data_inicio" class="form-label">Data de Início</label>
            <input type="date" class="form-control" id="data_inicio" name="data_inicio" value="{{ old('data_inicio', $projeto->data_inicio) }}" required>
        </div>
        <div class="mb-3">
            <label for="data_fim" class="form-label">Data de Fim (opcional)</label>
            <input type="date" class="form-control" id="data_fim" name="data_fim" value="{{ old('data_fim', $projeto->data_fim) }}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="ativo" {{ old('status', $projeto->status) == 'ativo' ? 'selected' : '' }}>Ativo</option>
                <option value="concluído" {{ old('status', $projeto->status) == 'concluído' ? 'selected' : '' }}>Concluído</option>
                <option value="pendente" {{ old('status', $projeto->status) == 'pendente' ? 'selected' : '' }}>Pendente</option>
            </select>
        </div>

        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Atualizar Projeto</button>
            <a href="{{ route('ong.projeto') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</section>
