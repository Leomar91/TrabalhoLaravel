<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutoController;  // Adicionado
use App\Http\Controllers\CategoriaController;  // Adicionado
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Rotas para produtos e categorias
    Route::resource('produtos', ProdutoController::class);
    Route::resource('categorias', CategoriaController::class);
});

require __DIR__.'/auth.php';
