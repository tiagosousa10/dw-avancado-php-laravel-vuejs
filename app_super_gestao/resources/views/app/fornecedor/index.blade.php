<h3>Fornecedores</h3>


@php


@endphp


@isset($fornecedores)

    @foreach ( $fornecedores as $indice =>$fornecedor )


    Fornecedor: {{ $fornecedor['nome'] }}
    <br />
    Fornecedor: {{ $fornecedor['status'] }}
    <br />
    CNPJ: {{ $fornecedor['cnpj'] ?? 'dado nao foi preenchido' }}
    <br />
    Telefone:  ({{ $fornecedor['ddd'] ?? '' }})  {{ $fornecedor['telefone'] ?? '' }}
    <hr/>


@endforeach







@endisset

