@include('site.cabecalho')
@include('site.menu')

<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" style="margin-top: 8em;">

        <div class="section-title">
            <h2 style="font-size: 5em;">Participação das <span>Famílias</span></h2>
            <p>Saiba sobre a participação das famílias...</p>
        </div>

        <div class="swiper-slide" style="margin-top: 4em;">
            <div class="row event-item">

                <div class="col-lg-12 pt-4 pt-lg-0 content" style="text-align: justify;">
                    {{-- <h3>Birthday Parties</h3> --}}
                    <p class="fst-italic">
                        A família é um dos pilares para o desenvolvimento do trabalho da creche e figura central na
                        educação das crianças, que contribui com os valores da educação e na defesa dos direitos da
                        criança.
                    </p>
                    <p class="fst-italic">
                        Uma das responsabilidades da escola é criar estratégias para ajudar as famílias a serem mais
                        participativas no desenvolvimento das crianças, serem valorizadas, ouvidas e amparadas,
                        contemplando assim a prática democrática.
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
                    <div class="pic"><img src="assets/img/site/participacao_familias/1.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/participacao_familias/2.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/participacao_familias/3.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/participacao_familias/4.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/participacao_familias/5.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/participacao_familias/6.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/participacao_familias/7.jpg" class="img-fluid size-standard" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/site/participacao_familias/8.jpeg" class="img-fluid size-standard" alt="">
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