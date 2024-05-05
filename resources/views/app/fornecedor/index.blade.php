<h3>Fornecedores</h3>

{{-- Comentário no blede --}}

{{'teste'}}
<?= 'teste' ?>


@php
    // Comentário no PHP
@endphp

@isset($fornecedores)
    @foreach ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{ $fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? ''}} {{ $fornecedor['telefone'] ?? ''}}
        <hr>
    @endforeach
@endisset


