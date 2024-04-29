@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

<div class="conteudo-pagina">
        <title>Cadastro de Produto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <div class="titulo-pagina">
            <h1><br>Cadastrar Novo Produto</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}" style="color: black">Voltar</a></li>
                  <li><a href="">Consulta</a></li>
            </ul>
        </div><br><br>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.produto._components.form_create_edit', ['produtos' => $produtos, 'fornecedores' => $fornecedores])
                @endcomponent             
            </div>
        </div>

    </div>

@endsection

