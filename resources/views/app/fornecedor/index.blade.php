<h3>Fornecedor</h3>

@php
/**
 *
 *
 **/
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br />
    Status: {{ $fornecedores[0]['status'] }}
    <br />
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}

    {{-- $variavel testada não estiver definica (isset)
    ou
    $variavel testada possuir valor nulo --}}

@endisset
