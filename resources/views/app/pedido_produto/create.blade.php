@extends('app.layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')
    
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p> Adicionar Produto ao Pedido </p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
            </ul>
        </div>

        <div class="informacao">                

            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <h3> Detalhes do Pedido </h3>
                <h4> Pedido ID: {{ $pedido->id }} </h4>
                <h4> Cliente: {{ $pedido->cliente_id }} </h4>
                <h3> Itens do Pedido </h3>
                <table border="1" style="width: 100%;">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Produto </th>
                            <th> Data que o produto foi adicionado </th>
                            <th> Quantidade </th>
                            <th> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedido->produtos as $produto)
                            <tr>
                                <td> {{ $produto->id }} </td>
                                <td> {{ $produto->nome }} </td>
                                <td> {{ $produto->pivot->created_at }} </td>
                                <td> {{ $produto->pivot->quantidade }} </td>
                                <td> 
                                    <form id="form_{{$produto->pivot->id}}" method="post" action="{{ route('pedido-produto.destroy', ['pedidoProduto' => $produto->pivot->id, 'pedido' => $pedido->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#" onclick="document.getElementById('form_{{$produto->pivot->id}}').submit()">Excluir</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @component('app.pedido_produto._components.form_create_edit', ['pedido' => $pedido, 'produtos' => $produtos])
                @endcomponent
            </div>
        </div>
    </div>


@endsection