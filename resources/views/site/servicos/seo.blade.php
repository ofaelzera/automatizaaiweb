@extends('site.layout.app')

@section('main')
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li>Serviços</li>
            </ol>
            <h2>Otimização de mecanismos de busca (SEO)</h2>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Otimização de mecanismos de busca (SEO)</h2>
            </header>
            <div class="row gy-6">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('assets/img/hero-img.svg') }}" class="img-fluid" alt="" srcset="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Ajudamos nossos clientes a alcançarem uma melhor classificação nos resultados de pesquisa do Google e outros motores de busca através de estratégias de palavras-chave, otimização de conteúdo e análise de dados.
                    </h3>
                    <p>
                        A otimização de mecanismos de busca (SEO) é essencial para garantir que seu site seja facilmente encontrado pelos usuários e pelos mecanismos de busca. Como especialistas em SEO, oferecemos serviços para ajudar a sua empresa a melhorar sua presença online e aumentar seu ranking nos mecanismos de busca.
                        <br><br>
                        Nossa equipe de especialistas em SEO trabalhará com você para entender suas necessidades e objetivos, e usará sua expertise para implementar técnicas e estratégias para melhorar o desempenho do seu site nos mecanismos de busca. Isso pode incluir a otimização de conteúdo, a construção de links de qualidade, a análise de palavras-chave e outras técnicas para garantir que seu site esteja bem posicionado nos resultados dos mecanismos de busca.
                        <br><br>
                        Além disso, também oferecemos monitoramento e análise contínuas para garantir que seu site esteja sempre funcionando corretamente e para identificar quaisquer problemas que possam estar afetando seu desempenho. Isso nos permite ajustar e otimizar suas estratégias para garantir que você esteja sempre obtendo o máximo de benefício.
                        <br><br>
                        Em resumo, oferecemos serviços de otimização de mecanismos de busca (SEO) para ajudar sua empresa a aumentar sua presença online e melhorar seu ranking nos mecanismos de busca. Entre em contato conosco para discutir como podemos ajudá-lo a atingir seus objetivos online.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
