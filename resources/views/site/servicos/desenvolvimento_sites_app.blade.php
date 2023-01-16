@extends('site.layout.app')

@section('main')
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li>Serviços</li>
            </ol>
            <h2>Desenvolvimento de sites e aplicativos</h2>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Desenvolvimento de sites e aplicativos</h2>
            </header>
            <div class="row gy-6">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('assets/img/hero-img.svg') }}" class="img-fluid" alt="" srcset="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Nós criamos layouts, funcionalidades e integrações de software para atender às necessidades específicas do negócio de nossos clientes.
                    </h3>
                    <p>
                        Desenvolvimento de sites e aplicativos é uma necessidade cada vez mais comum para empresas de todos os tamanhos e setores. Um site atualizado e funcional é fundamental para construir e manter uma presença on-line forte, enquanto um aplicativo pode aumentar ainda mais a interação com seus clientes e aumentar sua base de fãs.
                        <br><br>
                        Aqui na nossa empresa, oferecemos serviços de desenvolvimento de sites e aplicativos personalizados para atender às necessidades específicas de cada cliente. Nossos desenvolvedores são especialistas em tecnologias atuais, incluindo HTML, CSS, JavaScript, PHP e outras linguagens de programação, e trabalham em estreita colaboração com nossos designers para garantir que seu site ou aplicativo seja atraente e fácil de usar.
                        <br><br>
                        Além disso, nos esforçamos para garantir que todos os nossos sites e aplicativos sejam otimizados para dispositivos móveis, e oferecemos opções de gerenciamento de conteúdo para que você possa atualizar e gerenciar seu site ou aplicativo com facilidade.
                        <br><br>
                        Nós entendemos que cada negócio é único e tem suas próprias necessidades e metas. Por isso, oferecemos pacotes personalizados de acordo com as suas necessidades e orçamento. Se você estiver interessado em saber mais sobre como podemos ajudar a sua empresa a construir uma presença on-line forte, por favor, entre em contato conosco. Estamos ansiosos para trabalhar com você.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
