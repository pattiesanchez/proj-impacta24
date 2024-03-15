@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina" style="background-color: black; height: 65%">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>
        <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto; margin-top: 5%">
                <form action={{ route('site.login') }} method="post">
                    @csrf
                    <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="borda-branca" style="color: white">
                    <div class="alert alert-danger" style="color: white;">{{ $errors->has('usuario') ? $errors->first('usuario') : '' }}</div>

                    <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha" class="borda-branca">
                    <div class="alert alert-danger" style="color: white;">{{ $errors->has('senha') ? $errors->first('senha') : '' }}</div>

                    <button type="submit" class="borda-branca">Acessar</button>
                </form>
                <div class="alert alert-danger" style="color: white;">{{ isset($erro) && $erro != '' ? $erro : '' }}</div>
            </div>
        </div>
    </div>
    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>estoque-inteligente@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
