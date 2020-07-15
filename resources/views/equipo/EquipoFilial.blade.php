@extends('layouts.app')

@section('content')

<!-- Header-->
@include('layouts.menu-2')
<!-- End Header-->

<!-- Section Title -->
<div class="section-title" style="background:url(img/parallax.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Filial</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{url('/')}}">Inicio</a></li>
                        <li>Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Title -->

<!-- Section Area - Content Central -->
<section class="content-info">

    <!-- Content Central -->
    <section class="container">
        <div class="row">
            <div class="page-error">
                <h1>En construcción <i class="fa fa-unlink"></i></h1>
                <hr class="tall">
                <!-- <p class="lead">Lo sentimos, esta secion de la página de encuentra en construcción.</p> -->
                <a href="{{url('/')}}" class="btn btn-lg btn-primary">Retornar al Inicio</a>
            </div>
        </div>
    </section>
    <!-- End Content Central -->

    <!-- Newsletter -->
    @include('secciones.suscripcion')
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
