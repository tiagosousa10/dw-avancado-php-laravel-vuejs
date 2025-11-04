<h3>Fornecedores</h3>


@php


@endphp


@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br />
    Fornecedor: {{ $fornecedores[0]['status'] }}
    <br />
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'dado nao foi preenchido' }}
    <br />
    Telefone:  ({{ $fornecedores[0]['ddd'] ?? '' }})  {{ $fornecedores[1]['telefone'] ?? '' }}

    @switch($fornecedores[0]['ddd'])
        @case('11')
            Sao Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Rio de Janeiro - RJ
            @break
        @default
            Outros

    @endswitch



@endisset

