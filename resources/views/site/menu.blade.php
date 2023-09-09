<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-end">

        <i class="bi bi-facebook d-flex align-items-center ">
            <span>
                <a href="https://www.facebook.com/izolina.izolina.18/" target="_blank" style="{{count(explode("/", url()->current())) == 3 ? 'color: white;' : 'color: black;' }}">Izolina
                    Zancopé Munari</a>
            </span>
        </i>
        <i class="bi bi-instagram ms-4 d-none d-lg-flex align-items-center">
            <span>
                <a href="https://www.instagram.com/creche_izolina_orlandia/" target="_blank"
                    style="{{count(explode("/", url()->current())) == 3 ? 'color: white;' : 'color: black;' }}">creche_izolina_orlandia</a>
            </span>
        </i>
        <i class="bi bi-whatsapp ms-4 d-none d-lg-flex align-items-center">
            <span>
                <a href="https://wa.me/5516992343214" target="_blank" style="{{count(explode("/", url()->current())) == 3 ? 'color: white;' : 'color: black;' }}">(16) 9 9234-3214</a>
            </span>
        </i>
    </div>
</section>


<header id="header" class="fixed-top d-flex align-items-center header-transparent"
    style="background: rgba(26, 24, 22, 0.85)">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="logo me-auto">
            <h1><a href="/">Creche Izolina</a></h1>
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li class="dropdown">
                    <a href="#">
                        <span>Quem Somos</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a href="/historia">História</a></li>
                        <li><a href="/diretoria">Diretoria Voluntária</a></li>
                        <li><a href="/identidade">Identidade</a></li>
                        <li><a href="/inspiracao">Nossa Inspiração</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="/meninos-e-meninas">Meninos e Meninas</a></li>
                <li class="dropdown">
                    <a href="#">
                        <span>Colaboradores</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a href="/equipe-gestao">Equipe Técnica e Gestão</a></li>
                        <li><a href="/educadores">Educadores</a></li>
                        <li><a href="/equipe-apoio">Equipe de Apoio</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="/ambientes">Os Ambientes</a></li>
                <li class="dropdown">
                    <a href="#">
                        <span>Cotidiano</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a href="/pesquisa-documentacao">Pesquisa e Documentação</a></li>
                        <li><a href="/participacao-familias">Participação das Famílias</a></li>
                        <li><a href="/eventos">Eventos</a></li>
                        <li><a href="/galeria">Galeria</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="/contato">Contato</a></li>
                <li><a class="nav-link scrollto" href="/transparencia">Transparência</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
