@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
<div class="conteudo-pagina">
        <title>Listagem de Produto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <div class="titulo-pagina">
            <h1><br>Listagem de Produtos</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}" style="color: black">Cadastrar Novo</a></li>
            </ul>
        </div><br>

        <div class="informacao-pagina">
            <div style="width: 50%; margin-left: auto; margin-right: auto">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Unidades Estoque</th>
                            <th scope="col" colspan="3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade }}</td>
                                <td><a href="{{  route('produto.show', ['produto' =>  $produto->id ]) }}" style="color: black">Visualizar</a></td>
                                <td>
                                    <form id="form_{{$produto->id}}" method="post" action="{{ route('produto.destroy', ['produto' => $produto->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <!--<button type="submit">Excluir</button>-->
                                        <a href="#" onclick="document.getElementById('form_{{$produto->id}}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td> <a href="{{ route('produto.edit', ['produto' => $produto->id ]) }}">Editar</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $produtos->appends($request)->links() }}
                <br>
                <div>Exibindo {{ $produtos->count() }} produtos de  {{ $produtos->total() }} (de  {{ $produtos->firstItem() }} a  {{ $produtos->lastItem() }})</div>
            </div>
        </div>
    </div>
@endsection