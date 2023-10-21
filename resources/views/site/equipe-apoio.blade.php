@include('site.cabecalho')
@include('site.menu')

<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" style="margin-top: 8em;">

        <div class="section-title">
            <h2 style="font-size: 5em;"><span>Equipe de Apoio</span></h2>
            <p>Conheça nossa equipe de apoio...</p>
        </div>

        <div class="swiper-slide" style="margin-top: 4em;">
            <div class="row event-item">
                <div class="col-lg-12 pt-4 pt-lg-0 content" style="text-align: justify;">
                    {{-- <h3>Birthday Parties</h3> --}}
                    <p class="fst-italic">
                        Nosso grupo de trabalho é composto por todos aqueles que , na especificidade dos diversos papeis e perfis profissionais (auxiliar de cozinha, auxiliar de limpeza, auxiliar de escritório), atuam dentro de um setor da creche. 
                        Cada profissional exerce um papel importante no cotidiano da escola e a corresponsabilidade é uma condição indispensável para a qualidade educativa do serviço.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Whu Us Section -->

<!-- ======= Chefs Section ======= -->
{{-- <section id="chefs" class="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>
</section> --}}

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