<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;

// algumas versões funciona assim
// Route::get('/', 'HomeController@index');

// Mas a que eu tenho instalada a sintexe precisa ser assim
Route::get('/', [HomeController::class, 'index']);

Route::get('/produtos', [ProdutoController::class, 'index']);

Route::post('/produtos', [ProdutoController::class, 'index']);
Route::post('/produtos/excluir{id}', [ProdutoController::class, 'index']);
