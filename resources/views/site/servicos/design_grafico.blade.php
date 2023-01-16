@extends('site.layout.app')

@section('main')
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li>Serviços</li>
            </ol>
            <h2>Design gráfico e de interação</h2>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Design gráfico e de interação</h2>
            </header>
            <div class="row gy-6">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('assets/img/hero-img.svg') }}" class="img-fluid" alt="" srcset="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Nós oferecemos serviços de design gráfico e de interação, incluindo a criação de logotipos, layouts de sites e aplicativos, ícones, infográficos e outros elementos visuais para ajudar a melhorar a aparência e usabilidade dos projetos de nossos clientes.
                    </h3>
                    <p>
                        Design gráfico e de interação são fundamentais para a criação de interfaces atraentes e intuitivas para os usuários. Como designer gráfico e de interação, oferecemos serviços para ajudar a sua empresa a criar interfaces de usuário que sejam atraentes, fáceis de usar e eficazes para alcançar os objetivos da sua empresa.
                        <br><br>
                        Nossos designers trabalham com você para entender suas necessidades e objetivos, e usam sua expertise para criar designs que sejam atraentes e fáceis de usar. Isso pode incluir a criação de logotipos, layouts de página, ícones e outros elementos visuais que ajudam a dar vida à sua marca e torná-la mais memorável para os seus clientes.
                        <br><br>
                        Além disso, também oferecemos design de interação para ajudar a tornar sua interface de usuário mais intuitiva e fácil de usar. Isso pode incluir a criação de fluxos de trabalho, botões, menus e outros elementos interativos que ajudam os usuários a navegar e realizar tarefas com facilidade.
                        <br><br>
                        Nossos designers também trabalham para garantir que seus designs sejam acessíveis para todos, incluindo usuários com necessidades especiais.
                        <br><br>
                        Em resumo, oferecemos serviços de design gráfico e de interação para ajudar a sua empresa a criar interfaces de usuário atraentes, fáceis de usar e eficazes para alcançar seus objetivos. Entre em contato conosco para discutir como podemos ajudá-lo a melhorar a sua marca e aumentar a satisfação dos seus clientes.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
