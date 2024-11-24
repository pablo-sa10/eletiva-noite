<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoluntarioController;

Route::controller(VoluntarioController::class)->group(function(){
    Route::get('/voluntarios', 'index')->name('voluntarios.index');
    Route::get('/voluntarios/create', 'create')->name('voluntarios.create');
    Route::post('/voluntarios/salvar', 'store')->name('voluntarios.store');
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
