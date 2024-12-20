<?php

namespace App\Http\Controllers;
use App\Models\Projeto;
use Illuminate\Http\Request;

class projetos extends Controller
{
        // Lista os projetos
    public function projeto()
    {
        $projetos = Projeto::all();
        return view('ong.projeto', compact('projetos'));
    }

    // Formulário de criação
    public function create()
    {
        return view('ong.cadastro_projeto');
    }

    // Salvar novo projeto
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'dt_inic' => 'required|date',
            'dt_fim' => 'nullable|date|after_or_equal:data_inicio',
            //'status' => 'required|string',
        ]);

        // dd($request);

        Projeto::create($request->all());
        return redirect()->route('ong.projeto')->with('success', 'Projeto criado com sucesso!');
    }

    // Formulário de edição
    public function edit($id)
    {
        $projeto = Projeto::findOrFail($id);
        return view('ong.editar_projeto', compact('projeto'));
    }

    // Atualizar projeto
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'dt_inic' => 'required|date',
            'dt_fim' => 'nullable|date|after_or_equal:data_inicio',
        ]);

        $projeto = Projeto::findOrFail($id);
        $projeto->update($request->all());
        return redirect()->route('ong.projeto')->with('success', 'Projeto atualizado com sucesso!');
    }

    // Excluir projeto
    public function destroy($id)
    {
        $projeto = Projeto::findOrFail($id);
        $projeto->delete();
        return redirect()->route('ong.projeto')->with('success', 'Projeto excluído com sucesso!');
    
    }
}
