@include('site.cabecalho')
@include('site.menu')



<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" style="margin-top: 8em;">

        <div class="section-title">
            <h2 style="font-size: 5em;"><span>Educadores</span></h2>
            <p>Conheça nossos educadores...</p>
        </div>

        <div class="swiper-slide" style="margin-top: 4em;">
            <div class="row event-item">
                {{-- <div class="col-lg-6">
                    <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div> --}}
                <div class="col-lg-12 pt-4 pt-lg-0 content" style="text-align: justify">
                    <h3>Professor Pesquisador</h3>
                    <p class="fst-italic">
                        O professor pesquisador educa com responsabilidade, paixão, emoção, humor e curiosidade,
                        confronta sempre a teoria e a prática, acredita e acolhe a criança como um cidadão potente, tem
                        uma escuta responsiva e mantém distância dos conteúdos programáticos estritos que já são
                        decididos como modelos por uma sociedade exclusiva.</p><br>

                    <h3>Formação permanente</h3>

                    <p class="fst-italic">
                        A formação permanente fomenta o processo de crescimento profissional e é um direito e um dever
                        do educador, sendo uma experiência coletiva, colaborativa, dialógica, fundamentada em teorias,
                        que transforma a prática pedagógica e se realiza a partir da problematização constante dos
                        processos de trabalho, apoiando o professor no enfrentamento dos desafios cotidianos.
                        O desafio de sair de uma escola tradicional, fadada ao fracasso e caminhar rumo a uma nova
                        escola, exige uma renovação das escolhas metodológicas e, principalmente, incluir novas
                        ferramentas pedagógicas para sustentar os princípios e os critérios da pesquisa.
                    </p>
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
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/educadores/1.jpg" class="img-fluid size-standard"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/educadores/2.jpg" class="img-fluid size-standard"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/educadores/3.jpg" class="img-fluid size-standard"
                            alt="">
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/educadores/4.jpg" class="img-fluid size-standard"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/educadores/5.jpeg" class="img-fluid size-standard"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('site.rodape')
<style>
    .size-standard {
        width: 416px;
        height: 416px;
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex-grow: 1;
    }
</style>
