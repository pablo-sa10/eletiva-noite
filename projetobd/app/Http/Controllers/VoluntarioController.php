<?php

namespace App\Http\Controllers;

use App\Models\Voluntario;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    public function create()
    {
        return view('ong.cadastro_voluntario');
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

        return redirect()->route('ong.voluntarios')->with('success', 'Voluntário cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $voluntario = Voluntario::findOrFail($id);
        return view('ong.editar_voluntario', compact('voluntario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer',
            'email' => 'required|email|unique:voluntarios,email,' . $id,
            'telefone' => 'required|string',
            'atuacao' => 'required|string|max:255',
        ]);

        $voluntario = Voluntario::findOrFail($id);
        $voluntario->update($request->all());
        return redirect()->route('ong.voluntarios')->with('success', 'Voluntario atualizado com sucesso!');
    }

    public function voluntarios()
    {
        $voluntarios = Voluntario::all();

        return view('ong.voluntarios', compact('voluntarios'));
    }
}
