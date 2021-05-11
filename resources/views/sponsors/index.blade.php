@extends('layouts.app')

@section('content')

<!-- Header-->
@include('layouts.menu')
<!-- End Header-->

<!-- Section Title -->
<div class="section-title big-title parallax-section" style="background:url({{asset('img/parallax2.jpg')}}); 
object-fit: cover;
background-size: cover !important;
background-attachment: fixed !important;
background-position: top center !important;
background-repeat: no-repeat !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Sponsors Del Club Deportivo Municipal de el Hatillo</h1>
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
                    <!-- <h4 class="subtitle">
                        Sponsors Del Club Deportivo Municipal de el Hatillo
                    </h4> -->
                    <div class="accrodation">
                        <!-- section 1 -->
                        <span class="acc-trigger"><a href="#">Convenios</a></span>
                        <div class="acc-container" style="display: none;">
                            <div class="content">
                                <p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                
                            </div>
                        </div>

                        <!-- section 2 -->
                        <span class="acc-trigger"><a href="#">Alianzas</a></span>
                        <div class="acc-container" style="display: none;">
                            <div class="content">
                            <p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>

                        <!-- section 3 -->
                        <span class="acc-trigger"><a href="#">Partners</a></span>
                        <div class="acc-container" style="display: none;">
                            <div class="content">
                            <p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <img src="{{asset('/img/hero.jpg')}}" style="border-radius:10px" alt="nuestra historia">
                </div>
            </div>

           
        </div>
    </div>
    <!-- End White Section -->

    <!-- Parallax Section -->
    <div class="parallax-section" style="background:url('/img/parallax.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <!-- <h1 class="big-title">We are a great team</h1> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Gray Section -->

    <!-- End gray Section -->
    <div class="default-section paddings">
                    <div class="container">
                        <div class="row">
                           
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="item-team">
                                    <div class="head-team">
                                        <img src="{{asset('/img/sponsors/AlcaldiaHatillo.png')}}" alt="logo alcaldia del hatillo">
                                        <div class="overlay"><a href="#">+</a></div>
                                    </div>
                                    <div class="info-team">
                                        <!-- <span class="logo-team">
                                            <img src="/img/sponsors/AlcaldiaHatillo.png" alt="logo-team">
                                        </span> -->
                                        <h4>
                                        Alcaldía de el hatillo
                                        </h4>
                                        <span class="location-team">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            El Hatillo, Venezuela
                                        </span>
                                        <span class="group-team">
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                            Trayectoria: 50 Años
                                        </span>
                                        <span style="display:inline; margin-bottom:100px;" class="group-team">Redes Sociales: 
                                            <a href="https://www.facebook.com/alcaldiahatillo/" class="facebook" target="_blank">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a><a href="https://www.instagram.com/alcaldiaelhatillo/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a><a href="https://twitter.com/alcaldiahatillo" class="twitter-icon" target="_blank">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </span>

                                    </div>
                                    <a href="https://alcaldiaelhatillo.gob.ve/" class="btn">Visitar Web <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="item-team">
                                    <div class="head-team">
                                        <img src="{{asset('/img/sponsors/LogoTipografiaOlympia.png')}}" alt="logo topografia olympia">
                                        <div class="overlay"><a href="#">+</a></div>
                                    </div>
                                    <div class="info-team ">
                                        <!-- <span class="logo-team">
                                            <img src="/img/sponsors/AlcaldiaHatillo.png" alt="logo-team">
                                        </span> -->
                                        <h4>
                                            Tipografía Olympia
                                        </h4>
                                        <span class="location-team">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Caracas, Venezuela
                                        </span>
                                        <span class="group-team">
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                            Trayectoria: 15 Años
                                        </span>
                                        <span style="display:inline; margin-bottom:100px;" class="group-team">Redes Sociales: 
                                            <a href="https://www.facebook.com/" class="facebook" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://twitter.com/" class="twitter-icon" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </span>

                                    </div>
                                    <a href="#" class="btn">Visitar Web <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="item-team">
                                    <div class="head-team">
                                        <img src="{{asset('/img/sponsors/logoveneztec.png')}}" alt="logo Veneztec">
                                        <div class="overlay"><a href="https://veneztec.com/">+</a></div>
                                    </div>
                                    <div class="info-team ">
                                        <!-- <span class="logo-team">
                                            <img src="/img/sponsors/AlcaldiaHatillo.png" alt="logo-team">
                                        </span> -->
                                        <h4>
                                            Veneztecnology
                                        </h4>
                                        <span class="location-team">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Caracas, Venezuela
                                        </span>
                                        <span class="group-team">
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                            Trayectoria: 5 Años
                                        </span>
                                        <span style="display:inline; margin-bottom:100px;" class="group-team">Redes Sociales: 
                                            <a href="https://www.facebook.com/cdmhfvf" class="facebook" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a><a href="https://www.instagram.com/cdmhfvf/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://twitter.com/cdmhfvf" class="twitter-icon" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </span>

                                    </div>
                                    <a href="https://veneztec.com/" class="btn">Visitar Web <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="item-team">
                                    <div class="head-team">
                                        <img src="{{asset('/img/sponsors/sponsor01.png')}}" alt="logo Happy Tour Group">
                                        <div class="overlay"><a href="#">+</a></div>
                                    </div>
                                    <div class="info-team ">
                                        <!-- <span class="logo-team">
                                            <img src="/img/sponsors/AlcaldiaHatillo.png" alt="logo-team">
                                        </span> -->
                                        <h4>
                                            Happy Tour Group
                                        </h4>
                                        <span class="location-team">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Caracas, Venezuela
                                        </span>
                                        <span class="group-team">
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                            Trayectoria: 15 Años
                                        </span>
                                        <span style="display:inline; margin-bottom:100px;" class="group-team">Redes Sociales: 
                                            <a href="https://www.facebook.com/" class="facebook" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://twitter.com/" class="twitter-icon" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </span>

                                    </div>
                                    <a href="#" class="btn">Visitar Web <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="item-team">
                                    <div class="head-team">
                                        <img src="{{asset('/img/sponsors/sponsor03.png')}}" alt="logo P.A.I.S">
                                        <div class="overlay"><a href="#">+</a></div>
                                    </div>
                                    <div class="info-team ">
                                        <!-- <span class="logo-team">
                                            <img src="/img/sponsors/AlcaldiaHatillo.png" alt="logo-team">
                                        </span> -->
                                        <h4>
                                        Pasaporte de Asistencia Internacional Solidaria
                                        </h4>
                                        <span class="location-team">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Caracas, Venezuela
                                        </span>
                                        <span class="group-team">
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                            Trayectoria: 25 Años
                                        </span>
                                        <span style="display:inline; margin-bottom:100px;" class="group-team">Redes Sociales: 
                                            <a href="https://www.facebook.com/" class="facebook" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://twitter.com/" class="twitter-icon" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </span>

                                    </div>
                                    <a href="#" class="btn">Visitar Web <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="item-team">
                                    <div class="head-team">
                                        <img src="{{asset('/img/sponsors/sponsor02.png')}}" alt="logo Happy Tuor Caracas">
                                        <div class="overlay"><a href="#">+</a></div>
                                    </div>
                                    <div class="info-team ">
                                        <!-- <span class="logo-team">
                                            <img src="/img/sponsors/AlcaldiaHatillo.png" alt="logo-team">
                                        </span> -->
                                        <h4>
                                        Happy Tour Caracas
                                        </h4>
                                        <span class="location-team">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Caracas, Venezuela
                                        </span>
                                        <span class="group-team">
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                            Trayectoria: 20 Años
                                        </span>
                                        <span style="display:inline; margin-bottom:100px;" class="group-team">Redes Sociales: 
                                            <a href="https://www.facebook.com/" class="facebook" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://twitter.com/" class="twitter-icon" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </span>

                                    </div>
                                    <a href="#" class="btn">Visitar Web <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="item-team">
                                    <div class="head-team">
                                        <img src="{{asset('/img/sponsors/sponsor04.png')}}" alt="logo JEOD">
                                        <div class="overlay"><a href="#">+</a></div>
                                    </div>
                                    <div class="info-team ">
                                        <!-- <span class="logo-team">
                                            <img src="/img/sponsors/AlcaldiaHatillo.png" alt="logo-team">
                                        </span> -->
                                        <h4>
                                        JEOD
                                        </h4>
                                        <span class="location-team">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Caracas, Venezuela
                                        </span>
                                        <span class="group-team">
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                            Trayectoria: 20 Años
                                        </span>
                                        <span style="display:inline; margin-bottom:100px;" class="group-team">Redes Sociales: 
                                            <a href="https://www.facebook.com/" class="facebook" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://twitter.com/" class="twitter-icon" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </span>

                                    </div>
                                    <a href="#" class="btn">Visitar Web <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="item-team">
                                    <div class="head-team">
                                        <img src="{{asset('/img/sponsors/sponsor05.png')}}" alt="logo CNQR">
                                        <div class="overlay"><a href="#">+</a></div>
                                    </div>
                                    <div class="info-team ">
                                        <!-- <span class="logo-team">
                                            <img src="/img/sponsors/AlcaldiaHatillo.png" alt="logo-team">
                                        </span> -->
                                        <h4>
                                        CNQR
                                        </h4>
                                        <span class="location-team">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Caracas, Venezuela
                                        </span>
                                        <span class="group-team">
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                            Trayectoria: 5 Años
                                        </span>
                                        <span style="display:inline; margin-bottom:100px;" class="group-team">Redes Sociales: 
                                            <a href="https://www.facebook.com/" class="facebook" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://twitter.com/" class="twitter-icon" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </span>

                                    </div>
                                    <a href="#" class="btn">Visitar Web <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
    <!-- End Gray Section -->


    

</section>
<!-- End Section Area -  Content Central -->

@include('secciones.siguenosInstagram')

@endsection
