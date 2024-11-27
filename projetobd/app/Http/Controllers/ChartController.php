<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        // Dados para o gráfico (pode vir do banco de dados)
        $labels = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'];
        $data = [10, 25, 14, 32, 20];

        // Renderiza a view personalizada
        return view('index', compact('labels', 'data'));
    }
}
