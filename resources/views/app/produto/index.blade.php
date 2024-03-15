@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina" style="background-color: black">

        <div class="titulo-pagina">
            <h1>Listagem de Produtos</h1>
        </div>
        <br><br>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}" style="color: white">Novo</a></li>
                <li><a href=" " style="color: white">Consultar</a></li>
            </ul>
        </div><br><br>

        <div class="informacao-pagina">
            <div style="width: 50%; margin-left: auto; margin-right: auto">
                <table width="100%" style="color: white">
                    <thead>
                        <tr>
                            <th style="color: rgb(255,196,48)">Nome</th>
                            <th style="color: rgb(255,196,48)">Descrição</th>
                            <th style="color: rgb(255,196,48)">Peso</th>
                            <th style="color: rgb(255,196,48)">Unidades</th>
                        </tr>
                    </thead><br>
                    <tbody> 
                        @foreach($produtos as $produto)
                            <tr>
                                <td class="borda-branca">{{ $produto->nome }}</td>
                                <td class="borda-branca">{{ $produto->descricao }}</td>
                                <td class="borda-branca">{{ $produto->peso }}</td>
                                <td class="borda-branca">{{ $produto->unidade }}</td>
                                <td class="borda-branca"><a href=" " style="color: white">Excluir</a></td>
                                <td class="borda-branca"><a href=" " style="color: white">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody> 
                </table><br>

                {{ $produtos->appends($request)->links() }}

                {{ $produtos->count() }}
                {{ $produtos->total() }}
                {{ $produtos->firstItem() }}
                {{ $produtos->lastItem() }}
                <br>
                <div style="color: white">Exibindo {{ $produtos->count() }} produtos de  {{ $produtos->total() }} (de  {{ $produtos->firstItem() }} a  {{ $produtos->lastItem() }})</div>
            </div>
        </div>
    </div>
@endsection