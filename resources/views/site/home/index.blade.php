@extends('site.layout.app')

@section('hero')
    @include('site.layout.hero')
@endsection

@section('main')
    <!-- ======= Features Section ======= -->
    <section id="about" class="features">

        <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Criação de Sites Responsivos</h2>
        </header>

        <div class="row">

            <div class="col-lg-6">
            <img src="assets/img/features.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-star"></i>
                    <h3>Melhora a experiência de seus clientes com sua empresa.</h3>
                </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-hand-thumbs-up"></i>
                    <h3>Tem uma taxa maior de fidelização de clientes.</h3>
                </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-search"></i>
                    <h3>É um dos fatores de rankeamento do site no Google.</h3>
                </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-gear"></i>
                    <h3>Você administra o conteúdo do website em tempo real.</h3>
                </div>
                </div>

            </div>
            </div>

        </div> <!-- / row -->

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
            <header class="section-header">
            <h2>Otimização de Sites</h2>
            </header>

            <div class="row">


            <div class="col-xl-8 d-flex content">
                <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                    <i class="ri-line-chart-line"></i>
                    <div>
                    <h4>Melhora da classificação</h4>
                    <p>A otimização de sites pode ajudar a melhorar a classificação do site nos resultados de pesquisa, o que pode aumentar o tráfego e a visibilidade do site.</p>
                    </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="ri-stack-line"></i>
                    <div>
                    <h4>Melhora na experiência</h4>
                    <p>
                        A otimização de sites pode ajudar a garantir que o site carregue rapidamente, navegue facilmente e forneça conteúdo relevante e de qualidade, o que pode aumentar a satisfação do usuário e aumentar as chances de conversão.
                    </p>
                    </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-megaphone"></i>
                    <div>
                    <h4>Aumento das conversões</h4>
                    <p> A otimização de sites pode ajudar a aumentar as conversões, pois ela pode ajudar a melhorar a experiência do usuário e aumentar a confiança dos usuários, o que pode incentivá-los a realizar uma compra ou conversão</p>
                    </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-currency-dollar"></i>
                    <div>
                    <h4>Redução de custos</h4>
                    <p>
                        A otimização de sites pode ajudar a reduzir os custos de aquisição de tráfego, pois ela pode aumentar o tráfego orgânico do site, o que pode reduzir a necessidade de gastar dinheiro em publicidade.
                    </p>
                    </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <i class="ri-command-line"></i>
                    <div>
                    <h4>Aumento da confiança dos usuários</h4>
                    <p>A otimização de sites pode ajudar a aumentar a confiança dos usuários no site, pois ela pode garantir que o site seja fácil de navegar, confiável e ofereça conteúdo relevante e de qualidade.</p>
                    </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <i class="ri-radar-line"></i>
                    <div>
                    <h4>Melhoria na acessibilidade</h4>
                    <p>A otimização de sites pode ajudar a garantir que o site seja acessível a todos os usuários, incluindo aqueles com necessidades especiais, o que pode aumentar a inclusão e a acessibilidade do site.</p>
                    </div>
                </div>

                </div>
            </div>

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
            </div>

            </div>

        </div><!-- End Feature Icons -->

        </div>

    </section>
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
            <h2>Serviços</h2>
            </header>

            <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box blue">
                <i class="bi bi-pc-display-horizontal icon"></i>
                <h3>Desenvolvimento de sites e aplicativos</h3>
                <p>
                    Nós criamos layouts, funcionalidades e integrações de software para atender às necessidades específicas do negócio de nossos clientes.
                </p>
                <a href="{{ route('site.servicos.site') }}" class="read-more">
                    <span>Saiba mais</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box orange">
                <i class="bi bi-palette icon"></i>
                <h3>Design gráfico e de interação</h3>
                <p>
                    Nós oferecemos serviços de design gráfico e de interação, incluindo a criação de logotipos, layouts de sites e aplicativos, ícones, infográficos e outros elementos visuais para ajudar a melhorar a aparência e usabilidade dos projetos de nossos clientes.
                </p>
                <a href="{{ route('site.servicos.designer') }}" class="read-more">
                    <span>Saiba mais</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-box green">
                <i class="bi bi-search icon"></i>
                <h3>Otimização de mecanismos de busca (SEO)</h3>
                <p>
                    Ajudamos nossos clientes a alcançarem uma melhor classificação nos resultados de pesquisa do Google e outros motores de busca através de estratégias de palavras-chave, otimização de conteúdo e análise de dados.
                </p>
                <a href="{{ route('site.servicos.seo') }}" class="read-more">
                    <span>Saiba mais</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-box red">
                <i class="bi bi-megaphone icon"></i>
                <h3>Marketing digital</h3>
                <p>Oferecemos serviços de marketing digital, incluindo anúncios online, gerenciamento de redes sociais, e-mail marketing, e campanhas publicitarias programaticas para ajudar nossos clientes a atingirem seus públicos-alvo e expandir sua presença online.</p>
                <a href="{{ route('site.servicos.marketing') }}" class="read-more">
                    <span>Saiba mais</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-box purple">
                <i class="bi bi-calculator icon"></i>
                <h3>Análise de dados e mensuração de desempenho</h3>
                <p>
                    Fornecemos serviços de análise de dados e mensuração de desempenho para ajudar nossos clientes a entender como seus sites e aplicativos estão sendo utilizados e como estão performando. Isso inclui a utilização de ferramentas de análise web e estatísticas avançadas para identificar tendências e oportunidades.
                </p>
                <a href="{{ route('site.servicos.analise') }}" class="read-more">
                    <span>Saiba mais</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="service-box pink">
                <i class="bi bi-camera2 icon"></i>
                <h3>Mídia Digital</h3>
                <p>
                    Nós oferecemos serviços de gerenciamento de conteúdo e produção de mídia digital, incluindo a criação e gerenciamento de conteúdo para sites e redes sociais, produção de vídeos e fotografia e criação de campanhas publicitarias para ajudar nossos clientes a criar conteúdo atraente e eficaz.
                </p>
                <a href="{{ route('site.servicos.midia') }}" class="read-more">
                    <span>Saiba mais</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                </div>
            </div>

            </div>

        </div>

    </section>
    <!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

        <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Principais dúvidas de criação de sites</h2>
        </header>

        <div class="row">
            <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Como posso garantir que meu site será responsivo e funcionará em dispositivos móveis?
                    </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                    Para garantir que o seu site seja responsivo e funcione perfeitamente em dispositivos móveis, nós utilizamos técnicas de desenvolvimento responsivo, que permite que o layout e as funcionalidades do site se adaptem automaticamente a diferentes tamanhos de tela.
                    </div>
                </div>
                </div>

                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Como posso garantir que meu site terá uma boa performance e carregará rapidamente?
                    </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                    Para garantir uma boa performance e carregamento rápido do seu site, nós otimizamos as imagens e arquivos de mídia, usamos técnicas de minificação de código e implementamos uma estratégia de cache para reduzir o tempo de carregamento do seu site.
                    </div>
                </div>
                </div>

                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Como posso garantir que meu site seja facilmente encontrado nos mecanismos de busca?
                    </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                    Para garantir que o seu site seja facilmente encontrado nos mecanismos de busca, nós otimizamos o conteúdo do seu site para palavras-chave relevantes, trabalhamos na estrutura e na organização do site e implementamos técnicas de SEO on-page e off-page.
                    </div>
                </div>
                </div>

            </div>
            </div>

            <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Como posso garantir a segurança do meu site e protegê-lo contra ataques cibernéticos?
                    </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                    Para garantir a segurança do seu site e protegê-lo contra ataques cibernéticos, nós implementamos medidas de segurança, como proteção contra SQL injection, validação de formulários e criptografia de dados sensíveis.
                    </div>
                </div>
                </div>

                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Como posso incluir funcionalidades avançadas, como formulários de contato e integrações com outros aplicativos?
                    </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                    Para incluir funcionalidades avançadas, como formulários de contato e integrações com outros aplicativos, nós utilizamos as tecnologias mais recentes e ferramentas de desenvolvimento para criar funcionalidades personalizadas que atendam às necessidades específicas do seu negócio.
                    </div>
                </div>
                </div>

                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Como posso garantir que meu site será fácil de atualizar e gerenciar a longo prazo?
                    </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                    Para garantir que o seu site seja fácil de atualizar e gerenciar a longo prazo, nós usamos uma plataforma de gerenciamento de conteúdo (CMS) fácil de usar e treinamos você e sua equipe para atualizar e gerenciar o site de forma autônoma. Além disso, oferecemos suporte contínuo para garantir que tudo funcione sem problemas.
                    </div>
                </div>
                </div>

            </div>
            </div>

        </div>

        </div>

    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Portfólio</h2>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Todos</li>
                <!--<li data-filter=".filter-app">App</li>-->
                <li data-filter=".filter-card">Mídias Sociais</li>
                <li data-filter=".filter-web">Sites</li>
            </ul>
            </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <!--
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
                </div>
            </div>
            </div>
            -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
                <img src="{{ asset('images/portifolio/sambura.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Samburá Imóveis</h4>
                <p>Imobiliária</p>
                <div class="portfolio-links">
                    <a href="{{ asset('images/portifolio/sambura_.png') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sumburá Imóveis">
                    <i class="bi bi-plus"></i>
                    </a>
                    <a href="https://www.samburaimoveis.com.br/" target="_" title="Visitar o site"><i class="bi bi-link"></i></a>
                </div>
                </div>
            </div>
            </div>

            <!--
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
                </div>
            </div>
            </div>
            -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
                <img src="{{ asset('images/portifolio/rocio-01.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Rocio Engenharia</h4>
                <p>Mídia Social</p>
                <div class="portfolio-links">
                    <a href="{{ asset('images/portifolio/rocio-01_.png') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Rocio Engenharia"><i class="bi bi-plus"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
                <img src="{{ asset('images/portifolio/valeverde.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Imobiliária Vale Verde</h4>
                <p>Imobiliária</p>
                <div class="portfolio-links">
                    <a href="{{ asset('images/portifolio/valeverde_.png') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Imobiliária Vale Verde"><i class="bi bi-plus"></i></a>
                    <a href="https://www.imobiliariavaleverde.com.br/" target="_" title="Visitar o site"><i class="bi bi-link"></i></a>
                </div>
                </div>
            </div>
            </div>

            <!--
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
                </div>
            </div>
            </div>
            -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
                <img src="{{ asset('images/portifolio/rocio-02.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Rocio Engenharia</h4>
                <p>Mídia Social</p>
                <div class="portfolio-links">
                    <a href="{{ asset('images/portifolio/rocio-02_.png') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Rocio Engenharia"><i class="bi bi-plus"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
                <img src="{{ asset('images/portifolio/postoamerica_feed-insta.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Posto América</h4>
                <p>Mídia Social</p>
                <div class="portfolio-links">
                    <a href="{{ asset('images/portifolio/postoamerica_feed.png') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Posto América"><i class="bi bi-plus"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
                <img src="{{ asset('images/portifolio/cdadm.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>CdAdm</h4>
                <p>Software P/ Imobiliária</p>
                <div class="portfolio-links">
                    <a href="{{ asset('images/portifolio/cdadm_.png') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="CdAdm"><i class="bi bi-plus"></i></a>
                    <a href="https://cdadm.com.br/" title="Visitar o site" target="_"><i class="bi bi-link"></i></a>
                </div>
                </div>
            </div>
            </div>

        </div>

        </div>

    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Contato</h2>
        </header>

        <div class="row gy-4">

            <div class="col-lg-6">

            <div class="row gy-4">
                <div class="col-md-6">
                <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Endereço</h3>
                    <p>Maringá -PR</p>
                </div>
                </div>
                <div class="col-md-6">
                <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Telefone</h3>
                    <p>
                    +55 (44) 9 8828-3016
                    </p>
                </div>
                </div>
                <div class="col-md-6">
                <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p>
                    contato@automatizaai.com.br <br>
                    financeiro@automatizaai.com.br
                    </p>
                </div>
                </div>
                <div class="col-md-6">
                <div class="info-box">
                    <i class="bi bi-clock"></i>
                    <h3>Horários</h3>
                    <p>Segunda - Sexta<br>8:00 - 18:00</p>
                </div>
                </div>
            </div>

            </div>

            <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row gy-4">

                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Nome" required>
                </div>

                <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Assunto" required>
                </div>

                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Enviar</button>
                </div>

                </div>
            </form>

            </div>

        </div>

        </div>

    </section>
    <!-- End Contact Section -->
@endsection
