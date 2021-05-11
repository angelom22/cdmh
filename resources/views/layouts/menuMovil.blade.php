<!-- Mobile Nav-->
<div id="mobile-nav">
    <ul>
        <li class="current">
            <a href="#">Club</a>
            <ul class="sub-current">
                <li>
                    <a href="{{url ('about')}}">Nosotros</a>
                </li>
                <li>
                    <a href="{{route('home.filtrar.categoria', 'Club')}}">Noticias</a>
                </li>
            </ul>
        </li>


        <li class="current">
            <a href="#">Primer Equipo</a>
            <ul class="sub-current">
                <li>
                    <a href="{{route('PrimerEquipo')}}">Plantilla</a>
                </li>
                <li>
                <li>
                    <a href="{{route('home.filtrar.categoria', 'Primer Equipo')}}">Noticias</a>
                </li>
            </ul>
        </li>

        <li class="current">
            <a href="#">Juveniles</a>
            <ul class="sub-current">
                <li>
                    <a href="{{route('sub20')}}">Sub20</a>
                </li>
                <li>
                    <!-- <a href="{{route('sub19')}}">Sub19</a> -->
                </li>
                <li>
                    <a href="{{route('sub18')}}">Sub18</a>
                </li>
                <li>
                    <a href="{{route('sub16')}}">Sub16</a>
                </li>
                <li>
                    <a href="{{route('home.filtrar.categoria', 'Juveniles')}}">Noticias</a>
                </li>
            </ul>
        </li>

        <li class="current">
            <a href="#">Fútbol Base</a>
            <ul class="sub-current">
                <li>
                    <a href="{{url('futbase')}}">Sub14</a>
                </li>
                <li>
                    <a href="{{url('futbase')}}">Sub12</a>
                </li>
                <li>
                    <a href="{{route('home.filtrar.categoria', 'Fútbol Base')}}">Noticias</a>
                </li>
            </ul>
        </li>

        <li class="current logo">
            <!-- Logo-->
            <a href="{{url ('/')}}" title="Inicio">
                Inicio
            </a>
            <!-- End Logo-->
        </li>

        <li>
            <a href="#">Campeonatos</a>
            <div class="sf-mega">
                <div class="row">
                    <div class="col-md-3">
                        <h5><i class="fa fa-trophy" aria-hidden="true"></i>Liga</h5>
                        <ul>
                            <li><a href="#">Tabla de Posiciones</a></li>
                            <li><a href="#">Resultados</a></li>
                            <li><a href="#">Grupos</a></li>
                            <li><a href="#">Noticias</a></li>
                            <li><a href="https://www.federacionvenezolanadefutbol.org/" target="_blank">FVF</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h5><i class="fa fa-calendar" aria-hidden="true"></i> Calendario</h5>
                        <div class="img-hover">
                            <img src="{{asset('img/blog/calendario.jpg')}}" alt="calendaio" class="img-responsive">
                            <div class="overlay"><a href="#">+</a></div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h5><i class="fa fa-futbol-o" aria-hidden="true"></i> Jugadores</h5>
                        <div class="img-hover">
                            <img src="{{asset('img/blog/NuevaIndumentaria.jpg')}}" alt="imagen jugadores" class="img-responsive">
                            <div class="overlay"><a href="#">+</a></div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h5><i class="fa fa-gamepad" aria-hidden="true"></i> Multimetia</h5>
                        <div class="img-hover">
                            <img src="{{asset('img/blog/1.jpg')}}" alt="imagen multimedia" class="img-responsive">
                            <div class="overlay"><a href="#">+</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li class="current">
            <a href="{{url('sponsors')}}">Sponsors</a>
        </li>

        <li class="current">
            <a href="#">Calendario</a>
        </li>

        <li class="current">
            <a href="{{ url('contacto') }}">Contacto</a>
        </li>
    </ul>
    <!-- End Menu-->
</div>
<!-- End Mobile Nav-->
