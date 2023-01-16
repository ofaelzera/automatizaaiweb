@extends('site.layout.app')

@section('main')
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li>Serviços</li>
            </ol>
            <h2>Mídia Digital</h2>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Mídia Digital</h2>
            </header>
            <div class="row gy-6">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('assets/img/hero-img.svg') }}" class="img-fluid" alt="" srcset="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Nós oferecemos serviços de gerenciamento de conteúdo e produção de mídia digital, incluindo a criação e gerenciamento de conteúdo para sites e redes sociais, produção de vídeos e fotografia e criação de campanhas publicitarias para ajudar nossos clientes a criar conteúdo atraente e eficaz.
                    </h3>
                    <p>
                        A mídia digital é uma ótima maneira de alcançar e engajar seus clientes em um mundo cada vez mais conectado. Como especialistas em mídia digital, oferecemos serviços para ajudar a sua empresa a criar campanhas de publicidade online eficazes e alcançar seus objetivos de negócios.
                        <br><br>
                        Nossa equipe de especialistas em mídia digital trabalhará com você para entender suas necessidades e objetivos, e usará sua expertise para criar campanhas personalizadas para sua empresa. Isso pode incluir campanhas de publicidade em redes sociais, publicidade em buscadores, publicidade em vídeo, programática e outras técnicas para alcançar e engajar seus clientes.
                        <br><br>
                        Além disso, também oferecemos monitoramento e análise contínuos para garantir que suas campanhas estejam funcionando corretamente e para identificar quaisquer problemas que possam estar afetando seu desempenho. Isso nos permite ajustar e otimizar suas estratégias para garantir que você esteja sempre obtendo o máximo de benefício.
                        <br><br>
                        Em resumo, oferecemos serviços de mídia digital para ajudar sua empresa a alcançar seus objetivos de negócios e aumentar sua presença online. Entre em contato conosco para discutir como podemos ajudá-lo a alcançar seus objetivos de marketing através da mídia digital.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
