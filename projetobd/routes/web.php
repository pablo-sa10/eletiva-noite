<?php

use App\Http\Controllers\AtividadesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\projetos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoluntarioController;

Route::controller(VoluntarioController::class)->group(function(){
    Route::get('/ong', 'voluntarios')->name('ong.voluntarios');
    Route::get('/ong/cadastro_voluntario', 'create')->name('ong.cadastro_voluntario');
    Route::get('/ong/editarVoluntario/{id}', 'edit')->name('ong.editarVoluntario');
    Route::post('/ong/salvarVoluntario', 'store')->name('ong.salvarVoluntario');
    Route::put('/ong/atualizarVoluntario/{id}', 'update')->name('ong.atualizarVoluntario'); 
});

Route::controller(projetos::class)->group(function () {
    Route::get('/ong/projeto', 'projeto')->name('ong.projeto'); 
    Route::get('/ong/cadastro_projeto', 'create')->name('ong.cadastro_projeto'); 
    Route::get('/ong/editar_projeto/{id}', 'edit')->name('ong.projeto.edit'); 
    Route::post('/ong/salvarProjeto', 'store')->name('ong.salvarProjeto'); 
    Route::put('/ong/atualizarProjeto/{id}', 'update')->name('ong.atualizarProjeto'); 
    Route::delete('/ong/excluir/{id}', 'destroy')->name('ong.projeto.destroy'); 
});


Route::controller(AtividadesController::class)->group(function(){
    Route::get('/ong/atividade', 'atividades')->name('ong.atividades');
    // Route::get('/ong/cadastro_voluntario', 'create')->name('ong.cadastro_voluntario');
    // Route::post('/ong/salvar', 'store')->name('ong.salvarVoluntario');
});

Route::get('/', function () {
    return view('index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('/voluntarios/', VoluntarioController::class);

require __DIR__.'/auth.php';
