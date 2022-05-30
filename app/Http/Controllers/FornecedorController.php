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
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
