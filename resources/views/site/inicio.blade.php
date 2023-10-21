@include('site.cabecalho')
@include('site.menu')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/site/inicio/2.jpeg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Creche <span>Izolina</span> </h2>
                            {{-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p> --}}
                            <div>
                                <a href="#why-us" class="btn-menu animate__animated animate__fadeInUp scrollto">Conheça
                                    nosso site!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/site/inicio/4.jpeg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Creche <span>Izolina</span> </h2>
                            {{-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p> --}}
                            <div>
                                <a href="#why-us" class="btn-menu animate__animated animate__fadeInUp scrollto">Conheça
                                    nosso site!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/site/inicio/3.jpeg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Creche <span>Izolina</span> </h2>
                            {{-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p> --}}
                            <div>
                                <a href="#why-us" class="btn-menu animate__animated animate__fadeInUp scrollto">Conheça
                                    nosso site!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item" style="background-image: url(assets/img/site/inicio/1.jpeg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Creche <span>Izolina</span> </h2>
                            {{-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p> --}}
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Conheça
                                    nosso site!</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container">

        <div class="section-title">
            <h2>De mãos dadas pela <span>educação infantil</span></h2>
            <p>Somos uma escola que busca entender como se produz o saber, se aproximando de novas fontes de
                conhecimento a partir de uma concepção universal determinada por um saber maior, onde se oferta
                impressões sobre as realidades sociais e a natureza, saindo do senso comum para o conhecimento
                científico.
            </p>
        </div>

        <div class="row" style="text-align: justify">

            <div class="col-lg-3">
                <a href="/identidade">
                    <div class="box">
                        <span>01</span>
                        <h4>Nossa Identidade</h4>
                        <p>A Educação Infantil, primeira etapa da Educação Básica, tem por objetivo garantir à criança
                            desde
                            o nascimento a construção de conhecimento e de cultura...<b>Ver mais...</b></p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0">
                <a href="/participacao-familias">
                    <div class="box">
                        <span>02</span>
                        <h4>Participação das Famílias</h4>
                        <p>A família é um dos pilares para o desenvolvimento do trabalho da creche e figura central na
                            educação das crianças, que contribui com os valores da educação e na defesa dos direitos da
                            criança... <b>Ver mais...</b></p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0">
                <a href="/inspiracao">
                    <div class="box">
                        <span>03</span>
                        <h4>Nossa Inspiração</h4>
                        <p>A abordagem de Reggio Emilia a qual nos inspiramos baseia-se na compreensão dos problemas,
                            por
                            meio dos experimentos, de tentativas e de erros, onde a maior atenção é dada aos processos
                            em
                            vez do produto final. <b>Ver mais...</b></p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0">
                <a href="/pesquisa-documentacao">
                    <div class="box">
                        <span>04</span>
                        <h4>Pesquisa e Documentação</h4>
                        <p>A pesquisa é um processo natural do ser humano que se envolve com a complexidade do mundo que
                            o
                            cerca, em busca de sentidos para o que se experimenta, se vive e se faz... <b>Ver
                                mais...</b>
                        </p>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section><!-- End Whu Us Section -->

@include('site.rodape')
<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex-grow: 1;
    }
</style>
