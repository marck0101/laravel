<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $usuario = "Marcos";
        $perfil = "Massa";
        $empresa = "google.com.br";

        $dados = [
            'usuario' => $usuario,
            'perfil' => $perfil,
            'empresa' => $empresa
        ];

        return view('home', $dados);
    }
}





//  para ter criaddo esse controller foi cigitado no terminal
//  php artisan make:controller HomeController
