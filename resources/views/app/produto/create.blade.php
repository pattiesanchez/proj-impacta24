@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina" style="background-color: white">

        <div class="titulo-pagina">
            <h1>Adicionar Produto</h1>
        </div>
        <br><br>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}" style="color: black">Voltar</a></li>
                <li><a href=" " style="color: black">Consultar</a></li>
            </ul>
        </div><br><br>

        <div class="informacao-pagina">
            <div style="width: 50%; margin-left: auto; margin-right: auto">
                <form method="post" action="{{ route('produto.store') }}">
                    @csrf
                    <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta">
                    <div class="alert alert-danger" style="color: black;">{{ $errors->has('nome') ? $errors->first('nome') : '' }}</div>

                    <input type="text" name="descricao" value="{{ old('descricao') }}" placeholder="Descrição" class="borda-preta">
                    <div class="alert alert-danger" style="color: black;">{{ $errors->has('descricao') ? $errors->first('descricao') : '' }}</div>

                    <input type="text" name="peso" value="{{ old('peso') }}" placeholder="Peso" class="borda-preta">
                    <div class="alert alert-danger" style="color: black;">{{ $errors->has('peso') ? $errors->first('peso') : '' }}</div>

                    <input type="text" name="unidade" value="{{ old('unidade') }}" placeholder="Unidades em estoque" class="borda-preta">
                    <div class="alert alert-danger" style="color: black;">{{ $errors->has('unidade') ? $errors->first('unidade') : '' }}</div>

                    <button type="submit" class="borda-preta" style="color: white">Cadastrar</button>
                </form>

            </div>
        </div>
    </div>
@endsection