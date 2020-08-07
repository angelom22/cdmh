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

    <!-- <div class="col-lg-12">
        <div class="box-start">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="info-match">
                        <div class="row">
                            <div class="col">
                                <h4>
                                    <span>Fecha</span>
                                    30 JUL 2020
                                </h4>
                            </div>
                            <div class="col">
                                <h4>
                                    <span>Locación</span>
                                    Caracas
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="horizontal-next-teams">
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="single-team.html">
                                    <img src="{{asset('img/logo.png')}}" alt="logo del club">
                                    <span>CHMH</span>
                                </a>
                            </div>
                            <div class="col">
                                <strong>Vs</strong>
                            </div>
                            <div class="col">
                                <a href="single-team.html">
                                    <img src="{{asset('img/logo.png')}}" alt="logo de la visita">
                                    <span>Visita</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="horizontal-next-counter">
                        <div id="event-one" class="counter"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- White Section -->
    <div class="paddings">
        <div class="container">
            <div class="row">
                <div class="col lg-8">
                    <!-- Recent Post -->
                    <div class="panel-box">
                        <div class="titles">
                            <h4>Noticias Resientes</h4>
                        </div>
                        <!-- Post Item -->
                        @include('noticias.NoticiasRecientes')
                        <!-- End Post Item -->
                    </div>
                    <!-- End Recent Post -->
                </div>
                <!-- content Sidebar Center -->
                @include('secciones.WidgetRight')
                <!-- End content Sidebar Center -->
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
    <div class="parallax-section" style="background:url({{asset('img/parallax.jpg')}}); object-fit: cover;">
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

@include('secciones.siguenosInstagram')


@endsection
