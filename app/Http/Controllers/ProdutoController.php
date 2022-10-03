<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index(Request $request)
    {
        $dados = $request->all();
        // $produto = $dados['produto'];
        // $preco = $dados['preco'];
        // $categoria = $dados['categoria'];

        print_r($dados);

        return view(
            'produtos',
            //     [
            //         'produto' => $produto,
            //         'preco' => $preco,
            //         'categoria' => $categoria
            //     ]
        );
    }
}
