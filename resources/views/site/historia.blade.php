@include('site.cabecalho')
@include('site.menu')



<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" style="margin-top: 8em;">
        <div class="section-title">
            <h2 style="font-size: 5em;">Nossa <span>História</span></h2>
            <p>Conheça um pouquinho da nossa história...</p>
        </div>

        <div class="swiper-slide" style="margin-top: 4em;">
            <div class="row event-item" style="align-items: center;">
                <div class="col-lg-6 text-start" style="align-content: center">
                    <img src="assets/img/site/nossa_historia/__2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" style="text-align: justify">
                    <p class="fst-italic">
                        Izolina Zancopé Munari, carinhosamente chamada por seus netos de “vovó Nenê”, nasceu no dia 15
                        de agosto de 1903. Era filha de João Zancopé e Elvira Zancopé, imigrantes italianos que, na
                        época, administravam o Hotel Zancopé.
                    </p><br>

                    <p class="fst-italic">Izolina casou-se com José Munari no dia 23 de junho de 1922, com quem teve
                        seis filhos, sendo
                        quatro homens e duas mulheres. Dedicou-se em toda a sua vida aos cuidados do lar e de seus
                        filhos.
                    </p><br>
                    <p class="fst-italic">Uma de suas filhas, Daysi, casou-se com Pedro Bordin Neto, que mais tarde
                        tornou-se prefeito da
                        cidade de Orlândia.
                    </p><br>
                    <p class="fst-italic">Izolina faleceu em 02 de outubro de 1982 com 79 anos de idade e em dezembro de
                        1988, foi
                        homenageada por seu genro, levando o nome de uma das creches da cidade: “Creche Izolina Zancopé
                        Munari”
                    </p>

                </div>
            </div>
        </div>
        <div class="swiper-slide" style="margin-top: 4em;">
            <div class="row event-item" style="align-items: center;">
                <div class="col-lg-6 pt-4 pt-lg-0 content" style="text-align: justify">
                    <p class="fst-italic">
                        No ano de 2013 a paróquia São José, na pessoa de seu pároco, Padre Devair Araújo da Fonseca,
                        aceitou o convite para administrar, em parceria, com a Prefeitura Municipal a Creche Izolina
                        Zancopé Munari localizada no bairro Jardim Cidade Alta.</p><br>
                    <p class="fst-italic">A partir de então a paróquia São José escolheu entre os seus, uma diretoria
                        voluntária e no dia
                        09/11/2013 foi fundada a Associação de Proteção à Infância São José.</p><br>
                    <p class="fst-italic">São José foi escolhido por Deus para ser o patrono da igreja, patrono da
                        cidade de Orlândia e
                        patrono da nossa creche, ele era carpinteiro na Galiléia, esposo da Virgem Maria, protetor da
                        sagrada família, e pai adotivo de Jesus. José educou e protegeu o menino Jesus, foi justo,
                        trabalhador e exemplo de pai.
                    </p>
                </div>
                <div class="col-lg-6 text-end">
                    <img src="assets/img/site/nossa_historia/__1.jpg" class="img-fluid" alt="">
                </div>
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