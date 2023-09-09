@include('site.cabecalho')
@include('site.menu')

<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" style="margin-top: 8em;">

        <div class="section-title">
            <h2 style="font-size: 5em;">Diretoria <span>Voluntária</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>

        <div class="swiper-slide" style="margin-top: 4em;">
            <div class="row event-item">
                <div class="col-lg-6">
                    <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Birthday Parties</h3>
                    {{-- <div class="price">
                        <p><span>$189</span></p>
                    </div> --}}
                    <p class="fst-italic">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                        section 1.10.32.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Whu Us Section -->

<section id="timeline" class="">
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
                            <p class="h6 mt-3 mb-1">2003</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Etiam massa eros, placerat eu dignissim in, venenatis vel massa. Cras faucibus
                                ipsum a faucibus faucibus.</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                            title="" data-content="And here's some amazing content. It's very engaging. Right?"
                            data-original-title="2004">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1">2004</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Sed eu lectus vitae leo commodo pharetra vitae
                                venenatis mauris. Integer ex nulla, pellentesque nec dignissim sit amet, pretium mattis
                                ante. In in luctus est, ut pellentesque nisl.</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                            data-placement="top" title=""
                            data-content="And here's some amazing content. It's very engaging. Right?"
                            data-original-title="2005">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1">2005</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Cras aliquam congue iaculis. Maecenas molestie
                                feugiat velit, at tempor justo sollicitudin ac.</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                            data-placement="top" title=""
                            data-content="And here's some amazing content. It's very engaging. Right?"
                            data-original-title="2010">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1">2010</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Donec sit amet euismod ligula, quis auctor ante.
                                Proin ac nulla dignissim, vulputate felis sit amet, scelerisque ante. Sed quis eros
                                turpis. Praesent at suscipit nibh. </p>
                        </div>
                    </div>
                    <div class="timeline-step mb-0">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                            data-placement="top" title=""
                            data-content="And here's some amazing content. It's very engaging. Right?"
                            data-original-title="2020">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1">2020</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Pellentesque odio mauris, eleifend at ligula eu,
                                tristique facilisis urna. Etiam mollis nibh nec nibh viverra consequat. Donec laoreet
                                lectus purus, a consectetur sapien tristique vel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('site.rodape')
<style>
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
        content: "";
        background-color: #3b82f6;
        display: inline-block;
        height: 3rem;
        width: 3rem;
        min-width: 3rem;
        border-radius: 6.25rem;
        opacity: .5
    }
</style>
