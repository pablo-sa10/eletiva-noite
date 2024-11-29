@include('components.navbar')

@php
    $paginas = ['voluntarios'=>'Voluntários', 'projeto'=>'Projetos', 'atividades'=>'Atividades'];
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

    .card-voluntarios {
        background-color: #f7b267; /* Laranja Suave */
    }

    .card-projeto {
        background-color: #4caf50; /* Verde Suave */
    }

    .card-atividades {
        background-color: #5d8aa8; /* Azul Suave */
    }
</style>

<section class="container mt-5">
    <h2 class="mb-5">ONG DO PABLITO</h2>

    <div class="row">
        @foreach ($paginas as $index => $pagina)
        <a href="{{ route("ong.$index") }}" class="card col-12 mb-3 card-{{ $index }}">
            <h4>{{ $pagina }}</h4>
        </a>
        @endforeach
    </div>
</section>

<section class="my-5 container d-flex justify-content-center" style="max-height: 500px; max-width: 500px;">
    {{-- GRAFICO --}}
    <canvas class="" id="myChart" width="100" height="100"></canvas>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const labels = @json($labels); // Dados das labels
    const data = @json($data); // Dados para o gráfico

    const backgroundColor = [
        'rgba(255, 99, 132, 0.5)', // Vermelho
        'rgba(54, 162, 235, 0.5)', // Azul
    ]

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                label: 'Total',
                data: data,
                backgroundColor: backgroundColor,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

