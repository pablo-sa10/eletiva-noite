@include('components.navbar')

<section class="container">
    <div class="text-center">
        <h2 class="mt-5">Editar Projeto</h2>
    </div>

    <form action="{{ route('ong.atualizarVoluntario', $voluntario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $voluntario->nome) }}" required>
        </div>
        <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input type="number" class="form-control" id="idade" name="idade" value="{{ old('idade', $voluntario->idade) }}" rows="4" required></input>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $voluntario->email) }}" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone', $voluntario->telefone) }}">
        </div>
        <div class="mb-3">
            <label for="atuacao" class="form-label">Atuação</label>
            <input type="text" class="form-control" id="atuacao" name="atuacao" value="{{ old('atuacao', $voluntario->atuacao) }}">
        </div>

        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Atualizar Voluntario</button>
            <a href="{{ route('ong.voluntarios') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</section>
