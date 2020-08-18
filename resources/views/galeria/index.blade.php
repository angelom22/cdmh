@extends('layouts.app')

@section('content')

<!-- menu content -->
@include('layouts.menu-2')
<!-- menu content -->

<!-- Section Title -->
<div class="section-title" style="background: url( {{asset('img/parallax.jpg')}} );">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Galería</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{url('/')}}">Inicio</a></li>
                        <li>Galería</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Title -->


<!-- Section Area - Content Central -->
<section class="content-info">
    <div class="container paddings">
        <div class="row">

            <div class="galeria">
                <img src="{{asset('img/galeria/uno.jpg')}}" alt="" class="img img-1">
                <img src="{{asset('img/galeria/dos.jpg')}}" alt="" class="img img-2">
                <img src="{{asset('img/galeria/tres.jpg')}}" alt="" class="img img-3">
                <img src="{{asset('img/galeria/cuatro.jpg')}}" alt="" class="img img-4">
                <img src="{{asset('img/galeria/cinco.jpg')}}" alt="" class="img img-5">
                <img src="{{asset('img/galeria/seis.jpg')}}" alt="" class="img img-6">
                .<div class="container">
                    <img src="" alt="" class="img-show">
                    <img src="{{asset('img/img-theme/bx-x.svg')}}" alt="close">
                </div>
            </div>

        </div>
    </div>

    <!-- Newsletter -->
    @include('secciones.suscripcion')
    <!-- End Newsletter -->


</section>

@include('secciones.siguenosInstagram')

@endsection

@section('js')

<script type="text/javascript" src="{{asset('js/galeria.js')}}"></script>

@endsection