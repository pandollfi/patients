@include('site.cabecalho')
@include('site.menu')

<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" style="margin-top: 8em;">

        <div class="section-title">
            <h2 style="font-size: 5em;">Diretoria <span>Voluntária</span></h2>
            <p>Conheça nossa equipe...</p>
        </div>

        <div class="swiper-slide" style="margin-top: 4em;">
            <div class="row event-item">
                {{-- <div class="col-lg-6">
                    <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div> --}}
                <div class="col-lg-12 pt-4 pt-lg-0 content" style="text-align: justify">
                    {{-- <h3>Birthday Parties</h3> --}}
                    {{-- <div class="price">
                        <p><span>$189</span></p>
                    </div> --}}
                    <p class="fst-italic">
                        Nossa Diretoria Voluntária é composta por membros da sociedade civil que assumem a
                        responsabilidade de administrar a escola em parceria com o poder público, que mantém uma
                        cooperação financeira para que a entidade possa cumprir a missão de oferecer uma escola de
                        qualidade, que garanta oportunidade para as crianças se desenvolverem plenamente com liberdade e
                        dignidade.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Whu Us Section -->

{{-- <section id="timeline" class="">
    <div class="container">
        <div class="row text-center justify-content-center mb-5">
            <div class="col-xl-6 col-lg-8">
                <h2 class="font-weight-bold">Linha do Tempo com Eventos</h2>
                <p class="text-muted">We’re very proud of the path we’ve taken. Explore the history that made us the
                    company
                    we are today.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                            title="" data-content="And here's some amazing content. It's very engaging. Right?"
                            data-original-title="2003">
                            <div class="inner-circle"></div> 
                            <div class="container text-center inner-circle">
                                <div class="image-container text-center">
                                    <img src="/assets/img/site/diretoria_voluntaria/1.jpeg" alt="Imagem" class="image">
                                    <div class="overlay">
                                        <img src="/assets/img/site/diretoria_voluntaria/1.jpeg" alt="Imagem Ampliada" class="overlay-image">
                                    </div>
                                </div>
                            </div><br><br>
                            <p class="h6 mt-3 mb-1"><b>Presidente</b></p>
                            <p class="h6 mt-3 mb-1">2013 a 2017</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Maria Consuelo de Freitas Silveira Leal</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                            title="" data-content="And here's some amazing content. It's very engaging. Right?"
                            data-original-title="2004">
                            <div class="container text-center inner-circle">
                                <div class="image-container text-center">
                                    <img src="/assets/img/site/diretoria_voluntaria/2.jpeg" alt="Imagem" class="image">
                                    <div class="overlay">
                                        <img src="/assets/img/site/diretoria_voluntaria/2.jpeg" alt="Imagem Ampliada" class="overlay-image">
                                    </div>
                                </div>
                            </div><br><br>
                            <p class="h6 mt-3 mb-1"><b>Fundador da Entidade</b></p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Dom Devair Araújo da Fonseca</p>
                            
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                            title="" data-content="And here's some amazing content. It's very engaging. Right?"
                            data-original-title="2005">
                            <div class="container text-center inner-circle">
                                <div class="image-container text-center">
                                    <img src="/assets/img/site/diretoria_voluntaria/3.jpeg" alt="Imagem" class="image">
                                    <div class="overlay">
                                        <img src="/assets/img/site/diretoria_voluntaria/3.jpeg" alt="Imagem Ampliada" class="overlay-image">
                                    </div>
                                </div>
                            </div><br><br>
                            <p class="h6 mt-3 mb-1"><b>Presidente</b></p>
                            <p class="h6 mt-3 mb-1">2017 a 2021</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Giovana Peron Arndt</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                            title="" data-content="And here's some amazing content. It's very engaging. Right?"
                            data-original-title="2010">
                            <div class="container text-center inner-circle">
                                <div class="image-container text-center">
                                    <img src="/assets/img/site/diretoria_voluntaria/4.jpg" alt="Imagem" class="image">
                                    <div class="overlay">
                                        <img src="/assets/img/site/diretoria_voluntaria/4.jpg" alt="Imagem Ampliada" class="overlay-image">
                                    </div>
                                </div>
                            </div><br><br>
                            <p class="h6 mt-3 mb-1"><b>Presidente de Honra</b></p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Padre Diego Carlos Gonçalves</p>
                        </div>
                    </div>
                    <div class="timeline-step mb-0">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                            title="" data-content="And here's some amazing content. It's very engaging. Right?"
                            data-original-title="2020">
                            <div class="container text-center inner-circle">
                                <div class="image-container text-center">
                                    <img src="/assets/img/site/diretoria_voluntaria/5.jpg" alt="Imagem" class="image">
                                    <div class="overlay">
                                        <img src="/assets/img/site/diretoria_voluntaria/5.jpg" alt="Imagem Ampliada" class="overlay-image">
                                    </div>
                                </div>
                            </div><br><br>
                            <p class="h6 mt-3 mb-1"><b>Presidente</b></p>
                            <p class="h6 mt-3 mb-1">2021 a 2023</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Jaqueline Ribeiro Lamonato Claro</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section id="chefs" class="chefs">
    <div class="container">
        <div class="row text-center align-items-center">
            <div class="row">
                <div class="col-md-2">
                    <div class="member">
                        <div class="pic"><img src="/assets/img/site/diretoria_voluntaria/1.jpeg"
                                class="img-fluid size-standard mx-auto" alt="">
                        </div>
                    </div>
                    <div style="margin-top: -4.5em; margin-bottom: 2em;">
                        <p class="h6 mt-3 mb-1"><b>Presidente</b><br>
                            2013 a 2017<br>
                            Maria Consuelo de Freitas Silveira Leal</p>
                    </div>
                </div>

                <div class="col" style="align-items: center; color: #1B98E0;">
                </div>

                <div class="col-md-2">
                    <div class="member">
                        <div class="pic"><img src="/assets/img/site/diretoria_voluntaria/2.jpeg"
                                class="img-fluid size-standard mx-auto" alt="">
                        </div>
                    </div>
                    <div style="margin-top: -4.5em; margin-bottom: 2em;">
                        <p class="h6 mt-3 mb-1"><b>Fundador da Entidade</b><br>
                            Dom Devair Araújo da Fonseca</p>
                    </div>
                </div>

                <div class="col" style="align-items: center; color: #1B98E0;">
                </div>

                <div class="col-md-2">
                    <div class="member">
                        <div class="pic"><img src="/assets/img/site/diretoria_voluntaria/3.jpeg"
                                class="img-fluid size-standard mx-auto" alt="">
                        </div>
                    </div>
                    <div style="margin-top: -4.5em; margin-bottom: 2em;">
                        <p class="h6 mt-3 mb-1"><b>Presidente</b><br>
                            2017 a 2021<br>
                            Giovana Peron Arndt</p>
                    </div>
                </div>

                <div class="col" style="align-items: center; color: #1B98E0;">
                </div>

                <div class="col-md-2">
                    <div class="member">
                        <div class="pic"><img src="/assets/img/site/diretoria_voluntaria/4.jpg"
                                class="img-fluid size-standard mx-auto" alt="">
                        </div>
                    </div>
                    <div style="margin-top: -4.5em; margin-bottom: 2em;">
                        <p class="h6 mt-3 mb-1"><b>Presidente de Honra</b><br>
                            Padre Diego Carlos Gonçalves</p>
                    </div>
                </div>

                <div class="col" style="align-items: center; color: #1B98E0;">
                </div>

                <div class="col-md-2">
                    <div class="member">
                        <div class="pic"><img src="/assets/img/site/diretoria_voluntaria/5.jpg"
                                class="img-fluid size-standard mx-auto" alt="">
                        </div>
                    </div>
                    <div style="margin-top: -4.5em; margin-bottom: 2em;">
                        <p class="h6 mt-3 mb-1"><b>Presidente</b><br>
                            2021 a 2023<br>
                            Jaqueline Ribeiro Lamonato Claro</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@include('site.rodape')
<style>
    .size-standard {
        width: 196px;
        height: 196px;
    }

    .align-items-center {
        display: flex;
        align-items: center;
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
{{-- <style>
    body {
        margin-top: 20px;
    }

    .timeline-steps {
        display: flex;
        justify-content: center;
        flex-wrap: wrap
    }

    .timeline-steps .timeline-step {
        align-items: center;
        display: flex;
        flex-direction: column;
        position: relative;
        margin: 1rem
    }

    @media (min-width:768px) {
        .timeline-steps .timeline-step:not(:last-child):after {
            content: "";
            display: block;
            border-top: .25rem dotted #3b82f6;
            width: 3.46rem;
            position: absolute;
            left: 7.5rem;
            top: .3125rem
        }

        .timeline-steps .timeline-step:not(:first-child):before {
            content: "";
            display: block;
            border-top: .25rem dotted #3b82f6;
            width: 3.8125rem;
            position: absolute;
            right: 7.5rem;
            top: .3125rem
        }
    }

    .timeline-steps .timeline-content {
        width: 10rem;
        text-align: center
    }

    .timeline-steps .timeline-content .inner-circle {
        border-radius: 1.5rem;
        height: 1rem;
        width: 1rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #3b82f6
    }

    .timeline-steps .timeline-content .inner-circle:before {
        /* content: ""; */
        background-color: #3b82f6;
        display: inline-block;
        height: 3rem;
        width: 3rem;
        min-width: 3rem;
        border-radius: 6.25rem;
        opacity: .5
    }

    .container {
        position: relative;
    }

    .image-container {
        position: relative;
        display: inline-block;
    }

    .image {
        width: 100px;
        /* Largura da imagem base */
        height: 100px;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 100%;
        /* A imagem ampliada aparecerá à direita da imagem base */
        opacity: 0;
        transition: opacity 0.3s;
    }

    .overlay-image {
        width: 20em;
        /* Largura da imagem ampliada */
        height: 20em;
    }

    .image-container:hover .overlay {
        opacity: 1;
    }
</style> --}}
