<h3>Fornecedores</h3>


@php


@endphp


@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)

        Iteracao atual: {{ $loop->iteration }}
        <br />
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Fornecedor: {{ $fornecedor['status'] }}
        <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? 'dado nao foi preenchido'}}
        <br />
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}

        @if($loop->first)
            Primeira iteracao
        @endif

        @if($loop->last)
            Ultima iteracao

            <br>
            Total de Registos : {{ $loop->count }}
        @endif
        <hr />
    @empty
        Nao existem Fornecedores cadastrados.
    @endforelse
@endisset