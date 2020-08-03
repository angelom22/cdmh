@extends('layouts.app')

@section('content')

<!-- Header-->
@include('layouts.menu')
<!-- End Header-->

<!-- Section Title -->
<div class="section-title big-title parallax-section" style="background:url(img/parallax.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Nuestra Historia</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{url('/')}}">Inicio</a></li>
                        <li>Nosotros</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Title -->

<!-- Section Area - Content Central -->
<section class="content-info">

    <!-- White Section -->
    <div class="white-section paddings">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h4 class="subtitle">
                        Comprometidos con el deporte hatillano
                    </h4>
                    <div class="accrodation">
                        <!-- section 1 -->
                        <span class="acc-trigger"><a href="#">Historia</a></span>
                        <div class="acc-container" style="display: none;">
                            <div class="content">
                                <p align="justify">Este club joven que su fundación data desde el año 2015, nace a raíz del pensamiento de una persona que trabaja en pro de rescatar los valores sociales y culturales a través del deporte y en beneficio de los jóvenes. Para sembrar en ellos diciplina y deseos de autosuperación, motivándolos a través de este lindo deporte como lo es el futbol.</p>
                                <p align="justify">Con el deseo y las ganas de convertirse en el club ejemplo y reconocido a nivel municipal y nacional, este sigue día tras día enfocado en alcanzar los objetivos propuestos cada año, que ayuden a mejorar la imagen del Club Municipal de el Hatillo.</p>
                            </div>
                        </div>

                        <!-- section 2 -->
                        <span class="acc-trigger"><a href="#">Misión</a></span>
                        <div class="acc-container" style="display: none;">
                            <div class="content">
                                <p align="justify">Desde mediados del 2018 a la actualidad nuestra institución empezó a trabajar en programas sociales en diferentes sectores del municipio y sus alrededores apoyando a niños, jóvenes y adultos.</p>
                                <p align="justify">En el Club Deportivo Municipal de El Hatillo hemos venido realizando diferentes actividades deportivas, recreativas, sociales y culturales que han beneficiado a más de 350 niños y jóvenes, llevando el deporte a nuestras entidades educativas con el programa de clínicas deportivas, también hemos venido recuperando espacios deportivos, jornadas de alimentación, donación de ropa y juguetes.</p>
                                <p align="justify">Más allá de formar grandes deportistas, nuestra misión será apoyar y ayudar a toda nuestra comunidad #hatillana y de todo el país que así lo requiera.</p>
                            </div>
                        </div>

                        <!-- section 3 -->
                        <span class="acc-trigger"><a href="#">Visión</a></span>
                        <div class="acc-container" style="display: none;">
                            <div class="content">
                                <p align="justify">En muestra visión como club tenemos el firme objetivo de alcanzar ser un club de alta competición y formador de atletas de alto rendimiento, mas allá de esto también involucrados con el desarrollo social y educativo del país, tenemos previsto ser el club municipal y de ejemplo para una Venezuela posible, en donde todos tengamos las mismas posibilidades de desarrollo y crecimiento.
                                </p>
                                <p align="justify">Dando así la oportunidad a nuestros jóvenes de tomar vías que solo los conduzcan a su crecimiento personal y profesional, orientándolos de la mejor forma, para de esta manera contribuir en la mejore social del país.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <img src="{{asset('img/locations/about.jpg')}}" style="border-radius:10%" alt="nuestra historia">
                </div>
            </div>

            <div class="row padding-top">
                <div class="col-md-6 col-xl-3">
                    <div class="item-boxed-service">
                        <h4>Primer Equipo </h4>
                        <p>Plantilla</p>
                        <a href="#"><i class="fa fa-plus-circle"></i>Ver mas</a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="item-boxed-service">
                        <h4>Club</h4>
                        <p>CDMH</p>
                        <a href="#"><i class="fa fa-plus-circle"></i>Ver mas</a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="item-boxed-service">
                        <h4>Campeonatos</h4>
                        <p>Ligas Nacionales</p>
                        <a href="#"><i class="fa fa-plus-circle"></i>Ver mas</a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="item-boxed-service">
                        <h4>Cuerpo Tecnico</h4>
                        <p>Categorias</p>
                        <a href="#"><i class="fa fa-plus-circle"></i>Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End White Section -->

    <!-- Parallax Section -->
    <!-- <div class="parallax-section" style="background:url(img/parallax.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h1 class="big-title">We are a great team</h1>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Gray Section -->

    <!-- End gray Section -->
    <!-- <div class="default-section paddings">
                    <div class="container">
                        <div class="row">

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
                                        <ul>
                                            <li>
                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                            </li>
                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                            <li><strong>AGE:</strong> <span>28</span></li>
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
                                        <ul>
                                            <li>
                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                            </li>
                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                            <li><strong>AGE:</strong> <span>28</span></li>
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
                                            2
                                        </span>
                                        <h4>
                                            Neymar
                                            <span>Midfielder</span>
                                        </h4>
                                        <ul>
                                            <li>
                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                            </li>
                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                            <li><strong>AGE:</strong> <span>28</span></li>
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
                                        <ul>
                                            <li>
                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                            </li>
                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                            <li><strong>AGE:</strong> <span>28</span></li>
                                        </ul>
                                    </div>
                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> -->
    <!-- End Gray Section -->

    <!-- Sponsors-->
    @include('secciones.sponsors')
    <!-- End Sponsors -->

    <!-- Newsletter -->
    @include('secciones.suscripcion')
    <!-- End Newsletter -->

</section>
<!-- End Section Area -  Content Central -->

@include('secciones.siguenosInstagram')

@endsection
