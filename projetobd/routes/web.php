<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoluntarioController;

Route::get('/', [VoluntarioController::class, 'index'])->name('voluntarios.index');


Route::get('/voluntarios/create', [VoluntarioController::class, 'create'])->name('voluntarios.create');
Route::post('/voluntarios', [VoluntarioController::class, 'store'])->name('voluntarios.store');
// Route::get('/voluntarios', [VoluntarioController::class, 'index'])->name('voluntarios.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
