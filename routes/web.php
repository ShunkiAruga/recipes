<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', [RecipeController::class, 'index'])
    ->name('recipes.index');

Route::get('/recipes/create', [RecipeController::class, 'create'])
    ->name('recipes.create');

Route::post('/recipes', [RecipeController::class, 'store'])
    ->name('recipes.store');

Route::get('/recipes/{id}', [RecipeController::class, 'show'])
    ->name('recipes.show');

Route::delete('/{id}', [RecipeController::class, 'delete'])
    ->name('recipes.delete');