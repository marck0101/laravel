<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $nome = 'Marcos';

//     return view('welcome', ['nome' => $nome]);
// });

Route::get('/', function () {
    $nome = 'Marcos';

    return view('welcome2', ['nome' => $nome]);
});
