<?php

namespace App\Http\Controllers;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome'   => 'fornecedor 1',
                'status' => 'N',
                'cnpj'   => '0',
            ],
            1 => [
                'nome'   => 'fornecedor 2',
                'status' => 'S',
            ],
        ];

        $msg = isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg;

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
