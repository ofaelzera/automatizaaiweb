<header id="header" class="header fixed-top @if(Route::currentRouteName() !== 'site.index') header-scrolled @endif">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{ route('site.index') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('images/AUTOMATIZAAI-GREEN_2.png') }}" alt="">
    </a>

    <nav id="navbar" class="navbar">
        <ul>
        @if (Route::currentRouteName() === 'site.index')
            <li><a class="nav-link scrollto" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
            <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">Portifólio</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
        @else
            <li><a class="nav-link scrollto active" href="{{ route('site.index') }}">Home</a></li>
        @endif
        <!--<li><a class="getstarted scrollto" href="#about">Get Started</a></li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header>
