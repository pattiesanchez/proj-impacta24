@extends('app.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')
   <div class="conteudo-pagina" style="background-color: black">
        <title>Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <div class="titulo-pagina">
            <h1><br>Homepage</h1>
        </div>
        <div class="sobre-nos">
            <div style="width:100%; margin-left: auto; margin-right: auto; padding-bottom: 50px">
                <h1 style="color: white">Estoque Inteligente: <br>Simplifica o controle de estoque <br>e maximiza seus resultados!</h1>
                <hr>
                <div class="conteudo-pagina" style="background-color: white">
                    <main class="wrapper">
                        <h2 class="wrapper-title" id="services">Quem somos ?</h2>
                        <span id="text-span" style="color: black">Seja bem-vindo à Estoque Inteligente, onde a busca pela excelência e inovação se encontra com o compromisso inflexível com a eficiência. 
                        Nascemos com a visão ousada de redefinir os padrões da indústria de distribuição, e desde então, consolidamos nossa posição como uma empresa 
                        dedicada a oferecer soluções inovadoras e personalizadas. Na Estoque Inteligente, acreditamos que o sucesso de nossos clientes é o nosso sucesso. 
                        Por isso, estamos sempre disponíveis para oferecer suporte personalizado e assistência especializada, garantindo que cada cliente possa aproveitar 
                        ao máximo nossa tecnologia e alcançar seus objetivos de negócios.
                        </span>
                        <br>
                        <section class="services-container">
                            <div class="card services-item" style="height: 20rem;">
                                <div class="card-body">
                                    <h2 class="services-title">Missão</h2>
                                    <p class="services-text"  style="color: black">
                                        Facilitar a gestão de estoque para empresas de todos os portes, oferecendo soluções inteligentes e
                                        eficazes por meio de nosso software, garantindo que os clientes possam armazenar e encontrar
                                        produtos de forma rápida, precisa e econômica.
                                    </p>
                                </div>
                            </div>

                            <div class="card services-item">
                                <div class="card-body">
                                    <h2 class="services-title">Visão</h2>
                                    <p class="services-text" style="color: black">
                                        Ser reconhecida como líder de mercado em soluções de gestão de estoque, destacando-nos pela
                                        inovação, eficiência e compromisso com a satisfação do cliente. Almejamos tornar-nos o parceiro
                                        preferido das empresas que buscam otimizar seus processos de armazenamento e controle de estoque.
                                    </p>
                                </div>
                            </div>
                
                            <div class="card services-item" style="height: 20.50rem;">
                                <div class="card-body">
                                    <h2 class="services-title">Valores</h2>
                                    <p class="services-text" style="color: black">
                                        <b>Excelência: </b>Buscamos a excelência em todas as áreas, do desenvolvimento do software ao
                                        atendimento ao cliente.
                                        <b>Inovação: </b>Estamos sempre buscando novas ideias e tecnologias para melhorar nossas soluções.
                                        <b>Confiança: </b>Valorizamos a confiança dos clientes e colaboradores, agindo com transparência e
                                        integridade.
                                    </p>
                                </div>
                            </div>
                        </section>

                        <h2 class="wrapper-title">Serviços</h2>
                        <section class="portfolio" id="portfolio">
                            <figure class="portfolio-image rotation-right">
                                <img src="./img/pexels-hasan-albari-1229861.jpg" alt="Reunião do projeto">
                                <figcaption>Atualizações e Manutenção</figcaption>
                            </figure>

                            <figure class="portfolio-image rotation-left">
                                <img src="./img/pexels-lisa-811587.jpg" alt="Reunião do projeto">
                                <figcaption>Análise de Dados e Relatórios</figcaption>
                            </figure>

                            <figure class="portfolio-image rotation-right">
                                <img src="./img/pexels-mikael-blomkvist-6476587.jpg" alt="Reunião do projeto">
                                <figcaption>Auditorias e Otimização de Estoque</figcaption>
                            </figure>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection