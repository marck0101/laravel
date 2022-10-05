<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index(Request $request)
    {
        //opção 1
        // $dados = $request->all();
        // $produto = $dados['produto'];
        // $preco = $dados['preco'];
        // $categoria = $dados['categoria'];

        // opção 2
        //nos () passa o valor que vai ser buscado na url, produto
        // $produto = $request->query('produto');
        // $preco = $request->query('preco');
        // $categoria = $request->query('categoria');

        // opção3
        // usa o método Post dentro do formulário
        // vai ter que ser criada uma rota específica para o método POST
        $produto = $request->input('produto');
        $preco = $request->input('preco');
        $categoria = $request->input('categoria');

        // print_r($dados);

        // usado nas opções um e dois. Mas pode ser passado todas essas variaveis em um array
        // return view(
        //     'produtos',
        //     [
        //         'produto' => $produto,
        //         'preco' => $preco,
        //         'categoria' => $categoria
        //     ]
        // );

        // opção 4
        // usa o método Post dentro do formulário
        $dados = [
            'produto' => $request->input('produto'),
            'preco' => $request->input('preco'),
            'categoria' => $request->input('categoria')
        ];

        return view('produtos', $dados);
    }
    public function excluir($id)
    {
        echo $id;
    }
}
