@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina" style="background-color: white">

        <div class="titulo-pagina">
            <br><h1>Listagem de Produtos</h1><br>
        </div>
        <br>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}" style="color: black">Novo</a></li>
                <li><a href=" " style="color: black">Consultar</a></li>
            </ul>
        </div><br>

        <div class="informacao-pagina">
            <div style="width: 50%; margin-left: auto; margin-right: auto">
                <table width="100%" style="color: black">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Unidades</th>
                            <th>Ações</th>
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
                </table>
                {{ $produtos->appends($request)->links() }}
                <br>
                <div style="color: preta">Exibindo {{ $produtos->count() }} produtos de  {{ $produtos->total() }} (de  {{ $produtos->firstItem() }} a  {{ $produtos->lastItem() }})</div>
            </div>
        </div>
    </div>
@endsection