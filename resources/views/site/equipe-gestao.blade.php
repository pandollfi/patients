@include('site.cabecalho')
@include('site.menu')

<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" style="margin-top: 8em;">

        <div class="section-title">
            <h2 style="font-size: 5em;">Equipe Técnica e <span>Gestão</span></h2>
            <p>Conheça um pouco sobre nossa equipe técnica e de gestão...</p>
        </div>

        <div class="swiper-slide" style="margin-top: 4em;">
            <div class="row event-item">
                <div class="col-lg-6">
                    <img src="assets/img/site/equipe-gestao/1.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-12 pt-4 pt-lg-0 content" style="text-align: justify">

                    <p class="fst-italic">
                        Para apoiar e sustentar o projeto educacional dessa escola, há uma equipe que trabalha de forma
                        integrada, dialogando, refletindo e planejando ações para garantir os direitos e manter um
                        atendimento de qualidade.
                    </p>
                    <br><br>

                    <h3>Diretora</h3>
                    <p class="fst-italic">

                        Tem a responsabilidade de cuidar dos direitos das crianças, dos professores e dos pais, zelando
                        pela participação de todos os envolvidos e reforçando a prática democrática.
                        É responsável por garantir a qualidade dos serviços oferecidos, através da escolha da abordagem
                        educativa e dos profissionais que integrarão a equipe de trabalho da escola.
                        Está em constante diálogo com o poder público e a comunidade, trazendo o conhecimento e levando
                        a cultura da infância para além dos muros da escola.
                    </p>
                    <br>
                    <h3>Coordenadora</h3>
                    <p class="fst-italic">

                        Apoia as relações e promove trocas e discussões na tentativa de ajudar os adultos da escola a
                        confrontar problemas e questões cotidianas, organizando a rotina e criando aliança efetiva por
                        meio da organização do trabalho, do tempo e do espaço.
                        É responsável pelo serviço de planejamento do desenvolvimento profissional, acompanhando os
                        avanços na teoria e na prática, se mantendo a par de novas tecnologias de comunicação e
                        informação.
                        Encoraja o professor nas relações com a família, promovendo encontros, concentrando-se nas
                        estratégias que permitam a participação delas.
                    </p>
                    <br>
                    <h3>Assistente Social e Psicólogo</h3>
                    <p class="fst-italic">

                        São profissionais que apoiam as múltiplas relações existentes no ambiente escolar, os encontros
                        e os projetos participativos com as famílias favorecendo a ética, o respeito, a empatia e a
                        responsabilidade, ampliando a capacidade afetiva e emocional dos envolvidos no projeto
                        educativo.
                    </p>
                    <br>
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