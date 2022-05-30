<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class TesteController extends Controller
{
    /**
     * Encaminhando parâmetros do controlador para visualização
     *
     * @param int $p1
     * @param int $p2
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function Teste(int $p1, int $p2)
    {
        // echo "A soma de $p1 + $p2 é: " . ($p1 + $p2);

        // array associativo
        // return view('site.teste', ['p1' => $p1, 'p2' => $p2]);

        // compact
        //return view('site.teste', compact('p1', 'p2'));

        // with
        return view('site.teste')
            ->with('p1', $p1)
            ->with('p2', $p2);
    }
}
