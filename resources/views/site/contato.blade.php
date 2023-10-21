@include('site.cabecalho')
@include('site.menu')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" style="margin-top: 8em;">
        <div class="section-title">
            <h2 style="font-size: 5em;"><span>Contato</span></h2>
            <p>Entre em contato com a nossa equipe...</p>
        </div>
    </div>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14928.113917630752!2d-47.9008729!3d-20.7090681!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ba254638fa397d%3A0x6bb1d7f1a19d7264!2zQXNzb2NpYcOnw6NvIGRlIFByb3Rlw6fDo28gw6AgSW5mw6JuY2lhIFPDo28gSm9zw6k!5e0!3m2!1spt-BR!2sbr!4v1694058828408!5m2!1spt-BR!2sbr"
            width="600" height="450" style="border:0; width: 100%; height: 350px;" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container mt-5">

        <div class="info-wrap">
            <div class="row">
                <div class="col-lg-4 col-md-6 info">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Endereço:</h4>
                    <p>Rua Vinte e Seis, 1898 <br> Jardim Sao Joao, Orlândia</p>
                </div>
                <div class="col-lg-4 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>crecheizolina01@hotmail.com</p>
                </div>

                <div class="col-lg-4 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-phone"></i>
                    <h4>Telefone</h4>
                    <p>(16) 3820-8237</p>
                </div>
            </div>
        </div>

        {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome"
                        required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail"
                        required>
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
        </form> --}}

    </div>
</section>
<!-- End Contact Section -->

<!-- End #main -->

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