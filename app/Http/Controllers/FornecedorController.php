<?php

namespace App\Http\Controllers;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome'     => 'fornecedor 1',
                'status'   => 'N',
                'cnpj'     => '0',
                'ddd'      => '11', // São Paulo (SP)
                'telefone' => '00000-0000',
            ],
            1 => [
                'nome'     => 'fornecedor 2',
                'status'   => 'S',
                'cpf'      => null,
                'ddd'      => '85', // Fortaleza (CE)
                'telefone' => '11111-1111',
            ],
            2 => [
                'nome'     => 'fornecedor 2',
                'status'   => 'S',
                'cpf'      => null,
                'ddd'      => '32', // Juiz de Fora (MG)
                'telefone' => '22222-2222',
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
