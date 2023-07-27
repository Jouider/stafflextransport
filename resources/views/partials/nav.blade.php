<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-secondary sticky-top p-0 justify-content-center " >
    <a href="{{ route('homepage')}}" class="navbar-brand  d-flex align-items-center px-4 px-lg-5">
        <img id="logo" src="img/stafflex-Logo.png" alt="">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('homepage')}}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}" >Home</a>
            <a href="{{ route('aboutpage')}}" class="nav-item nav-link {{ (request()->is('about')) ? 'active' : '' }}">About</a>
            <a href="{{ route('servicespage')}}" class="nav-item nav-link {{ (request()->is('servicespage')) ? 'active' : '' }}">Services</a>
            <a href="{{ route('contactpage')}}" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
            @guest
            <a href="{{ route('auth.show')}}" class="nav-item nav-link"><strong>LOGIN</strong></a>    
            @endguest
            @auth
                 <!-- Avatar -->
            <div class="dropdown-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img src="img/login.jpg" class="rounded-circle" height="40" alt="Black and White Portrait of a Man" />
                </a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('services.create')}}" class="dropdown-item">Ajouter un service</a>
                    <a href="{{ route('team.create')}}" class="dropdown-item">Ajouter un membre</a>
                    <a href="{{ route('auth.logout')}}" class="dropdown-item">Se deconnecter</a>
                </div>
            </div>
            @endauth
            
    </div>
    <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones-alt text-secondary me-3"></i>+212 522 524 455</h4>
</nav>