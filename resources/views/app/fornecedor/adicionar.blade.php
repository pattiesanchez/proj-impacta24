@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="conteudo-pagina">
    <title>Fornecedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="titulo-pagina">
        <h1><br>Cadastrar Fornecedor</h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor') }}" style="color: black">Voltar</a></li>
            <li><a href="{{ route('app.fornecedor.listar') }}" style="color: black">Consultar</a></li>
        </ul>
    </div><br>

    <div class="informacao-pagina">
        {{ $msg ?? '' }}
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form method="post" action="{{ route('app.fornecedor.adicionar') }}">
                <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}" >
                @csrf
                <input type="text" name="nome" value="{{ $fornecedor->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta"><br><br>
                {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                
                <input type="text" name="site" value="{{ $fornecedor->site ?? old('site') }}" placeholder="Site" class="borda-preta"><br><br>
                {{ $errors->has('site') ? $errors->first('site') : '' }}

                <input type="text" name="uf" value="{{ $fornecedor->uf ?? old('uf') }}"  placeholder="UF" class="borda-preta"><br><br>
                {{ $errors->has('uf') ? $errors->first('uf') : '' }}

                <input type="text" name="email" value="{{ $fornecedor->email ?? old('email') }}" placeholder="E-mail" class="borda-preta"><br><br>
                {{ $errors->has('email') ? $errors->first('email') : '' }}

                <button type="submit" class="borda-preta">Cadastrar</button>
            <form>
        </div>
    </div>
</div>

@endsection

