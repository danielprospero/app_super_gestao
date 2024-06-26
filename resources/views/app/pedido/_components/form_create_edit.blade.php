@if(isset($cliente->id))
    <form method="post" action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{ route('cliente.store') }}">
        @csrf
@endif

    <input type="text" name="nome" value="{{ $cliente->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

    @if(isset($cliente->id))
        <Button type="submit" class="borda-preta">Atualizar</Button>
    @else
        <button type="submit" class="borda-preta">Cadastrar</button>
    @endif
</form>