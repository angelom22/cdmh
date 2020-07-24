@extends('layouts.app')

@section('content')

<!-- menu content -->
@include('layouts.menu')
<!-- menu content -->

<!-- section-hero-posts-->
@include('secciones.hero')
<!-- End section-hero-posts-->

<!-- Section Area - Content Central -->
<section class="content-info">

    <!-- White Section -->
    <!-- <div class="white-section paddings">

                    <i class="fa fa-soccer-ball-o right icon-big"></i>

                    <div class="container">
                        <div class="row next-match">

                            <div class="col-lg-12">
                                <p class="title-counter">
                                    <i class="fa fa-clock-o"></i>
                                    Día de Partido
                                </p>
                                <div id="event-one" class="counter"></div>
                            </div>

                            <div class="col-lg-5">
                                <div class="team">
                                   <a href="single-team.html">
                                        CDMH
                                        <img src="img/clubs-logos/logo.png" style="width: 100px; height:100px" alt="club-local">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="vs-match">
                                    VS
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="team right">
                                    <a href="single-team.html">
                                        <img src="img/clubs-logos/rival.jpg" style="width: 100px; height:100px" alt="club-visitante">
                                        Rival
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <ul class="date-match">
                                    <li><i class="fa fa-calendar"></i>14 Julio, 2020</li>
                                    <li><i class="fa fa-clock-o"></i>Kick-of, 12:00 PM</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div> -->
    <!-- End White Section -->

    <!-- Parallax Section - Players -->
    <!-- <div class="parallax-section parallax-total" style="background:url(img/slide/1.jpg);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="text-center padding-bottom">
                                    <h2>We have earned the trust of <span class="text-resalt">25,869</span> Club Members.</h2>
                                    <p>Duis non lorem porta,  eros sit amet, tempor sem. semper a tempus et.</p>
                                </div>
                            </div>


                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="item-player">
                                    <div class="head-player">
                                        <img src="img/players/1.jpg" alt="location-team">
                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                    </div>
                                    <div class="info-player">
                                        <span class="number-player">
                                            13
                                        </span>
                                        <h4>
                                            Cristiano Ronaldo
                                            <span>Forward</span>
                                        </h4>
                                        <ul class="no-margin">
                                            <li>
                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/por.png" alt=""> Portugal </span
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>



                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="item-player">
                                    <div class="head-player">
                                        <img src="img/players/2.jpg" alt="location-team">
                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                    </div>
                                    <div class="info-player">
                                        <span class="number-player">
                                            10
                                        </span>
                                        <h4>
                                            Lionel Messi
                                            <span>Defender</span>
                                        </h4>
                                        <ul class="no-margin">
                                            <li>
                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/arg.png" alt=""> Argentina </span
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>



                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="item-player">
                                    <div class="head-player">
                                        <img src="img/players/3.jpg" alt="location-team">
                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                    </div>
                                    <div class="info-player">
                                        <span class="number-player">
                                            5
                                        </span>
                                        <h4>
                                            Neymar
                                            <span>Midfielder</span>
                                        </h4>
                                        <ul class="no-margin">
                                            <li>
                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/bra.png" alt=""> Brazil </span
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="item-player">
                                    <div class="head-player">
                                        <img src="img/players/4.jpg" alt="location-team">
                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                    </div>
                                    <div class="info-player">
                                        <span class="number-player">
                                            2
                                        </span>
                                        <h4>
                                            Luis Suárez
                                            <span>Goalkeeper</span>
                                        </h4>
                                        <ul class="no-margin">
                                            <li>
                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/uru.png" alt=""> Uruguay </span
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            </div>
                    </div>
                </div> -->
    <!-- End Gray Section - Players -->

    <!-- White Section -->
    <div class="paddings">
        <div class="container">
            <div class="row">
                <div class="col lg-8">
                    <!-- Recent Post -->
                    
                    <!-- End Recent Post -->
                </div>

                <!-- content Sidebar Center -->
                <aside class="col-sm-6 col-lg-3 col-xl-3">
                    <!-- Locations -->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Locación</h4>
                        </div>
                        <!-- Locations Carousel -->
                        <ul class="single-carousel">
                            <li>
                                <img src="{{asset('img/locations/campoLosNarajos.jpg')}}" alt="polideportivo de los naranjos" class="img-responsive">
                                <div class="info-single-carousel">
                                    <h4>Los Narajos</h4>
                                    <p>Donde contamos con las oficinas principales de nuestro club, y el lugar donde nuestros futuros atletas hacen vida.</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('img/locations/asopar.jpg')}}" alt="complejo deportivo asopar" class="img-responsive">
                                <div class="info-single-carousel">
                                    <h4>Asopar</h4>
                                    <p>El complejo deportivo asopar de la lagunita, es donde nuestras categorías #sub17 #sub18 #sub20 realizan sus preparaciones semanas tras semanas, y afrontan sus partidos de torneos nacionales como local.</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('img/locations/campoCountry.jpg')}}" alt="campo de futbol del country club la lagunita" class="img-responsive">
                                <div class="info-single-carousel">
                                    <h4>Campo Country Club Lagunita</h4>
                                    <p>En el campo de futbol principal de la lagunita country club es donde hace vida nuestro primer equipo junto con su filial, para dejar en alto la representación del municipio Hatillo.</p>
                                </div>
                            </li>
                        </ul>
                        <!-- Locations Carousel -->
                    </div>
                    <!-- End Locations -->

                    <!-- Video presentation -->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Video Presentación</h4>
                        </div>
                        <!-- Locations Video -->
                        <div class="row">
                            <iframe src="https://www.youtube.com/embed/yjQPw-fPb4A" class="video"></iframe>
                            <div class="info-panel">
                                <h4>Nuestro Lema</h4>
                                <p>Más que un club, una familia</p>
                            </div>
                        </div>
                        <!-- End Locations Video -->
                    </div>
                    <!-- End Video presentation-->

                    <!-- Widget img-->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Widget</h4>
                        </div>
                        <img src="{{asset('img/hero.jpg')}}" alt="widget del club del hatillo">
                        <div class="row">
                            <!-- <div class="info-panel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,  ut sit amet, consectetur adipisicing elit, labore et dolore.</p>
                                       </div> -->
                        </div>
                    </div>
                    <!-- End Widget img-->
                </aside>
                <!-- End content Sidebar Center -->

                <!-- content Sidebar Right -->
                <!-- <aside class="col-sm-6 col-lg-3 col-xl-2">

                            <div class="panel-box">
                                <div class="titles">
                                    <h4><i class="fa fa-calendar"></i>Diary</h4>
                                </div>


                                <ul class="list-diary">

                                    <li>
                                        <h6>GROUP A <span>14 JUN 2018 - 18:00</span></h6>
                                        <ul class="club-logo">
                                            <li>
                                                <img src="img/clubs-logos/rusia.png" alt="">
                                                <span>RUSSIA</span>
                                            </li>
                                            <li>
                                                <img src="img/clubs-logos/arabia.png" alt="">
                                                <span>SAUDI ARABIA</span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h6>GROUP E <span>22 JUN 2018 - 15:00</span></h6>
                                        <ul class="club-logo">
                                            <li>
                                                <img src="img/clubs-logos/bra.png" alt="">
                                                <span>BRAZIL</span>
                                            </li>
                                            <li>
                                                <img src="img/clubs-logos/costa-rica.png" alt="">
                                                <span>COSTA RICA</span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h6>GROUP H <span>19 JUN 2018 - 15:00</span></h6>
                                        <ul class="club-logo">
                                            <li>
                                                <img src="img/clubs-logos/colombia.png" alt="">
                                                <span>COLOMBIA</span>
                                            </li>
                                            <li>
                                                <img src="img/clubs-logos/japan.png" alt="">
                                                <span>JAPAN</span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h6>GROUP C <span>16 JUN 2018 - 15:00</span></h6>
                                        <ul class="club-logo">
                                            <li>
                                                <img src="img/clubs-logos/fra.png" alt="">
                                                <span>FRANCE</span>
                                            </li>
                                            <li>
                                                <img src="img/clubs-logos/aus.png" alt="">
                                                <span>AUSTRALIA</span>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>

                            </div>

                            <div class="panel-box">
                               <div class="titles no-margin">
                                    <h4><i class="fa fa-link"></i>Cta</h4>
                                </div>
                                <a href="http://themeforest.net/user/iwthemes/portfolio?ref=iwthemes" target="_blank">
                                    <img src="img/adds/sidebar.png" class="img-responsive" alt="">
                                </a>
                            </div>

                        </aside> -->
            </div>
        </div>
    </div>
    <!-- End White Section -->


    <!-- End gray Section -->
    <!-- <div class="dark-section paddings-big">
        <div class="scale">
            <div class="skewmask-block"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5 padding-top">
                    <h2>Eventos Municipales</h2>
                    <p class="lead" align="justify">En nuestro municipio del Hatillo somos participes y fomentadores de muchos eventos en diferentes extractos sociales, no solo en lo deportivo sí no también en el área educacional, cultural y entre muchas otros. Acá te damos una visión general de nuestro club deportivo ayudando y apoyando al máximo a toda la comunidad hatillana.</p>

                    <div class="row">
                        <div class="col-6">
                            <ul class="list-style">
                                <li><a href="#"><i class="fa fa-angle-right"></i> Deportivos</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Culturales</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Sociales</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Recreacional</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Escolares</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Zona Rurales</a></li>
                            </ul>
                        </div>

                        <div class="col-6">
                            <ul class="list-style">
                                <li><a href="#"><i class="fa fa-angle-right"></i> Zona Rurales</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Committees</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Official Documents</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Terms Of Service</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Organisation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <a href="#">
                                <div class="item-boxed-img small" style="background: url({{asset('img/eventos/escolar.jpg')}});">
                                    <h4>Escolares </h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <a href="#">
                                <div class="item-boxed-img small" style="background: url({{asset('img/eventos/cultural.jpg')}});">
                                    <h4>Culturales</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <a href="#">
                                <div class="item-boxed-img small" style="background: url({{asset('img/eventos/social.jpg')}});">
                                    <h4>Sociales</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="#">
                                <div class="item-boxed-img small" style="background: url({{asset('img/eventos/deportivos.jpg')}});">
                                    <h4>Deportivos </h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <a href="#l">
                                <div class="item-boxed-img small" style="background: url({{asset('img/eventos/recreacional.jpg')}});">
                                    <h4>Recreación</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <a href="#">
                                <div class="item-boxed-img small" style="background: url({{asset('img/eventos/localidad.jpg')}});">
                                    <h4>Localidades</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Gray Section -->


    <!-- Parallax Section -->
    <div class="parallax-section" style="background:url({{asset('img/parallax.jpg')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <!-- <h1 class="big-title">En el Hatillo lo hacemos posible</h1> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Gray Section -->

    <!-- Patrocinio -->
    @include('secciones.sponsors')
    <!-- End Patrocinio -->
    <br>
    <!-- Newsletter -->
    <!-- @include('secciones.suscripcion') -->
    <!-- End Newsletter -->

</section>
<!-- End Section Area -  Content Central -->

<div class="instagram-btn">
    <div class="btn-instagram">
        <i class="fa fa-instagram"></i>
        SIGUENOS
        <a href="https://www.instagram.com/cdmhfvf/" target="_blank">&#64;CDMH</a>
    </div>
</div>

<div class="content-instagram">
    <div id="instafeed"></div>
</div>


@endsection
