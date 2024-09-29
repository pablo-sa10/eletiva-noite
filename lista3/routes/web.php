<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('lista');
});

Route::get('/exer/{id}', [ListaController::class, 'mostrarExercicio'])->name('exer');

//for para criar 20 rotas
for($i = 1; $i <= 20; $i++){
    Route::post("/respostaexer$i", [ListaController::class, "calcularExer$i"]);
}