@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

<div class="conteudo-pagina">
        <title>Visualizar Produto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <div class="titulo-pagina">
            <h1><br>Visualizar Produto</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}" style="color: black">Voltar</a></li>
                <li><a href="{{ route('produto.create') }}" style="color: black">Novo Produto</a></li>
            </ul>
        </div><br><br>

        <div class="informacao-pagina">
           <div style="width: 50%; margin-left: auto; margin-right: auto">
                <table class="table table-bordered table-striped"  border='1'>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Unidades</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->peso }} kg</td>
                            <td>{{ $produto->unidade }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection