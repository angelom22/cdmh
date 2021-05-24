<header class="header-2">
    <!-- End headerbox-->
    <div class="headerbox">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <!-- Logo-->
                <!-- <div class="col col-xl-2" style="display: none;">
                    <div class="logo">
                        <a href="{{url ('/')}}" title="Return Home">
                            <img src="{{asset('img/logo.png')}}" alt="Logo" class="logo_img">
                        </a>
                    </div>
                </div> -->
                <!-- End Logo-->

                <!-- Adds nav-->
                <div class="col col-xl-10">
                    <!-- mainmenu-->
                    <nav class="mainmenu">
                        <div class="container">
                            <!-- Menu-->
                            <ul class="sf-menu" id="menu">
                                <li class="current">
                                    <a href="#">CLUB</a>
                                    <ul class="sub-current">
                                        <li>
                                            <a href="{{url ('about')}}">NOSOTROS</a>
                                        </li>
                                        <li>
                                            <a href="{{route('home.filtrar.categoria', 'Club')}}">NOTICIAS</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="current">
                                    <a href="#">PRIMER EQUIPO</a>
                                    <ul class="sub-current">
                                        <li>
                                            <a href="{{route('PrimerEquipo')}}">PLANTILLA</a>
                                        </li>
                                        <li>
                                        <li>
                                            <a href="{{route('home.filtrar.categoria', 'Primer Equipo')}}">NOTICIAS</a>
                                        </li>
                                </li>

                            </ul>
                            </li>

                            <li class="current">
                                <a href="#">JUVENILES</a>
                                <ul class="sub-current">
                                    <li>
                                        <a href="{{route('sub20')}}">SUB20</a>
                                    </li>
                                    <li>
                                        <!-- <a href="{{route('sub19')}}">Sub19</a> -->
                                    </li>
                                    <li>
                                        <a href="{{route('sub18')}}">SUB18</a>
                                    </li>
                                    <li>
                                        <a href="{{route('sub16')}}">SUB16</a>
                                    </li>
                                    <li>
                                        <a href="{{route('home.filtrar.categoria', 'Juveniles')}}">NOTICIAS</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="current">
                                <a href="#">FUTBOL BASE</a>
                                <ul class="sub-current">
                                    <li>
                                        <a href="{{url('futbase')}}">SUB14</a>
                                    </li>
                                    <li>
                                        <a href="{{url('futbase')}}">SUB12</a>
                                    </li>
                                    <li>
                                        <a href="#">INSCRIPCION</a>
                                    </li>
                                    <li>
                                        <a href="{{route('home.filtrar.categoria', 'Fútbol Base')}}">NOTICIAS</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Logo-->
                            <a href="{{url ('/')}}" title="Inicio" class="logo">
                                <img src="{{asset('img/logo.png')}}" alt="Logo" class="logo_img">
                            </a>
                            <!-- End Logo-->

                            <li>
                                <a href="#">CAMPEONATOS</a>
                                <div class="sf-mega">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5><i class="fa fa-trophy" aria-hidden="true"></i>LIGA</h5>
                                            <ul>
                                                <li><a href="#">TABLA DE POSICIONES</a></li>
                                                <li><a href="#">RESULTADOS</a></li>
                                                <li><a href="#">GRUPOS</a></li>
                                                <li><a href="#">NOTICIAS</a></li>
                                                <li><a href="https://www.federacionvenezolanadefutbol.org/" target="_blank">FVF</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-3">
                                            <h5><i class="fa fa-calendar" aria-hidden="true"></i>CALENDARIO</h5>
                                            <div class="img-hover">
                                                <img src="{{asset('img/blog/calendario.jpg')}}" alt="calendaio" class="img-responsive">
                                                <div class="overlay"><a href="#">+</a></div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <h5><i class="fa fa-futbol-o" aria-hidden="true"></i>JUGADORES</h5>
                                            <div class="img-hover">
                                                <img src="{{asset('img/blog/NuevaIndumentaria.jpg')}}" alt="imagen jugadores" class="img-responsive">
                                                <div class="overlay"><a href="#">+</a></div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <h5><i class="fa fa-gamepad" aria-hidden="true"></i>MULTIMEDIA</h5>
                                            <div class="img-hover">
                                                <img src="{{asset('/img/blog/1.jpg')}}" alt="imagen Miltimedia" class="img-responsive">
                                                <div class="overlay"><a href="{{url ('galeria')}}">+</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="current">
                                <a href="{{url('sponsors')}}">SPONSORS</a>
                            </li>

                            <li class="current">
                                <a href="#">CALENDARIO</a>
                            </li>

                            <li class="current">
                                <a href="{{ url('contacto') }}">CONTACTO</a>
                            </li>
                            </ul>
                            <!-- End Menu-->
                        </div>
                    </nav>
                    <!-- End mainmenu-->

                    <!-- Call Nav Menu-->
                    <a class="mobile-nav" href="#mobile-nav"><i class="fa fa-bars"></i></a>
                    <!-- End Call Nav Menu-->
                </div>
                <!-- End nav Header-->
            </div>
        </div>
    </div>
    <!-- End headerbox-->
</header>
