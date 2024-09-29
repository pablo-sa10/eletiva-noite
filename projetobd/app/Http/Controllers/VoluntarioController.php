<?php

namespace App\Http\Controllers;

use App\Models\Voluntario;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    public function create()
    {
        return view('voluntarios.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer',
            'email' => 'required|email|unique:voluntarios,email',
            'telefone' => 'required|string',
            'atuacao' => 'required|string|max:255',
        ]);

        Voluntario::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'atuacao' => $request->atuacao,
        ]);

        return redirect()->to('/')->with('success', 'Voluntário cadastrado com sucesso!');
    }

    public function index()
    {
        $voluntarios = Voluntario::all();

        // dd($voluntarios);

        return view('index', compact('voluntarios'));
    }
}
