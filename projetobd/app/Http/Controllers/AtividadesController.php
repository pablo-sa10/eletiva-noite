<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtividadesController extends Controller
{
    public function atividades()
    {
        // $voluntarios = projetos::all();

        return view('ong.atividade');
    }
}
