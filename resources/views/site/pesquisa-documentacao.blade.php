@include('site.cabecalho')
@include('site.menu')

<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" style="margin-top: 8em;">

        <div class="section-title">
            <h2 style="font-size: 5em;">Pesquisa e <span>Documentação</span></h2>
            <p>Saiba sobre pesquisa e documentação...</p>

        </div>
        <div class="swiper-slide" style="margin-top: 4em;">
            <div class="row event-item">
                <div class="col-lg-12 pt-4 pt-lg-0 content" style="text-align: justify;">
                    {{-- <h3>Birthday Parties</h3> --}}
                    <p class="fst-italic">
                        A pesquisa é um processo natural do ser humano que se envolve com a complexidade do mundo que o
                        cerca, em busca de sentidos para o que se experimenta, se vive e se faz, sendo assim um
                        aprofundamento que faz com que a criança evolua do senso comum para a construção de um
                        conhecimento científico.
                    <p>
                    <p class="fst-italic">A prática de pesquisa envolve a escuta, o diálogo, a participação, a
                        projetação, a
                        experimentação, a observação, boas perguntas, contextos investigativos, narração do vivido,
                        modalidades de documentação, prática reflexiva e coletividade.</p>
                    <p class="fst-italic">
                        A pesquisa pode nascer de muitos modos, seja do interesse manifestado pela criança, de situações
                        do cotidiano ou ainda de um convite do professor ao grupo para estudar um tema que mereça ser
                        investigado. Essa prática, empodera quem investiga, porque o investigador percebe que consegue
                        ultrapassar o que já é conhecido, nos faz humildes, pois quanto mais pesquisamos menos sabemos e
                        propicia o diálogo entre as disciplinas e entre as áreas do conhecimento, promovendo a autonomia
                        intelectual e a cooperação entre os pesquisadores.
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
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/1.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/2.jpeg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/3.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/4.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/5.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/6.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/7.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/8.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/9.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/10.jpeg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/11.jpeg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/pesquisa_documentacao/12.jpeg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Chefs Section -->
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