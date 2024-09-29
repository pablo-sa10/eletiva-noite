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
        return "A subtração é " .$valor1 - $valor2 ;
    }

    public function calcularExer3(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return "O produto é " .$valor1 * $valor2 ;
    }

    public function calcularExer4(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');

        if($valor2 == 0){
            return "Não é possivel fazer divisão por zero";
        }
        return "O quociente é " .$valor1 / $valor2 ;
    }

    public function calcularExer5(Request $request){
        $nota1 = (int)$request->input('nota1');
        $nota2 = (int)$request->input('nota2');
        $nota3 = (int)$request->input('nota3');

        return "A média é: ". ($nota1 + $nota2 + $nota3) / 3 ;
        // return "O produto é " .$valor1 * $valor2 ;
    }
}
