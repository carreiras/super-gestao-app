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
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? '' }}
    <br />
    Telefone: {{ $fornecedores[1]['ddd'] ?? '' }} {{ $fornecedores[1]['telefone'] ?? '' }}
    @switch($fornecedores[1]['ddd'])
        @case('11')
            São Paulo - SP
        @break

        @case('85')
            Fortaleza - CE
        @break

        @case('32')
            Juiz de Fora - MG
        @break

        @default
            Estado não identificado
    @endswitch
@endisset
