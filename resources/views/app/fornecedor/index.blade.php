@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="conteudo-pagina">
    <title>Fornecedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="titulo-pagina">
        <h1><br>Pesquisar Fornecedores</h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}" style="color: black">Cadastrar Novo</a></li>
            <li><a href="{{ route('app.fornecedor.listar') }}" style="color: black">Consultar</a></li>
        </ul>
    </div><br>

    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form method="post" action="{{ route('app.fornecedor.listar') }}">
                @csrf
                <input type="text" name="nome" placeholder="Nome" class="borda-preta"><br><br>
                <input type="text" name="uf" placeholder="UF" class="borda-preta"><br><br>
                <button type="submit" class="borda-preta">Pesquisar</button>
            <form>
        </div>
    </div>
</div>

@endsection

