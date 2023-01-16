@extends('site.layout.app')

@section('main')
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li>Serviços</li>
            </ol>
            <h2>Análise de dados e mensuração de desempenho</h2>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Análise de dados e mensuração de desempenho</h2>
            </header>
            <div class="row gy-6">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('assets/img/hero-img.svg') }}" class="img-fluid" alt="" srcset="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Fornecemos serviços de análise de dados e mensuração de desempenho para ajudar nossos clientes a entender como seus sites e aplicativos estão sendo utilizados e como estão performando. Isso inclui a utilização de ferramentas de análise web e estatísticas avançadas para identificar tendências e oportunidades.
                    </h3>
                    <p>
                        Análise de dados e mensuração de desempenho são fundamentais para entender como sua empresa está se desenvolvendo e tomar decisões informadas. Como especialistas em análise de dados e mensuração de desempenho, oferecemos serviços para ajudar a sua empresa a coletar, analisar e interpretar dados para melhorar seu desempenho.
                        <br><br>
                        Nossa equipe de especialistas em análise de dados trabalhará com você para entender suas necessidades e objetivos, e usará sua expertise para coletar e analisar dados relevantes para sua empresa. Isso pode incluir a análise de dados de vendas, dados do site, dados de mídia social e outras fontes para entender como sua empresa está se desenvolvendo e onde há oportunidades de melhoria.
                        <br><br>
                        Além disso, também oferecemos relatórios e visualizações de dados para ajudar a sua empresa a entender e interpretar os dados coletados. Isso permite que você veja facilmente as tendências e padrões nos dados, e tome decisões informadas sobre como melhorar seu desempenho.
                        <br><br>
                        Em resumo, oferecemos serviços de análise de dados e mensuração de desempenho para ajudar sua empresa a entender como está se desenvolvendo e tomar decisões informadas para melhorar seu desempenho. Entre em contato conosco para discutir como podemos ajudá-lo a obter insights valiosos a partir dos dados da sua empresa.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
