@include('components.navbar');

<section class="container mt-5">
    <h2 class="mb-5">Cadastro de Voluntário</h2>
    <form method="POST" action="{{ route('ong.salvarVoluntario') }}">
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