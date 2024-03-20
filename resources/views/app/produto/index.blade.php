@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina" style="background-color: white">

        <div class="titulo-pagina">
            <h1>Listagem de Produtos</h1>
        </div>
        <br><br>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}" style="color: black">Novo</a></li>
                <li><a href=" " style="color: black">Consultar</a></li>
            </ul>
        </div><br><br>

        <div class="informacao-pagina">
            <div style="width: 50%; margin-left: auto; margin-right: auto">
                <table width="100%" style="color: black">
                    <thead>
                        <tr>
                            <th style="color: rgb(255,196,48)">Nome</th>
                            <th style="color: rgb(255,196,48)">Descrição</th>
                            <th style="color: rgb(255,196,48)">Peso</th>
                            <th style="color: rgb(255,196,48)">Unidades</th>
                            <th style="color: rgb(255,196,48);">Ações</th>
                        </tr>
                    </thead><br>
                    <tbody> 
                        @foreach($produtos as $produto)
                            <tr>
                                <td class="borda-preta">{{ $produto->nome }}</td>
                                <td class="borda-preta">{{ $produto->descricao }}</td>
                                <td class="borda-preta">{{ $produto->peso }}</td>
                                <td class="borda-preta">{{ $produto->unidade }}</td>
                                <td class="borda-preta"><a href=" " style="color: black">Excluir</a></td>
                                <td class="borda-preta"><a href=" " style="color: black">Editar</a></td>
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
                <div style="color: preta">Exibindo {{ $produtos->count() }} produtos de  {{ $produtos->total() }} (de  {{ $produtos->firstItem() }} a  {{ $produtos->lastItem() }})</div>
            </div>
        </div>
    </div>
@endsection