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
                <h1>Galeria</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{url('/')}}">Inicio</a></li>
                        <li>Galeria</li>
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

    hola
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
