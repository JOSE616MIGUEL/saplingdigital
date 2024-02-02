<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ route('Welcome') }}" class="navbar-brand p-0">
            <h1 class="m-0">
                <img src="{{ asset('img/sapling-foto.jpg') }}" alt="" width="200px" height="80px"
                    class="rounded-circle">
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('Welcome') }}"
                    class="nav-item nav-link {{ request()->is('/*') ? 'active' : '' }}">Inicio</a>
                <a href="{{ route('About.index') }}"
                    class="nav-item nav-link {{ request()->is('about*') ? 'active' : '' }}">Nosotros</a>
                <a href="{{ route('Services.index') }}"
                    class="nav-item nav-link {{ request()->is('services*') ? 'active' : '' }}">Servicios</a>
                <!--
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="detail.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        -->
                <!--
                         <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="price.html" class="dropdown-item">Pricing Plan</a>
                                <a href="feature.html" class="dropdown-item">Our features</a>
                                <a href="team.html" class="dropdown-item">Team Members</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="quote.html" class="dropdown-item">Free Quote</a>
                            </div>
                        </div>
                -->
                <a href="{{ route('Contact.index') }}"
                    class="nav-item nav-link {{ request()->is('contact*') ? 'active' : '' }}">Contacto</a>
            </div>
            <!-- <button type="button" class="btn text-white ms-3" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></button>-->
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-item nav-link text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn py-2 px-4 ms-3 text-white" id="color-empresa">Iniciar
                            Sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn py-2 px-4 ms-3 text-white"
                                id="color-empresa">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
</div>
<!-- Navbar & Carousel End -->
