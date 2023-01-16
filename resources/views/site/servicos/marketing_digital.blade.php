@extends('site.layout.app')

@section('main')
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li>Serviços</li>
            </ol>
            <h2>Marketing digital</h2>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Marketing digital</h2>
            </header>
            <div class="row gy-6">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('assets/img/hero-img.svg') }}" class="img-fluid" alt="" srcset="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Oferecemos serviços de marketing digital, incluindo anúncios online, gerenciamento de redes sociais, e-mail marketing, e campanhas publicitarias programaticas para ajudar nossos clientes a atingirem seus públicos-alvo e expandir sua presença online.
                    </h3>
                    <p>
                        Marketing digital é essencial para alcançar e engajar seus clientes em um mundo cada vez mais conectado. Como especialistas em marketing digital, oferecemos serviços para ajudar a sua empresa a criar campanhas e estratégias que alcancem seus objetivos de negócios.
                        <br><br>
                        Nossa equipe de especialistas em marketing digital trabalhará com você para entender suas necessidades e objetivos, e usará sua expertise para criar estratégias de marketing personalizadas para sua empresa. Isso pode incluir campanhas de publicidade online, otimização de mecanismos de busca (SEO), marketing de conteúdo, marketing de mídia social, e-mail marketing e outras técnicas para alcançar e engajar seus clientes.
                        <br><br>
                        Além disso, também oferecemos monitoramento e análise contínuos para garantir que suas campanhas estejam funcionando corretamente e para identificar quaisquer problemas que possam estar afetando seu desempenho. Isso nos permite ajustar e otimizar suas estratégias para garantir que você esteja sempre obtendo o máximo de benefício.
                        <br><br>
                        Em resumo, oferecemos serviços de marketing digital para ajudar sua empresa a alcançar seus objetivos de negócios e aumentar sua presença online. Entre em contato conosco para discutir como podemos ajudá-lo a atingir seus objetivos de marketing.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
