@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="conteudo-pagina">
    <title>Lista Fornecedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="titulo-pagina">
        <h1><br>Listagem de Fornecedores</h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
             <li><a href="{{ route('app.fornecedor') }}">Voltar</a></li>
        </ul>
    </div><br>

    <div class="informacao-pagina">
        <div style="width: 90%; margin-left: auto; margin-right: auto;">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Site</th>
                        <th>UF</th>
                        <th>E-mail</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($fornecedores as $fornecedor)
                    <tr>
                        <td>{{ $fornecedor->nome }}</td>
                        <td>{{ $fornecedor->site }}</td>
                        <td>{{ $fornecedor->uf }}</td>
                        <td>{{ $fornecedor->email }}</td>
                        <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                        <td>
                            <form id="form_{{$fornecedor->id}}" method="post" action="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="#" onclick="document.getElementById('form_{{$fornecedor->id}}').submit()">Excluir</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $fornecedores->appends($request)->links() }}
            <br>
            Exibindo {{ $fornecedores->count() }} fornecedores de {{ $fornecedores->total() }} (de {{ $fornecedores->firstItem() }} a {{ $fornecedores->lastItem() }})
        </div>
    </div>
</div>
@endsection
