@include('site.cabecalho')
@include('site.menu')


<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" style="margin-top: 8em;">

        <div class="section-title">
            <h2 style="font-size: 5em;">Nossa <span>Inspiração</span></h2>
            <p>Conheça um pouco de nossa abordagem...</p>
        </div>

        <div class="swiper-slide" style="margin-top: 4em;">
            <div class="row event-item">
                <div class="col-lg-6">
                    <img src="assets/img/site/nossa_inspiracao/1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" style="text-align: justify; align-items: center;">
                    <p>
                    <h3>Abordagem Educativa de Reggio Emilia (Itália)</h3>
                    </p><br>


                    <p class="fst-italic">A abordagem de Reggio Emilia a qual nos inspiramos baseia-se na compreensão
                        dos problemas, por meio dos experimentos, de tentativas e de erros, onde a maior atenção é dada
                        aos processos em vez do produto final.</p>
                    <p class="fst-italic">É uma pedagogia da escuta, uma escuta afetuosa, atenta, respeitosa e solidária
                        com o modo de pensar da criança.</p>
                    <p class="fst-italic">Os novos pensamentos da criança, as novas ideias são muito valorizadas,
                        respeitando ao mesmo tempo o conhecimento já estabelecido.</p>
                    <p class="fst-italic">Nessa abordagem o conhecimento acontece por meio de múltiplas conexões e
                        linguagens utilizadas pelo ser humano para se expressar e não somente pela leitura e escrita.
                    </p>
                    <p class="fst-italic">O ponto vital dessa pedagogia é a documentação pedagógica, pois é um
                        instrumento de diálogo e compartilhamento com todos os envolvidos no processo de aprendizagem.
                    </p>
                    <p class="fst-italic">Outro valor muito considerado por Reggio é a estética do ambiente, belo, bem
                        cuidado e significativo contribuindo para a aprendizagem e aumentando a sensibilidade da
                        criança.</p>


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