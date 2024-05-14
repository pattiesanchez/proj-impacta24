@if(isset($produto->id))
    <form method="post" action="{{ route('produto.update', ['produto' => $produto->id]) }}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{ route('produto.store') }}">
        @csrf
@endif
    <h6 style="color: black; margin-right:500px">FORNECEDOR:</h6>
    <select name="fornecedor_id">
        <option>-- Selecione um Fornecedor --</option>

        @foreach($fornecedores as $fornecedor)
            <option value="{{ $fornecedor->id }}" {{ ($produto->fornecedor_id ?? old('fornecedor_id')) == $fornecedor->id ? 'selected' : '' }} >{{ $fornecedor->nome }}</option>
        @endforeach
    </select><br><br>
    {{ $errors->has('fornecedor_id') ? $errors->first('fornecedor_id') : '' }}

    <input type="text" name="nome" value="{{ $produto->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta"><br><br>
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

    <input type="text" name="descricao" value="{{ $produto->descricao ?? old('descricao') }}" placeholder="Descrição" class="borda-preta"><br><br>
    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

    <input type="text" name="peso" value="{{ $produto->peso ?? old('peso') }}"  placeholder="Peso (kg)" class="borda-preta"><br><br>
    {{ $errors->has('peso') ? $errors->first('peso') : '' }}

    <input type="text" name="unidade" value="{{ $produto->unidade ?? old('unidade') }}"  placeholder="Unidades" class="borda-preta"><br><br>
    {{ $errors->has('unidade') ? $errors->first('unidade') : '' }}
    
    <button type="submit" class="borda-preta">Cadastrar</button>
<form>