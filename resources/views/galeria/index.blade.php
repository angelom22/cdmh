@extends('layouts.app')

@section('css')
    <!-- jconfirm -->
    <link rel="stylesheet" href="/css/jconfirm/JConfirm.min.css">
@endsection


@section('content')

<!-- menu content -->
@include('layouts.menu-2')
<!-- menu content -->

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
    <!-- White Section -->
    <div class="white-section paddings">
                    <div class="container">

                        @if(Auth::check())
                        <div class="panel-box" style="display:block;">
                            <a href="{{route('galeria.create')}}" class="btn btn-info">Nueva Galería</a>
                        </div>
                        @endif
                        @include('flash::message')
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <h3 class="clear-title no-margin">Galería del Club</h3>
                            </div>

                            <div class="col-lg-8">
                                <!-- Nav Filters -->
                                <div class="portfolioFilter no-margin no-bg pull-right">
                                    <a href="#" data-filter="*" class="current">Todas</a>
                                    <a href="#" data-filter=".1" >Club</a>
                                    <a href="#" data-filter=".2">primer Equipo</a>
                                    <a href="#" data-filter=".3">Juveniles</a>
                                    <a href="#" data-filter=".4">Base</a>
                                </div>
                                <!-- End Nav Filters -->
                            </div>
                        </div>


                        <div class="row portfolioContainer margin-top">


                            <!-- Item Gallery -->
                            @foreach($galerias as $galeria)
                            <div class="col-sm-6 col-lg-4 col-xl-3 {{$galeria->categoria->id}}">
                                <div class="item-gallery">
                                    <div class="hover small">
                                        <img src="{{$galeria->imagen->first()->url}}" alt="{{$galeria->nombre}}" />
                                        @if($galeria->imagen->count() > 1)

                                        @foreach($galeria->imagen as $imagen)
                                        <a class="swipebox-ligbox"  href="{{$imagen->url}}">
                                            <div class="overlay"><i class="fa fa-plus"></i></div>
                                        </a>
                                        @endforeach

                                        @elseif($galeria->video)
                                        <a class="swipebox-ligbox"  href="#">
                                            <div class="overlay"><i class="fa fa-plus"></i></div>
                                        </a>
                                        @endif

                                    </div>
                                    <div class="info-gallery">
                                        <p>{{$galeria->nombre}}</p>
                                        @if($galeria->video)
                                            <i class="fa fa-video-camera"></i>
                                        @elseif($galeria->imagen)
                                            <i class="fa fa-picture-o"></i>
                                        @endif
                                        <p>{{$galeria->fecha->format('d-m-Y')}}</p>
                                    </div>
                                @if(Auth::check())

                                @if(Auth::user()->Admin() == 'admin')

                                <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-wrench">Editar</span>
                                </a>


                                <a data-route="{{route('galeria.destroy', ['galerium' => $galeria->id]) }}" class="btn btn-danger delete-record" href="#" >Eliminar</a>

                                @endif
                                @endif
                                </div>
                            </div>
                            @endforeach
                            <!-- Item Gallery -->

                        </div>
                    </div>
                </div>
                <!-- End White Section -->


</section>

@include('secciones.siguenosInstagram')

@endsection

@section('js')
<!-- jconfirm -->
<script src="{{asset('/plugins/jconfirm/JConfirm.min.js')}}"></script>

<script src="{{asset('/js/functions.js')}}"></script>

@endsection
