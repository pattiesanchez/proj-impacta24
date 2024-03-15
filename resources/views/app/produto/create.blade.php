@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina" style="background-color: black">

        <div class="titulo-pagina">
            <h1>Adicionar Produto</h1>
        </div>
        <br><br>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}" style="color: white">Voltar</a></li>
                <li><a href=" " style="color: white">Consultar</a></li>
            </ul>
        </div><br><br>

        <div class="informacao-pagina">
            <div style="width: 50%; margin-left: auto; margin-right: auto">
                <form method="post" action="{{ route('produto.store') }}">
                    @csrf
                    <input type="text" name="nome" value="" placeholder="Nome" class="borda-branca">
                    <input type="text" name="descricao" value="" placeholder="Descrição" class="borda-branca">
                    <input type="text" name="peso" value="" placeholder="Peso" class="borda-branca">
                    <select name="unidade_id" style="background-color:black; border: #fffff">
                        <option>--- Unidades em estoque ----</option>
                        @foreach($unidades as $unidade)
                            <option value="{{ $unidade->id }}">{{ $unidade->descricao }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="borda-branca">Cadastrar</button>
                </form>

            </div>
        </div>
    </div>
@endsection