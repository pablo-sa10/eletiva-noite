<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projetos extends Controller
{
    public function projetos()
    {
        // $voluntarios = projetos::all();

        return view('ong.projeto');
    }
}
