@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
<div class="conteudo-pagina" style="background-color: white; height: 65%">
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <div class="titulo-pagina">
            <h1><br>Login</h1><br>
        </div>
        <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto; margin-top: 5%">
                <form method="post" action="{{ route('site.login') }}">
                    @csrf
                    <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário">
                        {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}<br><br>
                    
                    <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha">
                        {{ $errors->has('senha') ? $errors->first('senha') : '' }}<br><br>

                    <button type="submit" class="borda-branca">Acessar</button>
                </form>
                {{ isset($erro) && $erro != '' ? $erro : '' }}
            </div>
        </div>
    </div>
    <div class="rodape">
        <div class="redes-sociais">
            <h2 style="color: white">Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2 style="color: white">Contato</h2><br>
            <span>(11) 3333-4444</span>
            <br>
            <span>estoque-inteligente@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2 style="color: white">Localização</h2><br>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
