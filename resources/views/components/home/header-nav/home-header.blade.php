<div class="container d-flex align-items-center">

    <h1 class=" mr-auto"><a href="{{ route('home') }}"><img width="70px" class="img-fluid" src="img/fonoencasa_logo.png" alt=""></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="main-nav d-none d-lg-block">
        <ul>
            <li class="active"><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ URL::route('home') }}#about">Sobre Nostros</a></li>
            <li><a href="{{ URL::route('home') }}#services">Servicios</a></li>
            <li><a href="{{ URL::route('home') }}#portfolio">Posts</a></li>
            <li><a href="{{ URL::route('home') }}#team">Equipo</a></li>
        <li class="drop-down"><a href="#">Blog</a>
            <ul>
            <li><a href="{{route('home.fono-tips')}}">Fono Tips</a></li>
            <li><a href="{{route('home.videos')}}">Videos</a></li>
            <li><a href="{{route('home.imprimibles')}}">Imprimibles</a></li>
            <li><a href="{{route('home.noticias')}}">Fonoaudiologia hoy</a></li>
            </ul>
        </li>
        <li><a href="#footer">Contacta nos</a></li>
        </ul>
    </nav><!-- .main-nav-->

</div>