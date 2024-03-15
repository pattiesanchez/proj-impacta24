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
                <table border="1" width="100%" style="color: white">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Unidades</th>
                        </tr>
                    </thead><br>
                    <tbody> 
                        @foreach($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade_id }}</td>
                                <td><a href=" " style="color: white">Excluir</a></td>
                                <td><a href=" " style="color: white">Editar</a></td>
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