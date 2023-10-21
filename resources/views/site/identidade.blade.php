@include('site.cabecalho')
@include('site.menu')


<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" style="margin-top: 8em;">

        <div class="section-title">
            <h2 style="font-size: 5em;"><span>Identidade</span></h2>

        </div>

        <div class="swiper-slide" style="margin-top: 4em;">
            <div class="row event-item">
                <div class="col-lg-12 pt-4 pt-lg-0 content" style="text-align: justify;">
                    {{-- <h3>Birthday Parties</h3> --}}

                    <p class="fst-italic">
                        A Educação Infantil, primeira etapa da Educação Básica, tem por objetivo garantir à criança
                        desde o nascimento a construção de conhecimento e de cultura, a partir das múltiplas interações
                        sociais e das relações que estabelece com o mundo, bem como de proporcionar condições adequadas
                        para promover o bem-estar e o desenvolvimento da criança em seus aspectos físico, psicológico,
                        intelectual e social, complementando a ação da família e da comunidade.</p>
                    <p class="fst-italic">Somos uma escola que busca entender como se produz o saber, se aproximando de
                        novas fontes de
                        conhecimento a partir de uma concepção universal determinada por um saber maior, onde se oferta
                        impressões sobre as realidades sociais e a natureza, saindo do senso comum para o conhecimento
                        científico.</p>
                    <p class="fst-italic">Acreditamos no valor da Prática Democrática, que envolve crianças, famílias,
                        comunidade
                        educativa e a sociedade como um todo, em um relacionamento baseado no diálogo, na escuta e na
                        participação, fazendo com que a escola seja um ambiente propício à produção de pensamentos e
                        reflexões que enriqueçam o projeto educativo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Whu Us Section -->

<!-- ======= Chefs Section ======= -->
<section id="chefs" class="chefs">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div> --}}

            <div class="col-lg-12 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/identidade/de_maos_dadas.png" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

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