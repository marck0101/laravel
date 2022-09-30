<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function() {
   return view('home');
});

// Route::view('/', 'home'); // tem uma forma facilitada

Route::get('/produtos', function() {
    return view('produtos');
});

// // no exemplo abaixo o id/variavel deve ser o parametro usado na fincao
// Route::get('/produtos/{nomeProduto}', function($nomeProduto) { //pagina de um único produto, prouto em si
//     echo 'Página de produtos:  '. $nomeProduto;
// });

Route::get('/produtos/{nomeProduto}/comentario/{id}', function($nomeProduto, $id) {
    echo 'Esse é o comentario do "id" '  .$id. ' do produto: ' . $nomeProduto;
});






