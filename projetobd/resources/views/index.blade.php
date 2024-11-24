@include('components.navbar')

@php
    $paginas = ['Voluntários', 'Projetos', 'Atividades'];
@endphp

<style>
    .card {
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        text-align: center;
        color: #fff;
        font-weight: bold;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-1 {
        background-color: #f7b267; /* Laranja Suave */
    }

    .card-2 {
        background-color: #4caf50; /* Verde Suave */
    }

    .card-3 {
        background-color: #5d8aa8; /* Azul Suave */
    }
</style>

<section class="container mt-5">
    <h2 class="mb-5">ONG DO PABLITO</h2>

    <div class="row">
        @foreach ($paginas as $index => $pagina)
        <a href="{{ route('voluntarios.index') }}" class="card col-12 mb-3 card-{{ $index + 1 }}">
            <h4>{{ $pagina }}</h4>
        </a>
        @endforeach
    </div>
</section>

<section>
    {{-- GRAFICO --}}
</section>
