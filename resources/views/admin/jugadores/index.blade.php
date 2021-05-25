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
                <h1>Atletas del Club</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{url('/')}}">Inicio</a></li>
                        <li>Atletas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Section Area - Content Central -->
<section class="content-info">

    <!-- Nav Filters -->
    <div class="portfolioFilter">
        <div class="container">
            <h5><i class="fa fa-filter" aria-hidden="true"></i>Filtrar por:</h5>
            <a href="#" data-filter=".primera" class="current">Primer Equipo</a>
            <a href="#" data-filter=".sub20-21">Sub 20-21</a>
            <a href="#" data-filter=".sub18-19">sub 18-19</a>
            <a href="#" data-filter=".sub15-16">Sub 17-16</a>
            <a href="#" data-filter=".sub14">Sub 15-14</a>
        </div>
    </div>
    <!-- End Nav Filters -->

    <div class="container padding-top">
        <div class="row portfolioContainer">

            <!-- Item Player -->
            @foreach($jugadores as $jugador)
            <div class="col-xl-3 col-lg-4 col-md-6 {{$jugador->categoria_jugador}}">
                <div class="item-player">
                    <div class="head-player">
                        <img src="{{$jugador->imagen->url}}" alt="{{$jugador->nombre}}">
                        <div class="overlay"><a href="#">+</a></div>
                    </div>
                    <div class="info-player">
                        <span class="number-player">
                            10
                        </span>
                        <h4>
                            {{$jugador->nombre}}
                            <span>{{$jugador->posicion}}</span>
                        </h4>
                        <ul>
                            <li>
                                <strong>NACIONALIDAD:</strong> <span><img src="/img/clubs-logos/venezuela.png" alt="logo bandera">{{$jugador->nacionalidad}}</span>
                            </li>
                            <li><strong>EDAD:</strong> <span>{{$jugador->edad}}</span></li>
                            <li><strong>PARTIDOS:</strong> <span>{{$jugador->partidos}}</span></li>
                            <li><strong>GOLES:</strong> <span>{{$jugador->goles}}</span></li>
                           
                        </ul>
                    </div>
                    <!-- <a href="#" class="btn">Ver Ficha<i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
                    @if(Auth::check())
                        @if(Auth::user()->Admin() == 'admin')
                        <a href="{{route('JugadorEdit', $jugador->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-wrench">Editar</span>
                        </a>
                        
                        <a  class="btn btn-danger delete-record" 
                            data-route="{{ route('jugador.destroy', ['jugador' => $jugador->id]) }}"  
                            href="#" >Eliminar</a>
                        
                        <a href="#" class="btn">Ver ficha <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        @endif
                    @endif
                </div>
            </div>
            @endforeach
            <!-- End Item Player -->
            {{ $jugadores->links() }}
        </div>
    </div>

</section>
<!-- End Section Area -  Content Central -->


@include('secciones.siguenosInstagram')

@endsection

@section('js')
<!-- jconfirm -->
<script src="{{asset('/plugins/jconfirm/JConfirm.min.js')}}"></script>

<script src="{{asset('/js/functions.js')}}"></script>

@endsection
