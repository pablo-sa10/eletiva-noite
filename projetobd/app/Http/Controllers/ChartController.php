<?php

namespace App\Http\Controllers;

use App\Models\Voluntario;
use App\Models\projeto;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {

        $totalVoluntarios = Voluntario::count();
        $totalProjetos = Projeto::count();

        // Dados para o gráfico (pode vir do banco de dados)
        $labels = ['Voluntarios', 'Projetos'];
        $data = [$totalVoluntarios, $totalProjetos];

        // Renderiza a view personalizada
        return view('index', compact('labels', 'data'));
    }
}
