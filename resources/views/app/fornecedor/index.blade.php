<h1>Fornecedor</h1>
{{-- Comentário descartado pelo interpretador Blade --}}


@php
   #Codificação PHP
    
@endphp



@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['CNPJ'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if($loop->first)
            Primeira iteração no loop

            <br>
            Total de registros: {{ $loop->count }}
        @endif

        @if($loop->last)
            Última iteração no loop
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset
