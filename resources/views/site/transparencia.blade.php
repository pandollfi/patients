@include('site.cabecalho')
@include('site.menu')

<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" style="margin-top: 8em;">

        <div class="section-title">
            <h2 style="font-size: 5em;"><span>Transparência</span></h2>
            {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p> --}}
        </div>
    </div>
</section>
<!-- End Whu Us Section -->

<<section id="accordion" class="contact section-bg">
    <div class="container" data-aos="fade-up" style="margin-top: -5em;">
        <div class="accordion" id="accordionExample">
            <!-- MENU PAI "Atas e Estatuto Social" -->
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseAtasEstatuto" aria-expanded="false" aria-controls="collapseAtasEstatuto">
                    Atas e Estatuto Social
                </button>
                <div id="collapseAtasEstatuto" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- SUB-MENU "ATAS" -->
                        <div class="accordion" id="nestedAccordionAtas">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAtasMenu" aria-expanded="false"
                                    aria-controls="collapseAtasMenu">
                                    Atas
                                </button>
                                <div id="collapseAtasMenu" class="accordion-collapse collapse"
                                    data-bs-parent="#nestedAccordionAtas">
                                    <div class="accordion-body">
                                        <!-- SUB-MENU "Bienios" -->
                                        <div class="accordion" id="nestedAccordionBienios">
                                            <!-- SUB-ITEM "Bienios 2017 2019" -->
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse20172019"
                                                    aria-expanded="false" aria-controls="collapse20172019">
                                                    Biênio 2017-2019
                                                </button>
                                                <div id="collapse20172019" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        <a href="assets/docs/ata biênio 2017-2019.pdf" target="_blank">Ata Biênio 2017/2019</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- SUB-ITEM "Bienios 2019 2021" -->
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse20192021"
                                                    aria-expanded="false" aria-controls="collapse20192021">
                                                    Biênio 2019-2021
                                                </button>
                                                <div id="collapse20192021" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        <a href="/assets/docs/ata biênio 2019 - 2021 pdf.pdf" target="_blank">Ata Biênio 2019/2021</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- SUB-ITEM "Bienios 2021 2023" -->
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse20212023"
                                                    aria-expanded="false" aria-controls="collapse20212023">
                                                    Biênio 2021-2023
                                                </button>
                                                <div id="collapse20212023" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        {{-- Conteúdo --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Adicione sub-itens para "Bienios 2020", "Bienios 2021" e "Bienios 2022" da mesma maneira -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SUB-MENU "ESTATUTO SOCIAL" -->
                        <div class="accordion" id="nestedAccordionEstatuto">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEstatutoMenu" aria-expanded="false"
                                    aria-controls="collapseEstatutoMenu">
                                    Estatuto Social
                                </button>
                                <div id="collapseEstatutoMenu" class="accordion-collapse collapse"
                                    data-bs-parent="#nestedAccordionEstatuto">
                                    <div class="accordion-body">
                                        <!-- CONTEÚDO DO ESTATUTO SOCIAL -->
                                        <a href="/assets/docs/estatuto social.pdf" target="_blank">Estatuto Social</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseBalanco" aria-expanded="false" aria-controls="collapseBalanco">
                    Balanço Financeiro
                </button>
                <div id="collapseBalanco" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- SUB-MENU "ESTATUTO SOCIAL" -->
                        <div class="accordion" id="nestedAccordionEstatuto">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEstatutoMenu2018" aria-expanded="false"
                                    aria-controls="collapseEstatutoMenu2018">
                                    2018
                                </button>
                                <div id="collapseEstatutoMenu2018" class="accordion-collapse collapse"
                                    data-bs-parent="#nestedAccordionEstatuto">
                                    <div class="accordion-body">
                                        <!-- CONTEÚDO DO ESTATUTO SOCIAL -->
                                        <a href="/assets/docs/balanço financeiro 2018.pdf" target="_blank">Balanço Financeiro 2018</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="nestedAccordionEstatuto">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEstatutoMenu2019" aria-expanded="false"
                                    aria-controls="collapseEstatutoMenu2019">
                                    2019
                                </button>
                                <div id="collapseEstatutoMenu2019" class="accordion-collapse collapse"
                                    data-bs-parent="#nestedAccordionEstatuto">
                                    <div class="accordion-body">
                                        <!-- CONTEÚDO DO ESTATUTO SOCIAL -->
                                        <a href="/assets/docs/balanço 2019 correto.pdf" target="_blank">Balanço Financeiro 2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="nestedAccordionEstatuto">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEstatutoMenu2020" aria-expanded="false"
                                    aria-controls="collapseEstatutoMenu2020">
                                    2020
                                </button>
                                <div id="collapseEstatutoMenu2020" class="accordion-collapse collapse"
                                    data-bs-parent="#nestedAccordionEstatuto">
                                    <div class="accordion-body">
                                        <!-- CONTEÚDO DO ESTATUTO SOCIAL -->
                                        <a href="/assets/docs/balanço 2020.pdf" target="_blank">Balanço Financeiro 2020</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="nestedAccordionEstatuto">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEstatutoMenu2021" aria-expanded="false"
                                    aria-controls="collapseEstatutoMenu2021">
                                    2021
                                </button>
                                <div id="collapseEstatutoMenu2021" class="accordion-collapse collapse"
                                    data-bs-parent="#nestedAccordionEstatuto">
                                    <div class="accordion-body">
                                        <!-- CONTEÚDO DO ESTATUTO SOCIAL -->
                                        {{-- <a href="/assets/docs/estatuto social.pdf" target="_blank">Estatuto Social</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="nestedAccordionEstatuto">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEstatutoMenu2022" aria-expanded="false"
                                    aria-controls="collapseEstatutoMenu2022">
                                    2022
                                </button>
                                <div id="collapseEstatutoMenu2022" class="accordion-collapse collapse"
                                    data-bs-parent="#nestedAccordionEstatuto">
                                    <div class="accordion-body">
                                        <!-- CONTEÚDO DO ESTATUTO SOCIAL -->
                                        {{-- <a href="/assets/docs/estatuto social.pdf" target="_blank">Estatuto Social</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseConvenios" aria-expanded="false" aria-controls="collapseConvenios">
                    Convênios
                </button>
                <div id="collapseConvenios" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- SUB-MENU "ATAS" -->
                        <div class="accordion" id="nestedAccordionAtas">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTermosColaboracao" aria-expanded="false"
                                    aria-controls="collapseTermosColaboracao">
                                    Termos de Colaboração
                                </button>
                                <div id="collapseTermosColaboracao" class="accordion-collapse collapse"
                                    data-bs-parent="#nestedAccordionAtas">
                                    <div class="accordion-body">
                                        <!-- SUB-MENU "Bienios" -->
                                        <div class="accordion" id="nestedAccordionBienios">
                                            <!-- SUB-ITEM "Bienios 2017 2019" -->
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseColaboracao2019" aria-expanded="false"
                                                    aria-controls="collapseColaboracao2019">
                                                    2019
                                                </button>
                                                <div id="collapseColaboracao2019" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        <a href="/assets/docs/termo de colaboração.pdf" target="_blank">Termo de Colaboração 2019</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- SUB-ITEM "Bienios 2019 2021" -->
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseColaboracao2020" aria-expanded="false"
                                                    aria-controls="collapseColaboracao2020">
                                                    2020
                                                </button>
                                                <div id="collapseColaboracao2020" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        <a href="/assets/docs/termo de colaboração 03 2020.pdf" target="_blank">Termo de Colaboração 2020</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- SUB-ITEM "Bienios 2021 2023" -->
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseColaboracao2021" aria-expanded="false"
                                                    aria-controls="collapseColaboracao2021">
                                                    2021
                                                </button>
                                                <div id="collapseColaboracao2021" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        <a href="/assets/docs/termo de colaboração 03-2021.pdf" target="_blank">Termo de Colaboração 2021</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseColaboracao2022" aria-expanded="false"
                                                    aria-controls="collapseColaboracao2022">
                                                    2022
                                                </button>
                                                <div id="collapseColaboracao2022" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        {{-- <a href="/assets/docs/termo de colaboração.pdf" target="_blank">Termo de Colaboração 2022</a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseColaboracao2023" aria-expanded="false"
                                                    aria-controls="collapseColaboracao2023">
                                                    2023
                                                </button>
                                                <div id="collapseColaboracao2023" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        {{-- <a href="/assets/docs/termo de colaboração.pdf" target="_blank">Termo de Colaboração 2023</a> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Adicione sub-itens para "Bienios 2020", "Bienios 2021" e "Bienios 2022" da mesma maneira -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTermosFomento" aria-expanded="false"
                                    aria-controls="collapseTermosFomento">
                                    Termos de Fomento
                                </button>
                                <div id="collapseTermosFomento" class="accordion-collapse collapse"
                                    data-bs-parent="#nestedAccordionAtas">
                                    <div class="accordion-body">
                                        <!-- SUB-MENU "Bienios" -->
                                        <div class="accordion" id="nestedAccordionBienios">
                                            <!-- SUB-ITEM "Bienios 2017 2019" -->
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFomento2019"
                                                    aria-expanded="false" aria-controls="collapseFomento2019">
                                                    2019
                                                </button>
                                                <div id="collapseFomento2019" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        <a href="/assets/docs/termo de fomento.pdf" target="_blank">Termo de Fomento 2019</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- SUB-ITEM "Bienios 2019 2021" -->
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFomento2020"
                                                    aria-expanded="false" aria-controls="collapseFomento2020">
                                                    2020
                                                </button>
                                                <div id="collapseFomento2020" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        <a href="/assets/docs/termo de fomento nº 03-2020.pdf" target="_blank">Termo de Fomento 2020</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- SUB-ITEM "Bienios 2021 2023" -->
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFomento2021"
                                                    aria-expanded="false" aria-controls="collapseFomento2021">
                                                    2021
                                                </button>
                                                <div id="collapseFomento2021" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        {{-- <a href="/assets/docs/termo de colaboração.pdf" target="_blank">Termo de Colaboração 2023</a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFomento2022"
                                                    aria-expanded="false" aria-controls="collapseFomento2022">
                                                    2022
                                                </button>
                                                <div id="collapseFomento2022" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        {{-- <a href="/assets/docs/termo de colaboração.pdf" target="_blank">Termo de Colaboração 2023</a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFomento2023"
                                                    aria-expanded="false" aria-controls="collapseFomento2023">
                                                    2023
                                                </button>
                                                <div id="collapseFomento2023" class="accordion-collapse collapse"
                                                    data-bs-parent="#nestedAccordionBienios">
                                                    <div class="accordion-body">
                                                        {{-- <a href="/assets/docs/termo de colaboração.pdf" target="_blank">Termo de Colaboração 2023</a> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Adicione sub-itens para "Bienios 2020", "Bienios 2021" e "Bienios 2022" da mesma maneira -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseProcessoSeletivo" aria-expanded="false"
                    aria-controls="collapseProcessoSeletivo">
                    Processo Seletivo de Vagas
                </button>
                <div id="collapseProcessoSeletivo" class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="accordion" id="nestedAccordionEstatuto">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseProcessoSeletivo2021" aria-expanded="false"
                                    aria-controls="collapseProcessoSeletivo2021">
                                    2021
                                </button>
                                <div id="collapseProcessoSeletivo2021" class="accordion-collapse collapse"
                                    data-bs-parent="#collapseProcessoSeletivo2021">
                                    <div class="accordion-body">
                                        <!-- CONTEÚDO DO ESTATUTO SOCIAL -->
                                        <a href="/assets/docs/processo seletivo2021.pdf" target="_blank">Processo Seletivo 2021</a><br>
                                        <a href="/assets/docs/resultado do processo seletivo 2021.pdf" target="_blank">Resultado do Processo Seletivo 2021</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion" id="nestedAccordionEstatuto">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseProcessoSeletivo2022" aria-expanded="false"
                                    aria-controls="collapseProcessoSeletivo2022">
                                    2022
                                </button>
                                <div id="collapseProcessoSeletivo2022" class="accordion-collapse collapse"
                                    data-bs-parent="#collapseProcessoSeletivo2022">
                                    <div class="accordion-body">
                                        <a href="/assets/docs/processo seletivo 2022..pdf" target="_blank">Processo Seletivo 2022</a><br>
                                        <a href="/assets/docs/resultado do processo seletivo 2022.pdf" target="_blank">Resultado do Processo Seletivo 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion" id="nestedAccordionEstatuto">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseProcessoSeletivo2023" aria-expanded="false"
                                    aria-controls="collapseProcessoSeletivo2023">
                                    2023
                                </button>
                                <div id="collapseProcessoSeletivo2023" class="accordion-collapse collapse"
                                    data-bs-parent="#collapseProcessoSeletivo2023">
                                    <div class="accordion-body">
                                        <!-- CONTEÚDO DO ESTATUTO SOCIAL -->
                                      {{-- <a href="/assets/docs/termo de colaboração.pdf" target="_blank">Termo de Colaboração 2023</a> --}}
                                    </div>
                                </div>
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
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            main {
                flex-grow: 1;
            }
        </style>
