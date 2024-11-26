@include('components.navbar')

<section class="container">
    <div class="text-center">
        <h2 class="mt-5">Cadastrar Novo Projeto</h2>
    </div>

    <form action="{{ route('ong.salvarProjeto') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Projeto</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="4" required>{{ old('descricao') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="dt_inic" class="form-label">Data de Início</label>
            <input type="date" class="form-control" id="dt_inic" name="dt_inic" value="{{ old('dt_inic') }}" required>
        </div>
        <div class="mb-3">
            <label for="dt_fim" class="form-label">Data de Fim (opcional)</label>
            <input type="date" class="form-control" id="dt_fim" name="dt_fim" value="{{ old('dt_fim') }}">
        </div>

        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Cadastrar Projeto</button>
            <a href="{{ route('ong.projeto') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</section>
