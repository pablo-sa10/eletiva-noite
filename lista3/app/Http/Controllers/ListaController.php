<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function mostrarExercicio($id){
        return view("exer/$id");
    }

    public function calcularExer1(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return "A soma é " .$valor1+$valor2 ;
    }

    public function calcularExer2(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return "A soma é " .$valor1+$valor2 ;
    }
}
