@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

<div class="conteudo-pagina">
        <title>Visualizar Produto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <div class="titulo-pagina">
            <h1 style="margin-right: 35px"><br>Visualizar Produto</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}" style="color: black">Voltar</a></li>
            </ul>
        </div><br><br>

        <div class="informacao-pagina">
           <div style="width: 60%; margin-left: auto; margin-right: auto">
                <table class="table table-bordered table-striped" border='1'>
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Unidades Estoque</th>
                            <th scope="col">Nome Fornecedor</th>
                            <th scope="col">UF Fornecedor</th>
                            <th scope="col">Site Fornecedor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->peso }} kg</td>
                            <td>{{ $produto->unidade }}</td>
                            <td>{{ $produto->fornecedor->nome }}</td>
                            <td>{{ $produto->fornecedor->uf }}</td>
                            <td>{{ $produto->fornecedor->site }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection