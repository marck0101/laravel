<?php

use Illuminate\Support\Facades\Route;

//para cada view vou ter que criar e passar
// os dados que eu quero que ela receba
Route::get('/', function () {
    $nome = 'Marcos';
    $arr = [10, 20, 30, 40, 50];
    $arrNomes = [
        "Roberto",
        "Lucas",
        "Augusto"
    ];

    return view(
        'welcome',
        [
            'nome' => $nome,
            'arr' => $arr,
            'arrNomes' => $arrNomes
        ]
    );
});
