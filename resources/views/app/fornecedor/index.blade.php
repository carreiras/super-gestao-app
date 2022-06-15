<h3>Fornecedor</h3>

@php
/**
 *
 *
 **/
@endphp

@isset($fornecedores)
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[0]['nome'] }}
        <br />
        Status: {{ $fornecedores[0]['status'] }}
        <br />
        CNPJ: {{ $fornecedores[1]['cnpj'] ?? '' }}
        <br />
        Telefone: {{ $fornecedores[1]['ddd'] ?? '' }} {{ $fornecedores[1]['telefone'] ?? '' }}
        <hr>
    @endfor
@endisset
