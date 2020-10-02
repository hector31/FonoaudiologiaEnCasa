<div class="container d-flex align-items-center">

    <h1 class=" mr-auto titulologo"><a href="{{ route('home') }}"><img class="img-fluid logop" src="img/fonoencasa_logo.png" alt=""></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="main-nav d-none d-lg-block">
        <ul>
            <li class="active"><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ URL::route('home') }}#about">Sobre Nostros</a></li>
            <li><a href="{{ URL::route('home') }}#services">Servicios</a></li>
            <li><a href="{{ URL::route('home') }}#portfolio">Posts</a></li>
            <li class="drop-down"><a href="#">Blog</a>
                <ul>
                    <li><a href="{{route('home.fono-tips')}}">Fono Tips</a></li>
                    <li><a href="{{route('home.videos')}}">Videos</a></li>
                    <li><a href="{{route('home.imprimibles')}}">Imprimibles</a></li>
                    <li><a href="{{route('home.noticias')}}">Fonoaudiologia hoy</a></li>
                </ul>
            </li>
            <li><a href="{{ URL::route('home') }}#team">Equipo</a></li>
            <li class="drop-down"><a href="#">Cuenta</a>
                <ul>
                    @if(Auth::check())
                        <li class="nav-item">
                            <a href="{{route('admin.index')}}" >Administrador</a>
                        </li>
                    @else
                        
                        <li class="nav-item">
                            <a href="{{route('users.login')}}" >Ingresar</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('users.register')}}" >Registrarse</a>
                        </li>
                    @endif
                </ul>
            </li>
            <li><a href="#footer">Contactanos</a></li>
        </ul>
    </nav><!-- .main-nav-->

</div>