<h3>Fornecedor</h3>

@php
/**
 *
 * if (!<condicao>) {} // enquanto executa se o retorno for true
 *
 **/
@endphp

{{-- @dd($fornecedores) --}}

{{-- @unless executa se o retorno for falso --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br />
Status: {{ $fornecedores[0]['status'] }}
<br />

{{-- @if ($fornecedores[0]['status'] == 'N')
    Fornecedor inativo
@endif --}}

{{-- @if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
    @endif --}}

@unless($fornecedores[0]['status'] == 'S')
    <!-- se o retorno da condição for false -->
    Fornecedor inativo
@endunless
