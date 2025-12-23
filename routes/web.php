<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animals')->group(function () {
    Route::get('/creer', [AnimalController::class, 'create'])->name('animals.create');
    Route::get('/{id}', [AnimalController::class, 'show'])->name('animals.show');
    Route::get('/modifier/{id}', [AnimalController::class, 'edit'])->name('animals.edit');
    Route::get('/supprimer/{id}', [AnimalController::class, 'delete'])->name('animals.delete');
});
